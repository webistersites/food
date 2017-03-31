<?php
    include 'cabecalho.php';
    
    $valor = $_POST['valorEntrada'];
    date_default_timezone_set('America/Sao_Paulo');
    $date = date('Y-m-d H:i');
    $id_user = $_SESSION['usuarioID'];
    
    $abreCaixa = mysql_query("INSERT INTO caixa01 SELECT '','$date','-',$valor,0,'Aberto',$id_user");
    
?>

<meta http-equiv="refresh" content="0.1; url=pdv.php">