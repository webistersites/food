<?php

    include 'cabecalho.php';
    
    $id_motoboy = $_POST['nome_boy'];

    mysql_query("update pedido_delivery set id_motoboy = $id_motoboy");
    
    echo '<meta http-equiv="refresh" content="0.1; url=pdv_delivery.php">';

?>

