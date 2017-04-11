<?php
include 'cabecalho.php';

$valor_inicial = mysql_query("SELECT valor_inicial FROM caixa01 WHERE id = (SELECT max(id) from caixa01)");
$ver_valor_inicial = mysql_result($valor_inicial,0);

$query_fechamento = mysql_query("SELECT
	DATE_FORMAT(c.data_venda, '%d/%m') as data_venda
	,a.num_nota_fiscal
    ,a.quantidade
    ,b.name
    ,b.cost*a.quantidade as Total
    ,d.forma_pagamento
    ,e.valor_inicial
    
FROM
	pde_fato_vendas_produtos a
INNER JOIN
	tec_products b
ON
	a.id_produto = b.id
INNER JOIN
	pde_fato_vendas c
ON
	a.num_nota_fiscal = c.num_nota_fiscal
INNER JOIN
	forma_pagamento d
ON
	c.id_forma_pagamento = d.id
INNER JOIN
    caixa01 e
ON
    c.id_abertura = e.id
WHERE
	c.id_abertura = (select max(id) from caixa01)
AND
        c.status = 'A'
ORDER BY 
	c.data_venda, a.num_nota_fiscal
;");

$total_dinheiro = mysql_query("SELECT
	sum(b.cost*a.quantidade) as din
    
FROM
	pde_fato_vendas_produtos a
INNER JOIN
	tec_products b
ON
	a.id_produto = b.id
INNER JOIN
	pde_fato_vendas c
ON
	a.num_nota_fiscal = c.num_nota_fiscal
INNER JOIN
	forma_pagamento d
ON
	c.id_forma_pagamento = d.id
WHERE
	c.id_abertura = (select max(id) from caixa01)
        AND
        c.status = 'A'
AND 
	c.id_forma_pagamento = 1
ORDER BY 
	c.data_venda, a.num_nota_fiscal
;");

if (!isset($total_dinheiro)) 
    {
        $ver_total_dinheiro = 0;
    }
    else 
    {
        $ver_total_dinheiro = mysql_result($total_dinheiro,0);
    }
    
$total_debito = mysql_query("SELECT
	sum(b.cost*a.quantidade) as CD
    
FROM
	pde_fato_vendas_produtos a
INNER JOIN
	tec_products b
ON
	a.id_produto = b.id
INNER JOIN
	pde_fato_vendas c
ON
	a.num_nota_fiscal = c.num_nota_fiscal
INNER JOIN
	forma_pagamento d
ON
	c.id_forma_pagamento = d.id
WHERE
	c.id_abertura = (select max(id) from caixa01)
        AND
        c.status = 'A'
AND 
	c.id_forma_pagamento = 2
ORDER BY 
	c.data_venda, a.num_nota_fiscal
;");

if (!isset($total_debito)) 
    {
        $ver_total_debito = 0;
    }
    else 
    {
        $ver_total_debito = mysql_result($total_debito,0);
    }
    
$total_credito = mysql_query("SELECT
	sum(b.cost*a.quantidade) as CC
    
FROM
	pde_fato_vendas_produtos a
INNER JOIN
	tec_products b
ON
	a.id_produto = b.id
INNER JOIN
	pde_fato_vendas c
ON
	a.num_nota_fiscal = c.num_nota_fiscal
INNER JOIN
	forma_pagamento d
ON
	c.id_forma_pagamento = d.id
WHERE
	c.id_abertura = (select max(id) from caixa01)
        AND
        c.status = 'A'
AND 
	c.id_forma_pagamento = 3
;");

if (!isset($total_credito)) 
    {
        $ver_total_credito = 0;
    }
    else 
    {
        $ver_total_credito = mysql_result($total_credito,0);
    }
    
$total_geral = mysql_query("SELECT
	sum(b.cost*a.quantidade) as subtotal
    
FROM
	pde_fato_vendas_produtos a
INNER JOIN
	tec_products b
ON
	a.id_produto = b.id
INNER JOIN
	pde_fato_vendas c
ON
	a.num_nota_fiscal = c.num_nota_fiscal
INNER JOIN
	forma_pagamento d
ON
	c.id_forma_pagamento = d.id
WHERE
	c.id_abertura = (select max(id) from caixa01)
        AND
        c.status = 'A'
ORDER BY 
	c.data_venda, a.num_nota_fiscal
;");

if (!isset($total_geral)) 
    {
        $ver_total_geral = 0;
    }
    else 
    {
        $ver_total_geral = mysql_result($total_geral,0);
    }
    
$result = '<br><div class="ui center aligned grid">
            <div class="ui large warning message">
            <i class="close icon"></i>
            <div class="header">
              Fechamento
            </div>
            Fechamento do Caixa, abaixo a tabela com as movimentações diárias. <br><br>
            <table class="ui table">
                <thead>
                  <tr>
                    <th>Data</th>
                    <th>N° Cupom</th>
                    <th>Qtd</th>
                    <th>Item</th>
                    <th>R$ Total</th>

                  </tr>
                </thead>
                <tbody>
                ';
                
                while ($ver_fechamento=mysql_fetch_array($query_fechamento)) {
                    $result .= '<tr>
                        <td>'.$ver_fechamento['data_venda'].'</td>
                        <td>'.$ver_fechamento['num_nota_fiscal'].'</td>
                        <td>'.$ver_fechamento['quantidade'].'</td>
                        <td>'.$ver_fechamento['name'].'</td>
                        <td>'.$ver_fechamento['Total'].'</td>
                    </tr>';
                }
                $result .= '
                </tbody>
                <tfoot>
                  <tr>
                    <th>Din: R$ '.$ver_total_dinheiro.'</th>
                    <th>CD: R$ '.$ver_total_debito.'</th>
                    <th>CC: R$ '.$ver_total_credito.'</th>                    
                    <th>Geral: R$ '.$ver_total_geral.'</th>
                        <th>Entrada R$ '.$ver_valor_inicial.'</th>
                </tr></tfoot>
              </table>
              <br>
              
              <a href="imprimir_fechamento.php" class="ui right floated blue button">Imprimir</a>
          </div>
          </div>'
    ;
    $result .= '<br>';
echo $result;