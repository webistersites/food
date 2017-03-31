<?php 
    include 'cabecalho.php';  
    $nf = $_GET['nf'];
    
    
    $query_nf = "SELECT 
	b.code,
    b.name,
    b.cost,
    a.num_nota_fiscal,
    a.quantidade,
    a.quantidade*b.cost as Total
FROM
	pde_fato_vendas_produtos a
INNER JOIN
	tec_products b
ON
	a.id_produto = b.id
WHERE
	a.num_nota_fiscal = '".$nf."'
    ;";
   
   $exec_query = mysql_query($query_nf);
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
            <?php echo $nf; ?>
        </h2>
        <br><br>
        <div class="ui center aligned grid">
        <table class="ui very basic celled collapsing selectable compact center aligned table">
            <thead>
                <th>Produto</th>
                <th>Valor</th>
                <th>Qtd.</th>
                <th>Total</th>
            </thead>
            <?php 
                while($ver_nf = mysql_fetch_array($exec_query))
                {
                    echo '<tr>'
                        . '<td>'
                            . $ver_nf['name']
                        . '</td>'
                        . '<td>'
                            . $ver_nf['cost']
                        . '</td>'
                        . '<td>'
                            . $ver_nf['quantidade']
                        . '</td>'
                        . '<td>'
                            . $ver_nf['Total']
                        . '</td>'
                        . '</tr>'
                        ;
                }
            ?>
        </table>
            <br><br>
            
    </div>
        
        <div class="ui center aligned grid">
            <?php  
            echo '<a href="re_impressao.php?nf='.$nf.'" class="ui basic button">Imprimir</a>'; ?>
            <a href="financeiro.php" class="ui basic right floated button">Voltar</a>
        </div>
        <br>
        
        <br>
    </div>
</div>

<script>
    var menu = window.location.pathname;
    if (menu === '/sao_francisco/ver_nota.php') 
        {
            $('#financeiro').addClass('active');
        }    
</script>

<?php
    include 'rodape.php';
?>