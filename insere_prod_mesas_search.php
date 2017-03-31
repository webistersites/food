<?php
    include 'cabecalho.php';
    $pesquisa = $_GET['course'];
    $mesa = $_GET['mesa'];
    $id_garcom = $_SESSION['usuarioID'];
    $consulta = mysql_query("SELECT id FROM tec_products WHERE CONCAT(CODE, ' - ',NAME) = '$pesquisa'");
    
    $id = mysql_result($consulta,0);
    
    $verifica_duplicidade = mysql_query("SELECT id_produto FROM pedido_mesa$mesa WHERE id_produto = $id");
    
    if (mysql_num_rows($verifica_duplicidade) <= 0 ) 
    {
        //$ver_id_cliente = mysql_query("SELECT id_cliente FROM pedido_delivery WHERE id = 1");
        mysql_query("INSERT INTO pedido_mesa$mesa SELECT '',$id,1,'',$id_garcom");
    }
    else
    {   $adicionar = mysql_query("SELECT quantidade+1 FROM pedido_mesa$mesa WHERE id_produto = $id");
        mysql_query("UPDATE pedido_mesa$mesa SET quantidade = ".mysql_result($adicionar,0)." where id_produto = $id");
    }
    
    
    echo '<meta http-equiv="refresh" content="0.1;url=mesa'.$mesa.'.php">';
?>