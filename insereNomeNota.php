<?php 
include 'conecta.php';

$nome_nota = $_GET['nome'];

$ver_nome = mysql_query("SELECT id FROM nome_nota");

if (mysql_num_rows($ver_nome) == 0) 
{
	mysql_query("INSERT nome_nota SELECT '','$nome_nota'");
}
else 
{
	mysql_query("UPDATE nome_nota SET nome = '$nome_nota'");
}


$result = $nome_nota;

echo $result;


?>