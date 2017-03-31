<?php
echo "<script>";
include 'ajax2.js';
echo "</script>";

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
              //."<a href='#popup".$produtos['id']."'><img class='ui tiny bordered rounded image' src='pdv/uploads/".$produtos['image']."'></a>"
              ."<a href='javascript:void(0);' onclick='listaCaixa(".$produtos['id'].");'><img class='ui tiny bordered rounded image' src='images/".$produtos['image']."'></a>"
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
              ."<a href='javascript:void(0);' onclick='listaCaixa(".$produtos['id'].");'><img class='ui tiny bordered rounded image' src='images/".$produtos['image']."'></a>"
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
    
       //include 'popup_2sabores.php';
       

//echo "<p>"
//        ."<div class='prod2 sumir'>"
//        ."<div class='ui four column doubling stackable grid container'>"
//        ;
//
//    $query = mysql_query('select * from tec_products where category_id = 2');
//    while ($produtos=mysql_fetch_array($query)) {
//      echo "<div class='column'>"
//            ."<p>"
//              //."<a href='#popup".$produtos['id']."'><img class='ui tiny bordered rounded image' src='pdv/uploads/".$produtos['image']."'></a>"
//              ."<a href='insere_prod_caixa.php?id=".$produtos['id']."'><img class='ui tiny bordered rounded image' src='images/".$produtos['image']."'></a>"
//            ."</p>"
//            ."<p>"
//              .$produtos['name']
//            ."</p>"
//          ."</div>"
//      ;
//      #include 'popup_caixa.php';
//    }
//    echo "</div>"
//        ."</div>"
//        ."</p>";
//    
//// ****************************************************************************************************************
//    // Listagem de produtos
//    
//    echo "<p>"
//            ."<div class='prod1 sumir'>"
//            ."<div class='ui four column doubling stackable grid container'>"
//            ;
//
//        $query = mysql_query('select * from tec_products where category_id = 1');
//        while ($produtos=mysql_fetch_array($query)) {
//          echo "<div class='column'>"
//                ."<p>"
//                  //."<a href='#popup".$produtos['id']."'><img class='ui tiny bordered rounded image' src='pdv/uploads/".$produtos['image']."'></a>"
//                  ."<a href='insere_prod_caixa.php?id=".$produtos['id']."'><img class='ui tiny bordered rounded image' src='images/".$produtos['image']."'></a>"
//                ."</p>"
//                ."<p>"
//                  .$produtos['code']." - ".$produtos['name']
//                ."</p>"
//              ."</div>"
//          ;
//          #include 'popup_caixa.php';
//        }
//        echo "</div>"
//            ."</div>"
//            ."</p>";
//        
//// ****************************************************************************************************************
//    // Listagem de produtos
//        
//        echo "<p>"
//            ."<div class='prod3 sumir'>"
//            ."<div class='ui four column doubling stackable grid container'>"
//            ;
//
//        $query = mysql_query('select * from tec_products where category_id = 3');
//        while ($produtos=mysql_fetch_array($query)) {
//          echo "<div class='column'>"
//                ."<p>"
//                  //."<a href='#popup".$produtos['id']."'><img class='ui tiny bordered rounded image' src='pdv/uploads/".$produtos['image']."'></a>"
//                  ."<a href='insere_prod_caixa.php?id=".$produtos['id']."'><img class='ui tiny bordered rounded image' src='images/".$produtos['image']."'></a>"
//                ."</p>"
//                ."<p>"
//                  .$produtos['name']
//                ."</p>"
//              ."</div>"
//          ;
//          #include 'popup_caixa.php';
//        }
//        echo "</div>"
//            ."</div>"
//            ."</p>";
//        
//        // ****************************************************************************************************************
//    // Listagem de produtos
//        
//        echo "<p>"
//            ."<div class='prod4 sumir'>"
//            ."<div class='ui four column doubling stackable grid container'>"
//            ;
//
//        $query = mysql_query('select * from tec_products where category_id = 4');
//        while ($produtos=mysql_fetch_array($query)) {
//          echo "<div class='column'>"
//                ."<p>"
//                  //."<a href='#popup".$produtos['id']."'><img class='ui tiny bordered rounded image' src='pdv/uploads/".$produtos['image']."'></a>"
//                  ."<a href='insere_prod_caixa.php?id=".$produtos['id']."'><img class='ui tiny bordered rounded image' src='images/".$produtos['image']."'></a>"
//                ."</p>"
//                ."<p>"
//                  .$produtos['name']
//                ."</p>"
//              ."</div>"
//          ;
//          #include 'popup_caixa.php';
//        }
//        echo "</div>"
//            ."</div>"
//            ."</p>";
//        
//        // ****************************************************************************************************************
//    // Listagem de produtos
//        
//        echo "<p>"
//            ."<div class='prod5 sumir'>"
//            ."<div class='ui four column doubling stackable grid container'>"
//            ;
//
//        $query = mysql_query('select * from tec_products where category_id = 5');
//        while ($produtos=mysql_fetch_array($query)) {
//          echo "<div class='column'>"
//                ."<p>"
//                  //."<a href='#popup".$produtos['id']."'><img class='ui tiny bordered rounded image' src='pdv/uploads/".$produtos['image']."'></a>"
//                  ."<a href='insere_prod_caixa.php?id=".$produtos['id']."'><img class='ui tiny bordered rounded image' src='images/".$produtos['image']."'></a>"
//                ."</p>"
//                ."<p>"
//                  .$produtos['code']." - ".$produtos['name']
//                ."</p>"
//              ."</div>"
//          ;
//          #include 'popup_caixa.php';
//        }
//        echo "</div>"
//            ."</div>"
//            ."</p>";
        
?>