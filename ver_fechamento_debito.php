<?php
include 'conecta.php';

$valor_inicial = mysql_query("SELECT valor_inicial FROM caixa01 WHERE id = (SELECT max(id) from caixa01)");
$ver_valor_inicial = mysql_result($valor_inicial,0);

$query_fechamento = mysql_query("SELECT
    DATE_FORMAT(c.data_venda, '%d/%m/%Y') as data_venda
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
AND 
    c.id_forma_pagamento = 2
ORDER BY 
    c.data_venda, a.num_nota_fiscal
;");

$result = '<br>
            <table class="ui center aligned table">
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
              </table>
              <br>'
    ;
    $result .= '<br>';
echo $result;