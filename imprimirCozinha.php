<?php 
include 'conecta.php';

$mesa 	= $_GET['mesa'];

mysql_query("UPDATE tec_mesas SET estado = 'busy' WHERE id = $mesa");

echo '<meta http-equiv="refresh" content="0.2;URL=mesas.php">';

 ?>