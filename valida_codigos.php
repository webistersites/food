<?php

include 'conecta.php';

$codigo   = $_POST['codigo'];

mysql_query("UPDATE codigo_offline_vigente SET codigo = '$codigo' WHERE id = 1");

header("Location: login.php");

?>