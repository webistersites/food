<?php

include 'cabecalho.php';

$id_boy         = $_GET['id'];

mysql_query("UPDATE vendas_motoboys SET pago = 1 WHERE id_motoboy = $id_boy");

echo '<meta http-equiv="refresh" content="0.1; url=configuracoes.php">';

?>