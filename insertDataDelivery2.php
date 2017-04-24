
<?php
include 'conecta.php';
echo "<script>";
        echo '$("result").ready(function(){
                 $("#finalizar").click(function(){
                  $("#refresh").load("forma_pagamento.php");
                 });
                });';
        echo "</script>";

//$nome     = $_POST['nome'];
//$email    = $_POST['email'];
//$telefone = $_POST['telefone'];
$id   = $_GET['id'];
$pega_cliente = mysql_query("select * from pedido_delivery");
$ver_consulta = mysql_fetch_array($pega_cliente);
//$consulta = mysql_query("SELECT id FROM tec_products WHERE CONCAT(CODE, ' - ',NAME) = '$pesquisa'");
//$id = mysql_result($consulta,0);

$verifica_duplicidade = mysql_query("SELECT id_produto FROM pedido_delivery WHERE id_produto = $id and impresso = 0");
    
    if (mysql_num_rows($verifica_duplicidade) <= 0 ) 
    {
        $ver_id_cliente = mysql_query("SELECT id_cliente FROM pedido_delivery");
        mysql_query("INSERT INTO pedido_delivery SELECT '',$id,1,'',".mysql_result($ver_id_cliente,0).",0,0");
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
                                pedido_delivery a
                                INNER JOIN
                                tec_products b
                                ON
                                a.id_produto = b.id
                                ORDER BY a.id");
        $return = '<script>$("#finalizar").click(function(){
                          $("#refresh").load("testes.php");
                        });</script>'
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
                $return .= "<td class='center aligned'><form action='processa_del.php' method='post'><input type='hidden' name='seu_nome2' value='".$data['id']."'><input type='text' name='seu_nome' placeholder='".$data['quantidade']."' size='2'>x</td>";
                $return .= "<td>R$ " . $data['Total']      .  "</td>";
                $return .= "<td class='right aligned'>"."<a href='javascript:void(0);' onclick='deletaDelivery(".$data['id'].")'><i class='trash icon'></i></a>";
		$return .= "</tr>";
                $subtotal+=$data['Total'];
            }
                $return .= "</table>";
                $return .= "<table class='ui table'>";
                $return .= "<tr>";
                $return .= "<td><a href='suspender_venda.php?tipo=".$ver_consulta['id_cliente']."&total=".$subtotal."' class='ui grey fluid tiny button'>Aguardar</a><br>";
                $return .= "<a href='imprimir_cozinha_delivery.php' class='ui fluid grey tiny button'>imprimir Cozinha</a></td>";
                $return .= "<td colspan='3' rowspan='2'><div class='subtotal'><span>subtotal </span>R$ ".number_format($subtotal, 2,',','.')."</div></td>";
                $return .= "</tr>";
                $return .= "</table>";
                $return .= "</p>";
    }
    else
    {   $adicionar = mysql_query("SELECT quantidade+1 FROM pedido_delivery WHERE id_produto = $id and impresso = 0");
        $sql = mysql_query("UPDATE pedido_delivery SET quantidade = ".mysql_result($adicionar,0)." where id_produto = $id and impresso = 0");
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
                                pedido_delivery a
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
                $return .= "<td class='center aligned'><form action='processa_del.php' method='post'><input type='hidden' name='seu_nome2' value='".$data['id']."'><input type='text' name='seu_nome' placeholder='".$data['quantidade']."' size='2'>x</td>";
                $return .= "<td>R$ " . $data['Total']      .  "</td>";
                $return .= "<td class='right aligned'>"."<a href='javascript:void(0);' onclick='deletaDelivery(".$data['id'].")'><i class='trash icon'></i></a>";
		$return .= "</tr>";
                $subtotal+=$data['Total'];
            }
                $return .= "</table>";
                 $return .= "<table class='ui table'>";
                $return .= "<tr>";
                $return .= "<td><a href='suspender_venda.php?tipo=".$ver_consulta['id_cliente']."&total=".$subtotal."' class='ui grey fluid tiny button'>Aguardar</a><br>";
                $return .= "<a href='imprimir_cozinha_delivery.php' class='ui fluid grey tiny button'>imprimir Cozinha</a></td>";
                $return .= "<td colspan='3' rowspan='2'><div class='subtotal'><span>subtotal </span>R$ ".number_format($subtotal, 2,',','.')."</div></td>";
                $return .= "</tr>";
                $return .= "</table>";
                $return .= "</p>";
    }

echo $return;

?>
