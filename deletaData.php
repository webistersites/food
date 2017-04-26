
<?php
include 'conecta.php';

//$nome     = $_POST['nome'];
//$email    = $_POST['email'];
//$telefone = $_POST['telefone'];
$id   = $_GET['id_del'];

//$consulta = mysql_query("SELECT id FROM tec_products WHERE CONCAT(CODE, ' - ',NAME) = '$pesquisa'");
//$id = mysql_result($consulta,0);


        $ver_id_cliente = mysql_query("SELECT id_cliente FROM pedido_balcao");
        mysql_query("DELETE FROM pedido_balcao WHERE id = $id");
        $busca = mysql_query("
                                SELECT
                                a.id,
                                b.code,
                                b.name as Produto,
                                a.quantidade,
                                b.cost as Preço,
                                a.quantidade*b.cost as Total,
                                a.obs,
                                b.category_id,
                                a.impresso,
                                b.cozinha
                                FROM
                                pedido_balcao a
                                INNER JOIN
                                tec_products b
                                ON
                                a.id_produto = b.id
                                ORDER BY a.id");
        $return = ""
        . "<table class='ui small compact table'>"
            . "<thead>"
                . "<th class='center aligned'>Cód</th>"
                . "<th>Produto</th>"
                . "<th>Preço</th>"
                . "<th class='center aligned'>Qtd</th>"
                . "<th>Total</th>"
                . "<th class='right aligned'>Ação</th>"
            . "</thead>";
        while ($data = mysql_fetch_array($busca)) 
            {
                if ($data['impresso'] == 0 && $data['cozinha'] == 1) 
                {
                    $classe = 'negative';
                    $icone = 'warning icon';
                } else {
                    $classe = '';
                    $icone = 'checkmark icon';
                }
                $return .= "<tr class='".$classe."'>";
                $return .= "<td><i class='".$icone."'></i>" . $data['code']       .  "</td>";
                $return .= "<td>" . $data['Produto']    .  "</td>";
                $return .= "<td>R$ " . $data['Preço']      .  "</td>";
                $return .= "<td class='center aligned'><form action='processa.php' method='post'><input type='hidden' name='seu_nome2' id='seu_nome2' value='".$data['id']."'><input type='text' id='seu_nome' name='seu_nome' placeholder='".$data['quantidade']."' size='2'>x</form></td>";
                $return .= "<td>R$ " . $data['Total']      .  "</td>";
                $return .= "<td class='center aligned'>"."<a href='javascript:void(0);' onclick='deleta(".$data['id'].")'><i class='trash icon'></i></a>";
                $return .= "</tr>";
                $subtotal+=$data['Total'];
            }
                $return .= "</table>";
                $return .= "<table class='ui table'>";
                $return .= "<tr>";
                $return .= "<td>";
                $return .= "<a href='suspender_venda.php?tipo=balcao&total=".$subtotal."' class='ui grey fluid tiny button'>Aguardar</a><br>";
                $return .= "<a href='imprimir_cozinha.php' class='ui grey fluid tiny button'>Imprimir Cozinha</a>";
                //$return .= "<a href='balcaoDAO.php?truncar=yes' class='ui red fluid tiny button'>Cancelar</a>";
                $return .= "</td>";
                $return .= "<td rowspan='3'><div class='subtotal'><span>subtotal </span>R$ ".number_format($subtotal, 2,',','.')."</div></td>";
                $return .= "</tr>";
                $return .= "</table>";
                $return .= "</p>";
    

echo $return;

?>
