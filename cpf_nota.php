<?php 
	include 'conecta.php';

	$q_busca_cpf 	= mysql_query("SELECT count(cpf), cpf FROM cpf_nota");
	$busca_cpf 		= mysql_result($q_busca_cpf, 0);

	if ($busca_cpf == 1) 
		{
			$n_cpf = mysql_result($q_busca_cpf, 0, 1);
			echo '<div class="ui warning message">
					  <div class="header">
					    Atenção
					  </div>
					  <p>O cpf do cliente já está na nota (CPF: '.$n_cpf.');</p>
					</div>
					<h3 class="ui center aligned header">
					  <div class="content">
					    CPF
					    <div class="sub header">Incluir o cpf do cliente na nota</div>
					  </div>
					</h3>
					 <br>
					 <div class="ui center aligned grid">
						 <div class="ui action input">
						  <input type="text" id="cpf" name="cpf" placeholder="cpf na nota..." maxlength="11">
						  <button class="ui green button" onclick="insereCpf()">Alterar</button>
						</div>
					</div>
					<br><br>';
		}
	else
	{
		echo '<h3 class="ui center aligned header">
					  <div class="content">
					    CPF
					    <div class="sub header">Incluir o cpf do cliente na nota</div>
					  </div>
					</h3>
					 <br>
					 <div class="ui center aligned grid">
						 <div class="ui action input">
						  <input type="text" id="cpf" name="cpf" placeholder="cpf na nota..." maxlength="11">
						  <button class="ui blue button" onclick="insereCpf()">Incluir</button>
						</div>
					</div>
					<br><br>';
	}
 ?>

