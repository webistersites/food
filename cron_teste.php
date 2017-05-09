<?php 
	
	$url = file_get_contents('http://webister.com.br/clientes_webister/pde_jadson.php');


	if ($url == 0) 
	{
		echo "Seu sistema esta ativo!";
	}
	else
	{
		echo "Voce esta inadimplente!";
	}


 ?>