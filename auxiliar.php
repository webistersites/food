<?php
    include 'conecta.php';
    
    $sub = $_POST['sub'];
    
    $criaTabela = mysql_query("CREATE TABLE IF NOT EXISTS tabela_auxiliar_venda (
	id int(50) NOT NULL AUTO_INCREMENT,
        total int(100) NOT NULL,
        pago int(100) NOT NULL,
        PRIMARY KEY (id)
        )");
    
    $insereAux = mysql_query("INSERT INTO tabela_auxiliar_venda SELECT '',$sub");
    
?>

