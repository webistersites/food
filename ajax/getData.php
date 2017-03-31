<?php

$id   = $_GET['id'];
$sql  = "";

if(empty($id)){
	$type = "all"; 
	$sql = "SELECT * FROM contatos";
}
else{
	$type = "id";
	$sql = "SELECT * FROM contatos WHERE id = " . mysql_real_escape_string($id);
}

$user = "root";
$pass = "";
$host = "localhost";
$base = "pde";
mysql_connect($host, $user, $pass);
mysql_select_db($base);

$result = mysql_query($sql);

if($type == "all"){
	$return = "";
	while($data = mysql_fetch_array($result)){
		$return .= "Nome: " .     $data['nome'] .     "<br>";
		$return .= "E-mail: " .   $data['email'] .    "<br>";
		$return .= "Telefone: " . $data['telefone'] . "<br>";
		$return .= "<hr>";
	}
}
else{
	if($data = mysql_fetch_array($result)){
		$return .= "Nome: " .     $data['nome'] .     "<br>";
		$return .= "E-mail: " .   $data['email'] .    "<br>";
		$return .= "Telefone: " . $data['telefone'] . "<br>";
	}
	else{
		$return .= "Não foi possível listar o registro com id: " . $id;
	}
}

echo $return;



?>