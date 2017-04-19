<?php
    //include 'cabecalho.php';
    
$ver_produtos = mysql_query("SELECT a.id,a.code,a.quantity,a.name,a.cost,b.categoria,a.type,a.cozinha FROM tec_products a 
inner join categorias b
on a.category_id = b.id WHERE category_id < 98 AND a.code != 9999 order by 2,5 desc");
    
    echo "<table class='ui very small very compact selectable celled red table'>"
              ."<thead>"                
                ."<th class='center aligned'>Cod</th>"
                ."<th>Produto</th>"
                ."<th class='center aligned'>Quantidade</th>"
                . "<th class='center aligned'>Categoria</th>"
                ."<th class='center aligned'>Preço</th>"
                ."<th class='center aligned'>Estoque</th>"
                ."<th class='center aligned'>Cozinha</th>"
                . "<th class='center aligned'>Ação</th>"
              ."</thead>"
            ;
    
    while ($produto=mysql_fetch_array($ver_produtos)) {
            echo "<tr>"
            ."<td class='collapsing center aligned'>".$produto['code']."</td>"    
            ."<td class='collapsing'>".$produto['name']."</td>"
            ."<td class='collapsing center aligned'>".$produto['quantity']."</td>"
            ."<td class='collapsing center aligned'>".$produto['categoria']."</td>"
              ."<td class='collapsing center aligned'>R$ ".number_format($produto['cost'],2,",",".")."</td>"
              ."<td class='collapsing center aligned'>"; if($produto['type'] == 0){echo 'Não';} else {echo 'Sim';} echo "</td>"
              ."<td class='collapsing center aligned'>"; if($produto['cozinha'] == 0){echo 'Não';} else {echo 'Sim';} echo "</td>"
                . "<td class='collapsing center aligned'>
                        <a href='alterar_produtos.php?id=".$produto['id']."'><i class='pencil icon'></i></a>
                        <a href='deletar_produto.php?id=".$produto['id']."'><i class='trash icon'></i></a>
                    </td>"               
            ."</tr>"
        ;
    }
    echo '</table>';
?>
