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
$nome_usuario = $_POST['seu_nome'];
$nome_usuario2 = $_POST['seu_nome2'];

if (!isset($preco_id)) {
	mysql_query("UPDATE pedido_delivery SET quantidade = $nome_usuario WHERE id = $nome_usuario2");
}
elseif (isset($preco_id) && isset($nome_usuario2)) {
	mysql_query("UPDATE pedido_delivery SET quantidade = $nome_usuario WHERE id = $nome_usuario2");

	mysql_query("UPDATE tec_products SET cost = $preco WHERE code = 2000");
}
else {
	mysql_query("UPDATE tec_products SET cost = $preco WHERE code = 2000");
}

?>

<meta http-equiv="refresh" content="0.1; url=pdv_delivery.php">