<!--
################ Estilo da DIV Subtotal ##################
-->
<style>
  .subtotal {
    background-color: #eee;
    padding: 40px 40px 40px 0px;
    text-align: right;
    font-size: 28pt;
    border-radius: 3px;
    box-shadow: 2px 2px 6px #ccc;
  }

  .subtotal span {
    text-align: center;
    font-size: 12pt;
    vertical-align: middle;
    margin-right: 25px;

  }

.sumir {
    display: none;
  }
</style>
<!--
################ ATALHOS DO TECLADO ##################
-->
<script>

  document.onkeyup=function(e){

   if(e.which == 107){
          window.location.hash = "#venda";
     return false;
   }

   if(e.which == 37){
          window.location.hash = "#lanches";
          window.location.reload();
     return false;
   }

   if(e.which == 39){
          window.location.hash = "#bebidas";
          window.location.reload();
     return false;
   }

  }

</script>

<!--
################ LISTAGEM DE PRODUTOS E PEDIDOS ##################
-->
<div class="ui two column doubling stackable grid container">
  <div class="column">
    <p><h3 class='ui center aligned header'>PDV</h3><br></p>
    <?php
      echo "<p>"
            ."<table class='ui bordered table'>"
              ."<thead>"
                ."<th>Qtd</th>"
                ."<th>Produto</th>"
                ."<th>Preço</th>"
                ."<th>Total</th>"
                ."<th>Ação</th>"
              ."</thead>"
      ;
      $query_pdv = mysql_query('
        SELECT
	       a.id,
         b.name as Produto,
         a.quantidade,
         b.cost as Preço,
         a.quantidade*b.cost as Total,
         a.obs
       FROM
	        pedido_balcao2 a
        INNER JOIN
	         tec_products b
         ON
            a.id_produto = b.id
          ORDER BY a.id');
      while ($pedido=mysql_fetch_array($query_pdv)) {
        echo "<tr>"
              ."<td>".$pedido['quantidade']."x</td>"
              ."<td>".$pedido['Produto']."</td>"
              ."<td>R$ ".$pedido['Preço']."</td>"
              ."<td>R$ ".$pedido['Total']."</td>"
              ."<td>"."<a href='balcaoDAO2.php?id_del=".$pedido['id']."'><i class='trash icon'></i></a>"."</td>"
            ."</tr>"
        ;
        $subtotal+=$pedido['Total'];
      }
      echo "<tr>"
            ."<td colspan='2'><a href='balcaoDAO2.php?truncar=yes' class='ui basic fluid button'>Cancelar</a></td>"
            ."<td colspan='3' rowspan='2'><div class='subtotal'><span>subtotal </span>R$ ".number_format($subtotal, 2,',','.')."</div></td>"
          ."</tr>"
          ."<tr>"
            ."<td colspan='2'><a href='#venda' id='botao' class='ui green fluid button'>Finalizar</a></td>"
          ."</tr>"
          ."</table>"
          ."</p>"
     ?>
  </div>
  <div class="column">
    <p><h3 class='ui center aligned header'>Produtos</h3><br></p>
    <p><div class="ui tabular menu">
      <a href="#lanches" class="item lanches active" onclick="location.reload()">
        Lanches
      </a>
      <a href="#bebidas" class="item bebidas" onclick="location.reload()">
        Bebidas
      </a>
    </div>
    <div class="ui bottom attached segment">
      <p>
        <?php
              echo "<p>"
                    ."<div class='prod2 sumir'>"
                    ."<div class='ui four column doubling stackable grid container'>"
                    ;

                $query = mysql_query('select * from tec_products where category_id = 2');
                while ($produtos=mysql_fetch_array($query)) {
                  echo "<div class='column'>"
                        ."<p>"
                          ."<a href='#popup".$produtos['id']."'><img class='ui tiny bordered rounded image' src='images/".$produtos['image']."'></a>"
                        ."</p>"
                        ."<p>"
                          .$produtos['name']
                        ."</p>"
                      ."</div>"
                  ;
                  #include 'popup_caixa.php';
                }
                echo "</div>"
                    ."</div>"
                    ."</p>";
              ?>
              <?php
                    echo "<p>"
                          ."<div class='prod1 sumir'>"
                          ."<div class='ui four column doubling stackable grid container'>"
                          ;

                      $query = mysql_query('select * from tec_products where category_id = 1');
                      while ($produtos=mysql_fetch_array($query)) {
                        echo "<div class='column'>"
                              ."<p>"
                                ."<a href='#popup".$produtos['id']."'><img class='ui tiny bordered rounded image' src='images/".$produtos['image']."'></a>"
                              ."</p>"
                              ."<p>"
                                .$produtos['name']
                              ."</p>"
                            ."</div>"
                        ;
                        #include 'popup_caixa.php';
                      }
                      echo "</div>"
                          ."</div>"
                          ."</p>";
                    ?>
          </p>
        </div>
      </p>
    </div>
  </div>
  <script>
    var target = window.location.hash;
    if (target === "#lanches" || target === "") {
      $('.lanches').addClass('active');
      $('.bebidas').removeClass('active');
      $('.geral').removeClass('sumir');
      $('#pdv').addClass('active');
      $('.prod2').removeClass('sumir');
    } else if (target === "#bebidas") {
      $('.lanches').removeClass('active');
      $('.bebidas').addClass('active');
      $('.geral').removeClass('sumir');
      $('#pdv').addClass('active');
      $('.prod1').removeClass('sumir');
    }
  </script>
<?php
  include 'popup_caixa2.php';
  include 'popup_venda2.php';
?>
