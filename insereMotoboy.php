<?php 
include 'conecta.php';

$id = $_GET['id'];

if ($id == "-") 
{
	mysql_query("UPDATE pedido_delivery SET id_motoboy = 16");
	$moto = '<b>Motoboy: </b>- <a href="#" onclick="location.reload();"><i class="ui pencil icon"></i></a>';
}
else
{
	mysql_query("UPDATE pedido_delivery SET id_motoboy = $id");
	$q_motoboy 	= mysql_query("SELECT nome FROM usuarios WHERE id = $id");
	$motoboy 	= mysql_result($q_motoboy, 0);
	$moto = '<b>Motoboy: </b> ' . $motoboy . "&nbsp;&nbsp;<a href='#'' onclick='location.reload();'><i class='ui pencil icon'></i></a>";
}

echo $moto;

 ?>