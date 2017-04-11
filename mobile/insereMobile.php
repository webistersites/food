<?php 
include 'conectaMobile.php';

$id 	= $_GET['id'];
$mesa 	= $_GET['mesa'];

$q_verificaDuplos = mysql_query("SELECT count(id) as qtd FROM pedido_aux_mesa".$mesa." WHERE id_produto = $id");
$verificaDuplos = mysql_result($q_verificaDuplos, 0);

if ($verificaDuplos == 0) {
	mysql_query("INSERT pedido_aux_mesa".$mesa." SELECT '',$id,1,'',1");
}
else {
	mysql_query("UPDATE pedido_aux_mesa".$mesa." SET quantidade = quantidade+1 WHERE id_produto = $id");
}


$q_itens  = mysql_query("select sum(quantidade) as pedidos from pedido_aux_mesa".$mesa); 
$itens    = mysql_result($q_itens, 0);

$result = $itens;
echo $result;


 ?>