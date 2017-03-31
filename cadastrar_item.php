<?php
include 'cabecalho.php';


$produto    = $_POST['produto'];
$valor      = $_POST['valor'];
$categoria  = $_POST['categoria'];
$code       = $_POST['code'];


    
$cadastra_func = mysql_query("INSERT tec_products SELECT '',$code,'$produto',$categoria,0,'no_image.png',0,$valor,0,10,'','','',5,1");

?>
<script>
    window.location.replace("http://localhost/sao_francisco/pdv.php#cadastrar_item");
</script>




