
<?php

$indice = mysql_query("SELECT id FROM categorias WHERE id != 5");

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
              //.'<form method="post" action="" onsubmit="return false;">'
              //."<a href='#popup".$produtos['id']."'><img class='ui tiny bordered rounded image' src='pdv/uploads/".$produtos['image']."'></a>"
              ."<a href='javascript:void(0);' onclick='lista(".$produtos['id'].");'><img class='ui tiny bordered rounded image' src='images/".$produtos['image']."'></a>"
              //.'<input name="botao" value="'.$produtos['id'].'" type="image" src="images/'.$produtos['image'].'" width="80" height="80" onclick="lista()">'
              //. '<input type="hidden" value="1">'
              //. '</form>'
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

echo "<p>"
        ."<div class='prod5 sumir'>"
        ."<div class='ui four column doubling stackable grid container'>"
        ;

    $query = mysql_query('select * from tec_products where category_id = 5');
    while ($produtos=mysql_fetch_array($query)) {
      echo "<div class='column'>"
            ."<p>"
              //."<a href='#popup".$produtos['id']."'><img class='ui tiny bordered rounded image' src='pdv/uploads/".$produtos['image']."'></a>"
              ."<a href='javascript:void(0);' onclick='lista(".$produtos['id'].");'><img class='ui tiny bordered rounded image' src='images/".$produtos['image']."'></a>"
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
    
        
?>