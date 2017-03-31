<?php 
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

// if (!($nome) || !($email) || !($telefone)){
// 	print "Preencha todos os campos!"; exit();
// }
//Abrindo Conexao com o banco de dados
// $conexao = mysql_pconnect("localhost","root","") or die (mysql_error());
// $banco = mysql_select_db("test");

//Utilizando o  mysql_real_escape_string voce se protege o seu código contra SQL Injection.
$nome = mysql_real_escape_string($nome);
$email = mysql_real_escape_string($email);
$mesa = mysql_real_escape_string($telefone);

// $insert = mysql_query("insert into contatos (nome,email,telefone) values ('{$nome}','{$email}','{$telefone}')");
// mysql_close($conexao);


if ($nome > $email) 
{
	$aux = $nome - $email;
	$result = "<br>";
	$result .= '<div class="ui center aligned container">
				<div class="ui huge positive compact message">
				  <div class="header">
				    Troco: &nbsp;&nbsp;&nbsp;&nbsp; <big><big>R$ '.number_format($aux,2,",",".").'</big></big>
				  </div>
				  </div></div><br>';

	$result .= '<a class="ui green right floated button" href="vendaDAO_mesas.php?mesa='.$mesa.'&caixa=1&forma=1&din='.$nome.'&troco='.$aux.'">Encerrar Venda</a><br><br>';
}
elseif ($nome < $email) 
{
	$aux = $email - $nome;
	$result = "<br>";
	$result .= '<div class="ui center aligned container">
				<div class="ui huge negative compact message">
				  <div class="header">
				    Falta: &nbsp;&nbsp;&nbsp;&nbsp; <big><big>R$ '.number_format($aux,2,",",".").'</big></big>
				  </div>
				  </div></div><br><br>';

	$result .= '<a class="ui basic green button" href="vendaDAO_mesas.php?mesa='.$mesa.'&caixa=1&forma=5&din='.$nome.'&resto='.$aux.'">Finalizar Crédito</a>';
	$result .= '<a class="ui basic green right floated button" href="vendaDAO_mesas.php?mesa='.$mesa.'&caixa=1&forma=4&din='.$nome.'&resto='.$aux.'">Finalizar Débito</a><br><br>';
}
else
{
	$aux = 0;
	$result = "<br>";
	$result .= '<div class="ui center aligned container">
				<div class="ui huge positive compact message">
				  <div class="header">
				    Troco: &nbsp;&nbsp;&nbsp;&nbsp; <big><big>R$ '.number_format($aux,2,",",".").'</big></big>
				  </div>
				  </div></div><br>';

				  $result .= "<a href='vendaDAO_mesas.php?mesa=".$mesa."&caixa=1&forma=1&din=".$nome."&troco=0' class='ui green right floated button'>Encerrar Venda</a><br><br>";
}

echo $result;

?>