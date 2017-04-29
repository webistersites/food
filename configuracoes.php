<?php 
    include 'cabecalho.php';     
    
    $busca_motoboys = mysql_query("select 
	a.id_motoboy,
        b.nome,
    count(a.entregas) as Entregas,
    sum(a.total_taxas) as 'Total',
    a.horario
FROM
	vendas_motoboys a
INNER JOIN
	usuarios b
ON
	a.id_motoboy = b.id
WHERE
	a.pago = 0
GROUP BY
	b.nome
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
            Entregas dos Motoboys
        </h2>
        <br>
        <br>
        <div class="ui center aligned grid">
            <table class="ui very basic celled collapsing selectable compact center aligned table">
                <thead>
                    <th>Motoboy</th>
                    <th>Total de Entregas</th>
                    <th>Ação</th>
                </thead>
                <?php 
                    while ($ver_moto = mysql_fetch_array($busca_motoboys))
                    {
                        echo '<tr>'
                        . '<td>'
                            . $ver_moto['nome']
                        . '</td>'
                        . '<td>'
                            . 'R$ ' . $ver_moto['Total']
                        . '</td>'
                        . '<td>'
                            . '<a href="imprimir_motoboys.php?id='.$ver_moto['id_motoboy'].'" class="ui mini blue button">imprimir</a>'
                            . '<a href="pagar_motoboy.php?id='.$ver_moto['id_motoboy'].'" class="ui mini teal button">Pagar</a>'
                        . '</td>'
                        . '</tr>'
                        ;
                    }
                
                ?>
            </table>
        </div>
        <br><br>
    </div>    
</div>

<script>
    var menu = window.location.pathname;
    if (menu === '/sao_francisco/configuracoes.php') 
        {
            $('#motoboys').addClass('active');
        }    
</script>

<?php
    include 'rodape.php';
?>