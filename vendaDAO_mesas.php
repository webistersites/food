<?php
  include 'conecta.php';
  $num_nf = mysql_query("SELECT max(num_nota_fiscal)+1 FROM pde_fato_vendas");
  $nf = mysql_result($num_nf,0);  
  
  
  $forma        = $_GET['forma']; // Recebe o ID da forma de pagamento;
  $troco        = $_GET['troco']; // Recebe o valor de troco;

  mysql_query("INSERT valores_nota SELECT '','$troco','$forma'");

  include  'imprimir_mesas.php';

  //$caixa        = $_GET['caixa']; // Recebe o caixa vindo da URL (Pagamento com Cartão);
  //$caixa_din    = $_POST['caixa']; // Recebe o caixa vindo do Form (Pagamentos em Dinheiro);
  $mesa         = $_GET['mesa']; // Recebe o número da Mesa;
  $busca_max_id_caixa = mysql_query("SELECT max(id) FROM caixa01");
  $max_id_caixa = mysql_result($busca_max_id_caixa,0);
  
  if ($forma == 2 || $forma == 3) // Verifica se é crédito ou débito e registra entrada;
    { 
        $valorEntrada = $_GET['din'];
        $insereMov = mysql_query("INSERT pde_movimentacao SELECT '','E',$valorEntrada,'Mesa $mesa',$forma,$nf");
        
    } 
    elseif ($forma == 4) // Verifica se é Dinheiro + Débito (2);
    {
        $valorEntrada = $_GET['din'];
        $resto = $_GET['resto'];
        mysql_query("INSERT pde_movimentacao SELECT '','E',$valorEntrada,'Mesa $mesa',1,$nf");
        mysql_query("INSERT pde_movimentacao SELECT '','E',$resto,'Mesa $mesa',2,$nf");
    }
    elseif ($forma == 5) // Verifica se é Dinheiro + Crédito (3);
    {
        $valorEntrada = $_GET['din'];
        $resto = $_GET['resto'];
        mysql_query("INSERT pde_movimentacao SELECT '','E',$valorEntrada,'Mesa $mesa',1,$nf");
        mysql_query("INSERT pde_movimentacao SELECT '','E',$resto,'Mesa $mesa',3,$nf");
    }
    elseif ($forma == 1 && $troco != 0) // Verifica se é Dinheiro;
    {
        $valorEntrada = $_GET['din'];        
        $mov = mysql_query(
                "INSERT INTO pde_movimentacao "
                . "(tipo_movimentacao,valor,origem,id_forma_pagamento,num_nota_fiscal)"
                . " VALUES"
                . " ('E',$valorEntrada,'Mesa $mesa',1,$nf),"
                . " ('S',$troco,'Mesa $mesa',1,$nf)"
                );
    }
    else 
    {
        $valorEntrada = $_GET['din'];
        mysql_query("INSERT pde_movimentacao SELECT '','E',$valorEntrada,'Mesa $mesa',1,$nf");
    }
  
  // Pegar o horário atual
  date_default_timezone_set('America/Sao_Paulo');
  $date = date('Y-m-d H:i');
  
  $buscarVenda = mysql_query("SELECT * FROM pedido_mesa".$mesa);

  while ($dados=mysql_fetch_array($buscarVenda)) {
    mysql_query("INSERT pde_fato_vendas_produtos SELECT '',$nf,".$dados['id_produto'].",".$dados['quantidade'].",'".$dados['obs']."'");
  }
  
  mysql_query("INSERT pde_fato_vendas SELECT '','".$date."','Mesa $mesa',$nf,0,'".$forma."',".$max_id_caixa.",'A',0");

    mysql_query("update pde_fato_vendas set valor_nota_fiscal = (
    select 
      sum(b.cost) as valor_nota_fiscal
    from 
      pde_fato_vendas_produtos a
    INNER JOIN
      tec_products b
    ON
      a.id_produto = b.id
    WHERE
      a.num_nota_fiscal = $nf
    GROUP BY
      num_nota_fiscal
  )
    WHERE
      num_nota_fiscal = $nf");

      $estocavel = mysql_query("select 
                            a.id_produto,
                              a.quantidade 
                          from 
                            pedido_mesa".$mesa." a
                          inner join
                            tec_products b
                          on
                            a.id_produto = b.id
                          WHERE
                            b.type = 1
                          ;");

  while ($item = mysql_fetch_array($estocavel)) 
  {
    mysql_query("UPDATE tec_products SET quantity = quantity-".$item['quantidade']." where id = ".$item['id_produto']);
  }

  $trucar = mysql_query("TRUNCATE TABLE pedido_mesa".$mesa);
  
  mysql_query("UPDATE tec_mesas SET estado = 'free' WHERE id = $mesa");

    mysql_query("TRUNCATE TABLE valores_nota");

    mysql_query("DELETE FROM cpf_nota WHERE origem = 'mesa".$mesa."'");
  
  echo '<meta http-equiv="refresh" content="0.1; url=mesa'.$mesa.'.php">';
?>


