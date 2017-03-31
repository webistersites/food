<?php
include 'cabecalho.php';

$id_prod = $_GET['id'];
$id_cli = $_GET['cliente'];

$verifica_duplicidade = mysql_query("SELECT id_produto FROM pedido_delivery WHERE id_produto = $id_prod");

if (mysql_num_rows($verifica_duplicidade) <= 0 ) 
    {
        $cliente = mysql_query("SELECT id_cliente FROM pedido_delivery");
        mysql_query("INSERT INTO pedido_delivery SELECT '',$id_prod,1,'',".mysql_result($cliente,0).",0");
    }
    else
    {   $adicionar = mysql_query("SELECT quantidade+1 FROM pedido_delivery WHERE id_produto = $id_prod");
        mysql_query("UPDATE pedido_delivery SET quantidade = " . mysql_result($adicionar,0) . " where id_produto = $id_prod");
    }


?>

<meta http-equiv="refresh" content="0.1;url=pdv_delivery.php">