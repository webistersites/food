<?php
header('Content-Type: text/plain');

$nome     = $_POST['nome'];
$email    = $_POST['email'];
$telefone = $_POST['telefone'];

$sql = "INSERT INTO contatos (id, nome, email, telefone) VALUES ('', '$nome', '$email', '$telefone')";

$user = "root";
$pass = "";
$host = "localhost";
$base = "pde";
mysql_connect($host, $user, $pass);
mysql_select_db($base);

if($result = mysql_query($sql)){
	$return = "O registro foi inserido com sucesso!";
}
else{
	$return = "Erro ao inserir o registro no banco de dados.";
}

echo $return;

?>