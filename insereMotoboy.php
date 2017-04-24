<?php 
include 'conecta.php';

$id = $_GET['id'];

mysql_query("UPDATE pedido_delivery SET id_motoboy = $id");

$q_motoboy 	= mysql_query("SELECT nome FROM usuarios WHERE id = $id");
$motoboy 	= mysql_result($q_motoboy, 0);

$moto = '<b>Motoboy: </b>' . $motoboy;

echo $moto;
 ?>