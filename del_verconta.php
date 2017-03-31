<?php

include 'cabecalho.php';

$id_mesa     = $_GET['mesa'];
$id_prod     = $_GET['id_del'];

mysql_query("DELETE FROM pedido_aux_mesa$id_mesa WHERE id = $id_prod");

echo '<meta http-equiv="refresh" content="0.1; url=ver_conta.php?mesa='.$id_mesa.'">';

?>