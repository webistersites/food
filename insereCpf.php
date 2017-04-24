<?php 
include 'conecta.php';

$cpf 		= $_GET['cpf'];
$origem 	= $_GET['origem'];

if ($origem == 'balcao') 
{
	$q_busca_cpf 	= mysql_query("SELECT count(cpf) FROM cpf_nota WHERE origem = 'balcao'");
	$busca_cpf 		= mysql_result($q_busca_cpf, 0);

	if ($busca_cpf == 1) 
	{
		mysql_query("UPDATE cpf_nota SET cpf = $cpf WHERE origem = 'balcao'");
			$refresh = '<h3 class="ui center aligned header">
				  <div class="content">
				    CPF
				    <div class="sub header">Incluir o cpf do cliente na nota</div>
				  </div>
				</h3>
				 <br>';

	 	$refresh .= '<div class="ui success message">
					  <div class="header">
					    CPF alterado com sucesso!
				    	</div>
					    <p>número do cpf: '.$cpf.'</p>
					</div>';
	}
	else
	{
		mysql_query("INSERT cpf_nota SELECT '', '$cpf','balcao'");
		$refresh = '<h3 class="ui center aligned header">
				  <div class="content">
				    CPF
				    <div class="sub header">Incluir o cpf do cliente na nota</div>
				  </div>
				</h3>
				 <br>';

	 	$refresh .= '<div class="ui success message">
					  <div class="header">
					    CPF cadastrado com sucesso!
					    </div>
					    <p>número do cpf: '.$cpf.'</p>
					</div>';

		//$refresh .= '<b>cpf: </b>' . $cpf;
	}
} 
elseif ($origem == 'delivery') 
{
	$q_busca_cpf 	= mysql_query("SELECT count(cpf) FROM cpf_nota WHERE origem = 'delivery'");
	$busca_cpf 		= mysql_result($q_busca_cpf, 0);

	if ($busca_cpf == 1) 
	{
		mysql_query("UPDATE cpf_nota SET cpf = $cpf WHERE origem = 'delivery'");
			$refresh = '<h3 class="ui center aligned header">
				  <div class="content">
				    CPF
				    <div class="sub header">Incluir o cpf do cliente na nota</div>
				  </div>
				</h3>
				 <br>';

	 	$refresh .= '<div class="ui success message">
					  <div class="header">
					    CPF alterado com sucesso!
				    	</div>
					    <p>número do cpf: '.$cpf.'</p>
					</div>';
	}
	else
	{
		mysql_query("INSERT cpf_nota SELECT '', '$cpf','delivery'");
		$refresh = '<h3 class="ui center aligned header">
				  <div class="content">
				    CPF
				    <div class="sub header">Incluir o cpf do cliente na nota</div>
				  </div>
				</h3>
				 <br>';

	 	$refresh .= '<div class="ui success message">
					  <div class="header">
					    CPF cadastrado com sucesso!
					    </div>
					    <p>número do cpf: '.$cpf.'</p>
					</div>';

		//$refresh .= '<b>cpf: </b>' . $cpf;
	}
}
else 
{
	$q_busca_cpf 	= mysql_query("SELECT count(cpf) FROM cpf_nota WHERE origem = '".$origem."'");
	$busca_cpf 		= mysql_result($q_busca_cpf, 0);

	if ($busca_cpf == 1) 
	{
		mysql_query("UPDATE cpf_nota SET cpf = $cpf WHERE origem = '".$origem."'");
			$refresh = '<h3 class="ui center aligned header">
				  <div class="content">
				    CPF
				    <div class="sub header">Incluir o cpf do cliente na nota</div>
				  </div>
				</h3>
				 <br>';

	 	$refresh .= '<div class="ui success message">
					  <div class="header">
					    CPF alterado com sucesso!
				    	</div>
					    <p>número do cpf: '.$cpf.'</p>
					</div>';
	}
	else
	{
		mysql_query("INSERT cpf_nota SELECT '', '$cpf','".$origem."'");
		$refresh = '<h3 class="ui center aligned header">
				  <div class="content">
				    CPF
				    <div class="sub header">Incluir o cpf do cliente na nota</div>
				  </div>
				</h3>
				 <br>';

	 	$refresh .= '<div class="ui success message">
					  <div class="header">
					    CPF cadastrado com sucesso!
					    </div>
					    <p>número do cpf: '.$cpf.'</p>
					</div>';

		//$refresh .= '<b>cpf: </b>' . $cpf;
	}
}

echo $refresh;
 
 ?>