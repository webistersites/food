<?php

include 'cabecalho.php';

$nome       = $_POST['nome'];
$telefone   = $_POST['telefone'];
$endereco   = $_POST['endereco'];
$cf1   		= $_POST['cf1'];
$bairro     = $_POST['bairro'];
$cep        = $_POST['cep'];
$taxa       = $_POST['taxa'];

mysql_query("INSERT INTO clientes SELECT '','$nome',$cf1,'','$telefone','',$taxa,'','$endereco','$bairro','$cep',''");



echo '<meta http-equiv="refresh" content="0.1; url=insere_cliente_delivery2.php">';

?>