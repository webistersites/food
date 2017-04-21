<?php

    include 'cabecalho.php';
    
    $nf         = $_GET['nf'];
    $origem     = $_GET['origem'];
    $id_cliente = $_GET['id_cliente'];
    
    if ($origem == 'balcao') 
        {
            mysql_query("TRUNCATE TABLE pedido_balcao");
    
            mysql_query("INSERT INTO pedido_balcao SELECT '',id_produto,quantidade,'',impresso FROM produtos_suspensos WHERE id_suspensao = '$nf';");
    
            mysql_query("DELETE FROM produtos_suspensos WHERE id_suspensao = '$nf'");
    
            mysql_query("DELETE FROM vendas_suspensas WHERE id_suspensao = '$nf'");
            
            echo '<meta http-equiv="refresh" content="0.1; url=pdv.php">';
        }
    else
    {
        mysql_query("TRUNCATE TABLE pedido_delivery");
        
        mysql_query("INSERT INTO pedido_delivery SELECT '',id_produto,quantidade,'',$id_cliente,'' FROM produtos_suspensos WHERE id_suspensao = '$nf';");
        
        mysql_query("DELETE FROM produtos_suspensos WHERE id_suspensao = '$nf'");
    
        mysql_query("DELETE FROM vendas_suspensas WHERE id_suspensao = '$nf'");
        
        echo '<meta http-equiv="refresh" content="0.1; url=pdv_delivery.php">';
    }
    

?>

