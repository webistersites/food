<?php
    //include 'cabecalho.php';
    
    $ver_produtos = mysql_query("SELECT a.id,a.code,a.name,a.cost,b.categoria FROM tec_products a 
inner join categorias b
on a.category_id = b.id WHERE category_id < 98 AND a.code != 9999 order by 2,5 desc");
    
    echo "<table class='ui small compact table'>"
              ."<thead>"                
                ."<th class='center aligned'>Cod</th>"
                ."<th>Produto</th>"
                . "<th>Categoria</th>"
                ."<th>Preço</th>"
                . "<th>Ação</th>"
              ."</thead>"
            ;
    
    while ($produto=mysql_fetch_array($ver_produtos)) {
            echo "<tr>"
            ."<td class='collapsing center aligned'>".$produto['code']."</td>"    
            ."<td class='collapsing'>".$produto['name']."</td>"
            ."<td class='collapsing'>".$produto['categoria']."</td>"      
              ."<td class='collapsing'>R$ ".$produto['cost']."</td>"
                . "<td class='collapsing'><a href='deletar_produto.php?id=".$produto['id']."'><i class='trash icon'></i></a></td>"               
            ."</tr>"
        ;
    }
    echo '</table>';
?>
