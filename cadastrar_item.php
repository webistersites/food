<?php
include 'cabecalho.php';


$produto    	= $_POST['produto'];
$valor      	= $_POST['valor'];
$categoria  	= $_POST['categoria'];
$qtd       		= $_POST['qtd'];
$estoque		= $_POST['estoque'];

if ($estoque == "") 
{
	$type = 0;
} else
{
	$type = 1;
}

$q_code = mysql_query("select 
							max(a.code)+1 as code
						from 
							tec_products a 
						INNER JOIN
							categorias b
						ON
							a.category_id = b.id
						where 
							a.category_id = ".$categoria);

$code	= mysql_result($q_code,0);   
  
$cadastra_func = mysql_query("INSERT tec_products SELECT '',$code,'$produto',$categoria,0,'no_image.png',0,$valor,0,$qtd,'',$type,'',5,1");

?>
<script>
    window.location.replace("produtos.php");
</script>




