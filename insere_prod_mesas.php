<?php
include 'cabecalho.php';

$id_prod = $_GET['id'];
$id_cli = $_GET['cliente'];
$id_garcom = $_SESSION['usuarioID'];
$mesa   = $_GET['mesa'];

$verifica_duplicidade = mysql_query("SELECT id_produto FROM pedido_mesa".$mesa." WHERE id_produto = $id_prod");

if (mysql_num_rows($verifica_duplicidade) <= 0 ) 
    {
        $cliente = mysql_query("SELECT id_cliente FROM pedido_mesa".$mesa." WHERE id = 1");
        mysql_query("INSERT INTO pedido_mesa".$mesa." SELECT '',$id_prod,1,'',$id_garcom");
    }
    else
    {   $adicionar = mysql_query("SELECT quantidade+1 FROM pedido_mesa".$mesa." WHERE id_produto = $id_prod");
        mysql_query("UPDATE pedido_mesa".$mesa." SET quantidade = " . mysql_result($adicionar,0) . " where id_produto = $id_prod");
    }
    
    mysql_query("UPDATE tec_mesas SET estado = 'busy' WHERE id = $mesa");

    echo '<meta http-equiv="refresh" content="0.1;url=mesa'.$mesa.'.php">';
?>

