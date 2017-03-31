<?php
  include 'conecta.php';
  $num_nf = mysql_query("SELECT max(num_nota_fiscal)+1 FROM pde_fato_vendas");
  $nf = mysql_result($num_nf,0);  
 
  
  $forma = $_GET['forma']; // Recebe o ID da forma de pagamento;
  $troco = $_GET['troco']; // Recebe o valor de troco;

  mysql_query("INSERT valores_nota SELECT '','$troco','$forma'");

  include  'imprimir2.php'; 
   
  $caixa = $_GET['caixa']; // Recebe o caixa vindo da URL (Pagamento com Cartão);
  $caixa_din = $_POST['caixa']; // Recebe o caixa vindo do Form (Pagamentos em Dinheiro);
  $busca_max_id_caixa = mysql_query("SELECT max(id) FROM caixa01");
  $max_id_caixa = mysql_result($busca_max_id_caixa,0);
  
  if ($forma == 2 || $forma == 3) // Verifica se é crédito ou débito e registra entrada;
    { 
        $valorEntrada = $_GET['din'];
        $insereMov = mysql_query("INSERT pde_movimentacao SELECT '','E',$valorEntrada,'Caixa 01',$forma,$nf");
        
    } 
    elseif ($forma == 4) // Verifica se é Dinheiro + Débito (2);
    {
        $valorEntrada = $_GET['din'];
        $resto = $_GET['resto'];
        mysql_query("INSERT pde_movimentacao SELECT '','E',$valorEntrada,'Caixa 01',1,$nf");
        mysql_query("INSERT pde_movimentacao SELECT '','E',$resto,'Caixa 01',2,$nf");
    }
    elseif ($forma == 5) // Verifica se é Dinheiro + Crédito (3);
    {
        $valorEntrada = $_GET['din'];
        $resto = $_GET['resto'];
        mysql_query("INSERT pde_movimentacao SELECT '','E',$valorEntrada,'Caixa 01',1,$nf");
        mysql_query("INSERT pde_movimentacao SELECT '','E',$resto,'Caixa 01',3,$nf");
    }
    elseif ($forma == 1 && $troco != 0) // Verifica se é Dinheiro;
    {
        $valorEntrada = $_GET['din'];        
        $mov = mysql_query(
                "INSERT INTO pde_movimentacao "
                . "(tipo_movimentacao,valor,origem,id_forma_pagamento,num_nota_fiscal)"
                . " VALUES"
                . " ('E',$valorEntrada,'Caixa 01',1,$nf),"
                . " ('S',$troco,'Caixa 01',1,$nf)"
                );
    }
    else 
    {
        $valorEntrada = $_GET['din'];
        mysql_query("INSERT pde_movimentacao SELECT '','E',$valorEntrada,'Caixa 01',1,$nf");
    }
  
  // Pegar o horário atual
  date_default_timezone_set('America/Sao_Paulo');
  $date = date('Y-m-d H:i');
  
  if ($caixa == 1 || $caixa_din == 1) 
      {
        $buscarVenda = mysql_query("SELECT * FROM pedido_balcao");
      }
      elseif ($caixa == 2 || $caixa_din == 2) 
      {
          $buscarVenda = mysql_query("SELECT * FROM pedido_balcao2");
      }

  while ($dados=mysql_fetch_array($buscarVenda)) {
    mysql_query("INSERT pde_fato_vendas_produtos SELECT '',$nf,".$dados['id_produto'].",".$dados['quantidade'].",'".$dados['obs']."'");
  }
  
  mysql_query("INSERT pde_fato_vendas SELECT '','".$date."','Caixa 01',$nf,'".$forma."',".$max_id_caixa.",'A',0");
  
//  mysql_query("insert into vendas_history SELECT
//	     a.id,
//		 b.code,
//         b.name as Produto,
//         a.quantidade,
//         b.cost as Preço,
//         a.quantidade*b.cost as Total,
//         a.obs,
//         b.category_id,
//         b.id as id_produto,
//         '$nf'
//       FROM
//	        pedido_balcao a
//        INNER JOIN
//	         tec_products b
//         ON
//            a.id_produto = b.id
//            ;");

  if ($caixa == 1 || $caixa_din == 1) 
      {
        $trucar = mysql_query("TRUNCATE TABLE pedido_balcao");
      }
      elseif ($caixa == 2 || $caixa_din == 2) 
      {
        $trucar = mysql_query("TRUNCATE TABLE pedido_balcao2");
      }
  mysql_query("TRUNCATE TABLE valores_nota");

?>

 <meta http-equiv="refresh" content="0.1; url=pdv.php">
