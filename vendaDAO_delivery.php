<?php
  include 'conecta.php';
  $num_nf = mysql_query("SELECT max(num_nota_fiscal)+1 FROM pde_fato_vendas");
  $nf = mysql_result($num_nf,0);  
  
  
  $forma        = $_GET['forma']; // Recebe o ID da forma de pagamento;
  $troco        = $_GET['troco']; // Recebe o valor de troco;

  mysql_query("INSERT valores_nota SELECT '','$troco','$forma'");

  include  'imprimir_delivery.php';  

  $caixa        = $_GET['caixa']; // Recebe o caixa vindo da URL (Pagamento com Cartão);
  $caixa_din    = $_POST['caixa']; // Recebe o caixa vindo do Form (Pagamentos em Dinheiro);
  $busca_max_id_caixa = mysql_query("SELECT max(id) FROM caixa01");
  $max_id_caixa = mysql_result($busca_max_id_caixa,0);
  
  if ($forma == 2 || $forma == 3) // Verifica se é crédito ou débito e registra entrada;
    { 
        $valorEntrada = $_GET['din'];
        $insereMov = mysql_query("INSERT pde_movimentacao SELECT '','E',$valorEntrada,'Delivery',$forma,$nf");
        
    } 
    elseif ($forma == 4) // Verifica se é Dinheiro + Débito (2);
    {
        $valorEntrada = $_GET['din'];
        $resto = $_GET['resto'];
        mysql_query("INSERT pde_movimentacao SELECT '','E',$valorEntrada,'Delivery',1,$nf");
        mysql_query("INSERT pde_movimentacao SELECT '','E',$resto,'Delivery',2,$nf");
    }
    elseif ($forma == 5) // Verifica se é Dinheiro + Crédito (3);
    {
        $valorEntrada = $_GET['din'];
        $resto = $_GET['resto'];
        mysql_query("INSERT pde_movimentacao SELECT '','E',$valorEntrada,'Delivery',1,$nf");
        mysql_query("INSERT pde_movimentacao SELECT '','E',$resto,'Delivery',3,$nf");
    }
    elseif ($forma == 1 && $troco != 0) // Verifica se é Dinheiro;
    {
        $valorEntrada = $_GET['din'];        
        $mov = mysql_query(
                "INSERT INTO pde_movimentacao "
                . "(tipo_movimentacao,valor,origem,id_forma_pagamento,num_nota_fiscal)"
                . " VALUES"
                . " ('E',$valorEntrada,'Delivery',1,$nf),"
                . " ('S',$troco,'Delivery',1,$nf)"
                );
    }
    else 
    {
        $valorEntrada = $_GET['din'];
        mysql_query("INSERT pde_movimentacao SELECT '','E',$valorEntrada,'Delivery',1,$nf");
    }
  
  // Pegar o horário atual
  date_default_timezone_set('America/Sao_Paulo');
  $date = date('Y-m-d H:i');
  
  $buscarVenda = mysql_query("SELECT * FROM pedido_delivery");

  while ($dados=mysql_fetch_array($buscarVenda)) {
    mysql_query("INSERT pde_fato_vendas_produtos SELECT '',$nf,".$dados['id_produto'].",".$dados['quantidade'].",'".$dados['obs']."'");
  }

  $busca_cliente = mysql_query("SELECT distinct id_cliente FROM pedido_delivery");

  $cliente = mysql_result($busca_cliente, 0);

  $buscarTaxa = mysql_query("select 
	b.cost
from 
	pedido_delivery a
INNER JOIN
	tec_products b
ON
	a.id_produto = b.id
WHERE
	b.category_id = 102
    ;");
  
  $taxa = mysql_result($buscarTaxa,0);
  
  mysql_query("INSERT pde_fato_vendas SELECT '','".$date."','Delivery',$nf,'".$forma."',".$max_id_caixa.",'A',".$cliente);
  
  mysql_query("INSERT vendas_motoboys VALUES ('',(SELECT distinct id_motoboy FROM pedido_delivery),1,$taxa,$max_id_caixa,'$date',0)");
  
  $trucar = mysql_query("TRUNCATE TABLE pedido_delivery");
  
    mysql_query("TRUNCATE TABLE valores_nota");

?>

<meta http-equiv="refresh" content="0.1; url=delivery.php">
