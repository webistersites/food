<?php

include 'cabecalho.php';

$nota = $_GET['nota'];

mysql_query("UPDATE pde_fato_vendas SET status = 'C' WHERE num_nota_fiscal = '$nota'");

echo '<meta http-equiv="refresh" content="0.1; url=financeiro.php">';

?>