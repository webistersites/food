<?php 
    include 'cabecalho.php'; 
    
    $consulta_suspensos = mysql_query("SELECT 
	date_format(a.data_suspensao,'%d-%m-%Y às %h:%i') as Data ,
    b.name as cliente,
    b.endereco,
    sum(c.quantidade*d.cost) as Total,
    b.id,
    a.id_suspensao
FROM 
	vendas_suspensas a
INNER JOIN
	clientes b
ON
	a.tipo = b.id
INNER JOIN
	produtos_suspensos c
ON
	a.id_suspensao = c.id_suspensao
INNER JOIN
	tec_products d
ON
	c.id_produto = d.id
WHERE 
	tipo != 'balcao'
GROUP BY
	a.id_suspensao
ORDER BY 
	Data;");
 
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
            Vendas em Aberto
        </h2>
        <br><br>
        <div class="ui center aligned grid">
            <table class="ui very basic celled collapsing center aligned table">
                <thead>
                    <th>Data</th>
                    <th>Cliente</th>
                    <th>Endereço</th>
                    <th>Total</th>
                    <th>Ações</th>
                </thead>
                <?php
                    while($ver_sus = mysql_fetch_array($consulta_suspensos))
                    {
                        echo '<tr>'
                            . '<td>'
                                . $ver_sus['Data']
                            . '</td>'
                            . '<td>'
                                . $ver_sus['cliente']
                            . '</td>'
                            . '<td>'
                                . $ver_sus['endereco']
                            . '</td>'
                            . '<td>'
                                . $ver_sus['Total']
                            . '</td>'
                            . '<td>'
                                . '<a href="resgata_suspensos.php?id_cliente='.$ver_sus['id'].'&origem=delivery&nf='.$ver_sus['id_suspensao'].'" class="ui basic tiny button">Resgatar</a>'
                            . '</td>'
                            . '</tr>'

                                ;
                    }


                ?>
            </table>
        </div>
        <br>
    </div>
</div>

<script>
    var menu = window.location.pathname;
    if (menu === '/sao_francisco/configuracoes.php') 
        {
            $('#config').addClass('active');
        }    
</script>

<?php
    include 'rodape.php';
?>