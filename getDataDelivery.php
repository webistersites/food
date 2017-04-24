<?php
include 'conecta.php';
echo "<script>";
include 'ajax2.js';
echo '$(document).ready(function(){
         $("#finalizar").click(function(){
          $("#refresh").load("forma_pagamento.php");
         });
        });';
echo "</script>";
$pega_cliente = mysql_query("select * from pedido_delivery");
$ver_consulta = mysql_fetch_array($pega_cliente);
$id   = $_GET['id'];
$sql  = "";

if(empty($id)){
	$type = "all"; 
	$sql = "
                SELECT
                   a.id,
                   b.code,
                b.name as Produto,
                a.quantidade,
                b.cost as Preço,
                a.quantidade*b.cost as Total,
                a.obs,
                b.category_id
                ,a.impresso,
                b.cozinha
                FROM
                    pedido_delivery a
                INNER JOIN
                     tec_products b
                ON
                a.id_produto = b.id
                ORDER BY a.id";
}
else{
	$type = "id";
	$sql = "SELECT * FROM contatos WHERE id = " . mysql_real_escape_string($id);
}

$result = mysql_query($sql);

if($type == "all"){
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
	while($data = mysql_fetch_array($result)){
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
else{
	if($data = mysql_fetch_array($result)){
		$return = "Nome: " .     $data['nome'] .     "<br>";
		$return .= "E-mail: " .   $data['email'] .    "<br>";
		$return .= "Telefone: " . $data['telefone'] . "<br>";
	}
	else{
		$return .= "Não foi possível listar o registro com id: " . $id;
	}
}

echo $return;


?>

