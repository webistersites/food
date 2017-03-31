<?php
//include 'conecta.php';
//$quant = $_POST['quant'];
//$id = $_POST['id_user'];
 
// Faz o processamento no banco de dados.
// Insere, apaga ou modifica.
// Aqui pode ser feito qualquer processamento,
// não apenas em banco.
 
//echo 'Este conteúdo foi alterado por '.$nome_usuario;

//mysql_query("UPDATE pedido_balcao SET quantidade = $quant WHERE id = $id");


include 'cabecalho.php';

$preco = $_POST['preco'];
$preco_id = $_POST['preco_id'];


mysql_query("UPDATE pedido_balcao SET cost = $preco WHERE id = $preco_id");
 


?>

<meta http-equiv="refresh" content="0.1; url=pdv.php">