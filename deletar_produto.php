<?php

include 'cabecalho.php';

$id_produto = $_GET['id'];

mysql_query("DELETE FROM tec_products WHERE id = ".$id_produto);

echo '<meta http-equiv="refresh" content="0.1; url=config.php">';

?>

