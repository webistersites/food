<?php

include 'cabecalho.php';

$id_produto = $_GET['id'];

$q_sepizza 	= mysql_query("SELECT category_id, code FROM tec_products WHERE id = $id_produto");
$sepizza 	= mysql_result($q_sepizza, 0);

if ($sepizza == 1) 
{
	$pizza = mysql_result($q_sepizza, 0,1);
	mysql_query("DELETE FROM tec_products WHERE code = $pizza");
}

mysql_query("DELETE FROM tec_products WHERE id = " . $id_produto);

echo '<meta http-equiv="refresh" content="0.1; url=config.php">';

?>

