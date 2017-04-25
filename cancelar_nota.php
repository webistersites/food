<?php

include 'cabecalho.php';

// $nota = $_GET['nota'];
$nota 	= $_POST['nota'];
$senha 	= $_POST['senha'];

$q_verifica_senha 	= mysql_query("SELECT count(senha) FROM senhas WHERE senha = '$senha'");
$verifica_senha 	= mysql_result($q_verifica_senha, 0);

if ($verifica_senha == 1) 
{
	mysql_query("UPDATE pde_fato_vendas SET status = 'C' WHERE num_nota_fiscal = '$nota'");
	echo '<meta http-equiv="refresh" content="0.1; url=financeiro.php">';
}
elseif ($verifica_senha == 0)
{
	echo "<script>alert('SENHA INCORRETA!');</script>";
	echo '<meta http-equiv="refresh" content="0.1; url=financeiro.php">';
}

?>