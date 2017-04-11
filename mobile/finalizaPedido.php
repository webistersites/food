<?php 
include 'conectaMobile.php';

$mesa 	= $_GET['mesa'];

$q_cozinha 	= mysql_query("
	select count(b.cozinha) as coz from pedido_aux_mesa".$mesa." a
	inner join tec_products b
	on a.id_produto = b.id
	where b.cozinha = 1");

$cozinha 	= mysql_result($q_cozinha,0);

if ($cozinha == 0) 
{
	mysql_query("UPDATE tec_mesas SET estado = 'busy' WHERE id = $mesa");
}
else 
{
	mysql_query("UPDATE tec_mesas SET estado = 'warning' WHERE id = $mesa");
}

mysql_query("INSERT INTO pedido_mesa".$mesa." (id_produto,quantidade,obs,id_garcom) SELECT id_produto,quantidade,obs,id_garcom FROM pedido_aux_mesa".$mesa);

mysql_query("TRUNCATE TABLE pedido_aux_mesa".$mesa);

 ?>

  <meta http-equiv="refresh" content="0.2;URL=index.php">