<?php 
include 'conectaMobile.php';

$id 	= $_GET['id'];
$mesa	= $_GET['mesa'];

mysql_query("DELETE FROM pedido_mesa".$mesa." WHERE id = ".$id);


echo '<meta http-equiv="refresh" content="0.2;URL=mob_mesa'.$mesa.'.php">';

 ?>

