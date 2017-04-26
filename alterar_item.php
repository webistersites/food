<?php

include 'cabecalho.php';

$produto    	= $_POST['produto'];
$valor      	= $_POST['valor'];
$categoria  	= $_POST['categoria'];
$qtd       		= $_POST['qtd'];
$id 			= $_POST['id'];
$estoque		= $_POST['estoque'];
$cozinha		= $_POST['cozinha'];

// $exec_nome = mysql_query("SELECT name FROM clientes WHERE id = $id2");
// $ver_nome = mysql_result($exec_nome, 0);

if ($produto != "") 
{
	mysql_query("UPDATE tec_products SET name = '".$produto."' WHERE id = $id");
} 
else 
{
	$produto = 0;
}

if ($valor != "") 
{
	mysql_query("UPDATE tec_products SET cost = ".$valor." WHERE id = $id");
}
else
{
	$valor = 0;
}

if ($categoria != "") 
{
	mysql_query("UPDATE tec_products SET category_id = $categoria WHERE id = $id");
}
else
{
	$categoria = 0;
}

if ($qtd != "") 
{
	mysql_query("UPDATE tec_products SET quantity = $qtd WHERE id = $id");
}
else
{
	$qtd = 0;
}

if ($cozinha != "") 
{
	mysql_query("UPDATE tec_products SET cozinha = 1 WHERE id = $id");
}
else
{
	mysql_query("UPDATE tec_products SET cozinha = 0 WHERE id = $id");
}

if ($estoque != "") 
{
	mysql_query("UPDATE tec_products SET type = 1 WHERE id = $id");
}
else
{
	mysql_query("UPDATE tec_products SET type = 0 WHERE id = $id");
}

echo '<meta http-equiv="refresh" content="0.1; url=config.php">';

?>