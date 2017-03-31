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

$nome_usuario = $_POST['seu_nome'];
$nome_usuario2 = $_POST['seu_nome2'];
$mesa = $_POST['mesa'];


mysql_query("UPDATE pedido_mesa$mesa SET quantidade = $nome_usuario WHERE id = $nome_usuario2");
 
echo '<meta http-equiv="refresh" content="0.1; url=mesa'.$mesa.'.php">';

?>
