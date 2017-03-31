<?php
include 'cabecalho.php';

$id_prod = $_GET['id'];

$verifica_duplicidade = mysql_query("SELECT id_produto FROM pedido_balcao WHERE id_produto = $id_prod");

if (mysql_num_rows($verifica_duplicidade) <= 0 ) 
    {
        mysql_query("INSERT INTO pedido_balcao SELECT '',$id_prod,1,''");
    }
    else
    {   $adicionar = mysql_query("SELECT quantidade+1 FROM pedido_balcao WHERE id_produto = $id_prod");
        mysql_query("UPDATE pedido_balcao SET quantidade = ".mysql_result($adicionar,0)." where id_produto = $id_prod");
    }


?>

<meta http-equiv="refresh" content="0.1;url=pdv.php">