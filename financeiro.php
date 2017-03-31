<?php 
    include 'cabecalho.php';     
    $pedidos_hist = mysql_query("SELECT 
	b.id,
    a.num_nota_fiscal,
    a.data_venda, 
    a.origem_venda,
    sum(b.quantidade*c.cost) as 'Total da nota',
    a.status
    ,d.forma_pagamento
FROM
	pde_fato_vendas a
INNER JOIN
	pde_fato_vendas_produtos b
ON
	a.num_nota_fiscal = b.num_nota_fiscal
INNER JOIN
	tec_products c
ON
	b.id_produto = c.id
INNER JOIN
        forma_pagamento d
ON
        a.id_forma_pagamento = d.id
WHERE
        a.id != 1
AND
    a.data_venda >= (SELECT SUBDATE(NOW(),INTERVAL 7 DAY))
GROUP BY
	b.num_nota_fiscal
ORDER BY
	a.data_venda desc
    ;");
?>
<style type="text/css">
    body {
      background-color: #e3e3e3;
    }
    .sumir {
        display: none;
    }
</style>

<div class="ui container">
    <div class="ui segment">
        <h2 class="ui center aligned dividing header">
            Pedidos
        </h2>
        <br><br>
        <div class="ui center aligned grid">
        <table class="ui very basic celled collapsing selectable compact center aligned table">
            <thead>
                <th>Nota Fiscal</th>
                <th>Data da Venda</th>
                <th>Origem da Venda</th>
                <th>Total da Nota</th>
                <th>Forma de Pagamento</th>
                <th>Ações</th>
            </thead>
            <?php 
                while($ver_hist = mysql_fetch_array($pedidos_hist))
                {
                    if ($ver_hist['status'] == 'C')
                    {
                        echo '<tr>'
                        .'<td class="disabled">'
                            . $ver_hist['num_nota_fiscal']
                        . '</td>'
                        . '<td class="disabled">'
                            . $ver_hist['data_venda']
                        . '</td>'
                        . '<td class="disabled">'
                            . $ver_hist['origem_venda']
                        . '</td>'
                        . '<td class="disabled">'
                            . $ver_hist['Total da nota']
                        . '</td>'
                        . '<td class="disabled">'
                            . $ver_hist['forma_pagamento']
                        . '</td>'
                        .'<td>'
                        //. '<a href="cancelar_nota.php?nota='.$ver_hist['num_nota_fiscal'].'"><i class="remove circle icon"></i></a>'
                            . '<a href="ver_nota.php?nf='.$ver_hist['num_nota_fiscal'].'"><i class="unhide icon"></i></a>'
                            . '<i class="disabled print icon"></i>'
                            . '<i class="disabled remove circle icon"></i>'
                        . '</td>';
                    }
                    else
                    {
                        echo '<tr>'
                        .'<td>'
                            . $ver_hist['num_nota_fiscal']
                        . '</td>'
                        . '<td>'
                            . $ver_hist['data_venda']
                        . '</td>'
                        . '<td>'
                            . $ver_hist['origem_venda']
                        . '</td>'
                        . '<td>'
                            . $ver_hist['Total da nota']
                        . '</td>'
                        . '<td>'
                            . $ver_hist['forma_pagamento']
                        . '</td>'
                        .'<td>'
                            . '<a href="ver_nota.php?nf='.$ver_hist['num_nota_fiscal'].'"><i class="unhide icon"></i></a>'
                            . '<a href="re_impressao.php?nf='.$ver_hist['num_nota_fiscal'].'"><i class="print icon"></i></a>'
                            . '<a href="#confirmar?nf='.$ver_hist['num_nota_fiscal'].'"><i class="remove circle icon"></i></a>'
                        . '</td>';
                    }

                    include 'popup_cancelamento.php';
                    //include 'popup_ver_nota.php';
                }
            ?>
        </table>
    </div>
        <br><br>
    </div>
</div>

<script>
    var menu = window.location.pathname;
    if (menu === '/sao_francisco/financeiro.php') 
        {
            $('#financeiro').addClass('active');
        }    
</script>

<?php
    include 'rodape.php';
?>