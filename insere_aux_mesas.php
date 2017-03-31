<?php
  include 'cabecalho.php';

 $mesa = $_GET['mesa'];
 
 $insere_aux = mysql_query("INSERT INTO pedido_aux_mesa$mesa SELECT '',id_produto,quantidade,obs,id_garcom FROM pedido_mesa$mesa");
 
 mysql_query("TRUNCATE TABLE pedido_mesa$mesa");
 
 echo '<meta http-equiv="refresh" content="0.1;url=mesa'.$mesa.'.php">';

?>