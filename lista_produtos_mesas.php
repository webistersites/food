<?php

$indice = mysql_query("SELECT id FROM categorias");

while ($loop = mysql_fetch_array($indice))
{
    $id_cat = $loop['id'];
    echo "<p>"
        ."<div class='prod".$id_cat." sumir'>"
        ."<div class='ui four column doubling stackable grid container'>"
        ;

    $query = mysql_query('select * from tec_products where category_id = '.$id_cat);
    while ($produtos=mysql_fetch_array($query)) {
      echo "<div class='column'>"
            ."<p>"
              //."<a href='#popup".$produtos['id']."'><img class='ui tiny bordered rounded image' src='pdv/uploads/".$produtos['image']."'></a>"
              ."<a href='insere_prod_mesas.php?mesa=$id_mesa&id=".$produtos['id']."'><img class='ui tiny bordered rounded image' src='images/".$produtos['image']."'></a>"
            ."</p>"
            ."<p>"
              .$produtos['code']." - ".$produtos['name']
            ."</p>"
          ."</div>"
      ;
    }
    echo "</div>"
        ."</div>"
        ."</p>";
}

    
        
?>