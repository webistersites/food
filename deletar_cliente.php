<?php

include 'cabecalho.php';

$id_produto = $_GET['id'];

mysql_query("DELETE FROM clientes WHERE id = ".$id_produto);

echo '<meta http-equiv="refresh" content="0.1; url=delivery.php#cadastrar">';

?>

