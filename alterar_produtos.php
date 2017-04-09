<?php 

include 'cabecalho.php';
$id   = $_GET['id'];
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
            Alterar Produto
        </h2>
         <br><br>
    <?php 
        $buscar_categoria = mysql_query("SELECT * FROM categorias");
        echo '<div class="ui center aligned grid">'
        . '<form action="alterar_item.php" method="post">';
        echo '<div class="ui form">
                <div class="two fields">
                  <div class="field">
                    <label>Produto</label>
                    <input placeholder="Produto" name="produto" type="text" autofocus="">
                  </div>
                  <div class="field">
                    <label>Preço</label>
                    <input placeholder="Preço" name="valor" type="text">
                  </div>
                </div>
                    <div class="two fields">
                    <div class="field">
                        <input placeholder="Qtd Estoque" name="qtd" type="text">
                        <input type="hidden" name="id" value="'.$id.'">
                    </div>
                    <div class="field">
                        <select class="ui dropdown" name="categoria">
                            <option>Categoria</option>
                            ';
        while ($ver_categoria=mysql_fetch_array($buscar_categoria))
        {
            echo '<option value="'.$ver_categoria['id'].'">'.$ver_categoria['categoria'].'</option>';
        }
        echo '
                        </select>
                    </div>
                    </div>
                <br>
                <a href="produtos.php" class="ui button">Voltar</a>
                <input type="submit" class="ui submit right floated green button" value="Alterar">
                <br><br><br>
              </div>'
    ;
        echo '</form></div>';
        
    ?>
         <div class='ui divider'>
             
         </div>
         <?php
    //include 'cabecalho.php';
    
$ver_produtos = mysql_query("SELECT a.id,a.code,a.quantity,a.name,a.cost,b.categoria FROM tec_products a 
inner join categorias b
on a.category_id = b.id WHERE category_id < 98 AND a.code != 9999 and a.id = ".$id." order by 2,5 desc");
    
    echo "<table class='ui very small very compact selectable celled red table'>"
              ."<thead>"                
                ."<th class='center aligned'>Cod</th>"
                ."<th>Produto</th>"
                ."<th class='center aligned'>Quantidade</th>"
                . "<th class='center aligned'>Categoria</th>"
                ."<th class='center aligned'>Preço</th>"
              ."</thead>"
            ;
    
    while ($produto=mysql_fetch_array($ver_produtos)) {
            echo "<tr>"
            ."<td class='collapsing center aligned'>".$produto['code']."</td>"    
            ."<td class='collapsing'>".$produto['name']."</td>"
            ."<td class='collapsing center aligned'>".$produto['quantity']."</td>"
            ."<td class='collapsing center aligned'>".$produto['categoria']."</td>"      
              ."<td class='collapsing center aligned'>R$ ".number_format($produto['cost'],2,",",".")."</td>"              
            ."</tr>"
        ;
    }
    echo '</table>';
?>
    </div>

  </div>
<?php 
include "rodape.php";
 ?>
