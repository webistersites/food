<?php 
include 'conectaMobile.php';

$mesa 	= $_GET['mesa'];

mysql_query("TRUNCATE TABLE pedido_mesa".$mesa);

$q_mesa = mysql_query("SELECT count(id) FROM pedido_mesa".$mesa);
$resultado = mysql_result($q_mesa, 0);


if ($resultado == 0) 
{
	mysql_query("UPDATE tec_mesas SET estado = 'free' WHERE id = $mesa");
}

 ?>

 <meta http-equiv="refresh" content="0.2;URL=index.php">