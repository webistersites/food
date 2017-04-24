
<?php
include 'conecta.php';

//$nome     = $_POST['nome'];
//$email    = $_POST['email'];
//$telefone = $_POST['telefone'];
$id   = $_GET['id_del'];
$mesa   = $_GET['mesa'];

//$consulta = mysql_query("SELECT id FROM tec_products WHERE CONCAT(CODE, ' - ',NAME) = '$pesquisa'");
//$id = mysql_result($consulta,0);


        //$ver_id_cliente = mysql_query("SELECT id_cliente FROM pedido_mesa".$mesa);
        mysql_query("DELETE FROM pedido_mesa".$mesa." WHERE id = $id");
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
                                a.impresso
                                ,b.cozinha
                                FROM
                                pedido_mesa".$mesa." a
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
    while($data = mysql_fetch_array($busca)){
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
                $return .= "<td class='center aligned'><form action='processa_mesa.php' method='post'><input type='hidden' value='".$id_mesa."' name='mesa'><input type='hidden' name='seu_nome2' value='".$data['id']."'><input type='text' name='seu_nome' placeholder='".$data['quantidade']."' size='2'>x</td>";
                $return .= "<td>R$ " . $data['Total']      .  "</td>";
                $return .= "<td class='right aligned'>"."<a href='javascript:void(0);' onclick='deletaMesas(".$data['id'].",".$mesa.")'><i class='trash icon'></i></a>";
        $return .= "</tr>";
                $subtotal+=$data['Total'];
        }
                $return .= "</table>";
                $return .= "<table class='ui table'>";
                $return .= "<tr>";
                $return .= "<td><a href='imprimir_cozinha_mesas.php?mesa=".$mesa."' class='ui grey fluid tiny button'>Imprimir Cozinha</a></td>";
                $return .= "<td colspan='3' rowspan='2'><div class='subtotal'><span>subtotal </span>R$ ".number_format($subtotal, 2,',','.')."</div></td>";
                $return .= "</tr>";
                $return .= "<tr>";
                $return .= "<td><a href='imprimir_conta.php?mesa=".$mesa."' class='ui grey tiny fluid button'>Fechar Mesa</a></td>";
                $return .= "</tr>";
                $return .= "</table>";
                $return .= "</p>";
    

echo $return;

?>
