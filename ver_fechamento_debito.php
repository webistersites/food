<?php
include 'conecta.php';

$valor_inicial = mysql_query("SELECT valor_inicial FROM caixa01 WHERE id = (SELECT max(id) from caixa01)");
$ver_valor_inicial = mysql_result($valor_inicial,0);

$inicial    = $_GET['inicial'];
$final      = $_GET['final'];

if ($inicial == "" && $final == "") 
{
    $query_fechamento = mysql_query("select 
    a.id
    ,DATE_FORMAT(a.data_venda, '%M %e, %Y') as data_venda
    ,DATE_FORMAT(a.data_venda, '%d/%m/%Y %H:%i') as data_venda_v
    ,a.origem_venda
    ,a.num_nota_fiscal
    ,a.valor_nota_fiscal
    ,b.forma_pagamento
    ,a.status
from 
    pde_fato_vendas a
INNER JOIN
    forma_pagamento b
ON
    a.id_forma_pagamento = b.id
WHERE
    b.id = 2
AND
    a.status = 'A'
ORDER BY
    a.num_nota_fiscal desc
;");

} 
else 
{
    $query_fechamento = mysql_query("select 
    a.id
    ,DATE_FORMAT(a.data_venda, '%M %e, %Y') as data_venda
    ,DATE_FORMAT(a.data_venda, '%d/%m/%Y %H:%i') as data_venda_v
    ,a.origem_venda
    ,a.num_nota_fiscal
    ,a.valor_nota_fiscal
    ,b.forma_pagamento
    ,a.status
from 
    pde_fato_vendas a
INNER JOIN
    forma_pagamento b
ON
    a.id_forma_pagamento = b.id
WHERE
    b.id = 2
AND
    a.status = 'A'
AND
    a.data_venda between STR_TO_DATE('".$inicial."', '%d/%m/%Y') and STR_TO_DATE('".$final."', '%d/%m/%Y')+1
ORDER BY
    a.num_nota_fiscal desc
;");

}


$result = '<br>
            <h4 class="ui center aligned header">Cartão de Débito</h4>
            <table class="ui center aligned blue celled selectable compact small table">
                <thead>
                  <tr>
                    <th>Data</th>
                    <th>N° Cupom</th>
                    <th>Canal de venda</th>
                    <th>Total do Cupom</th>
                  </tr>
                </thead>
                <tbody>
                ';
                
                while ($ver_fechamento=mysql_fetch_array($query_fechamento)) {
                    $result .= '<tr>
                        <td>'.$ver_fechamento['data_venda_v'].'</td>
                        <td>NF '.$ver_fechamento['num_nota_fiscal'].'</td>
                        <td>'.$ver_fechamento['origem_venda'].'</td>
                        <td>R$ '.number_format($ver_fechamento['valor_nota_fiscal'],2,",",".").'</td>
                    </tr>';
                }
                $result .= '
                </tbody>
              </table>
              <br>'
    ;
    $result .= '<br>';

echo $result;