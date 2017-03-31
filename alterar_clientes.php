<?php

include 'cabecalho.php';

$id 		= $_POST['id'];
$id2 		= $_POST['id2'];
$nome       = $_POST['nome'];
$telefone   = $_POST['telefone'];
$endereco   = $_POST['endereco'];
$cf1		= $_POST['cf1'];
$bairro     = $_POST['bairro'];
$cep        = $_POST['cep'];
$taxa       = $_POST['taxa'];

$exec_nome = mysql_query("SELECT name FROM clientes WHERE id = $id2");
$ver_nome = mysql_result($exec_nome, 0);

if ($nome != "") 
{
	// $nome = $_POST['nome'];
	mysql_query("UPDATE clientes SET name = '".$nome."' WHERE id = $id2");
} 
else 
{
	$nome = 0;
}

if ($telefone != "") 
{
	// $telefone = $_POST['telefone'];
	mysql_query("UPDATE clientes SET phone = '".$telefone."' WHERE id = $id2");
}
else 
{
	$nome = 0;
}

if ($bairro != "") 
{
	// $bairro = $_POST['bairro'];
	mysql_query("UPDATE clientes SET bairro = '".$bairro."' WHERE id = $id2");
}
else 
{
	$nome = 0;
}

if ($cf1 != "") 
{
	// $bairro = $_POST['bairro'];
	mysql_query("UPDATE clientes SET cf1 = '".$cf1."' WHERE id = $id2");
}
else 
{
	$nome = 0;
}

if ($cep != "") 
{
	// $cep = $_POST['cep'];
	mysql_query("UPDATE clientes SET cep = '".$cep."' WHERE id = $id2");
}
else 
{
	$nome = 0;
}

if ($endereco != "") 
{
	// $endereco = $_POST['endereco'];
	mysql_query("UPDATE clientes SET endereco = '".$endereco."' WHERE id = ".$id2);
}
else 
{
	$nome = 0;
}

if ($taxa != "") 
{
	// $taxa = $_POST['taxa'];
	mysql_query("UPDATE clientes SET taxa_de_entrega = '".$taxa."' WHERE id = $id2");
}
else 
{
	$nome = 0;
}


echo '<meta http-equiv="refresh" content="0.1; url=insere_cliente_delivery.php?cliente='.$ver_nome.'&id='.$id2.'">';

?>