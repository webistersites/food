<!--
################ Estilo da DIV Subtotal ##################
-->
<style>
  .subtotal {
    background-color: #eee;
    padding: 40px 5px 40px 5px;
    text-align: right;
    font-size: 28pt;
    border-radius: 3px;
    box-shadow: 2px 2px 6px #ccc;
  }

  .subtotal span {
    text-align: center;
    font-size: 12pt;
    vertical-align: middle;
    margin-right: 2%;

  }
  
#id_of_button {
    
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

  }

</script>
<!--
################ LISTAGEM DE PRODUTOS E PEDIDOS ##################
-->

<div class="ui two column doubling stackable grid container">
  <div class="column">
    <p><h3 class='ui center aligned header'>PDV</h3><br></p> 
    <?php
        include 'teste/autocomplete/789/index.php';
      echo "<p>"
            ."<table class='ui small compact table' id='tblCadastro'>"
              ."<thead>"                
                ."<th class='center aligned'>Cod</th>"
                ."<th>Produto</th>"
                ."<th>Preço</th>"
                ."<th class='center aligned'>Qtd</th>"
                ."<th>Total</th>"
                ."<th class='right aligned'>Ação</th>"
              ."</thead>"
      ;
      $query_pdv = mysql_query('
        SELECT
	       a.id,
               b.code,
         b.name as Produto,
         a.quantidade,
         b.cost as Preço,
         a.quantidade*b.cost as Total,
         a.obs,
         b.category_id
       FROM
	        pedido_balcao a
        INNER JOIN
	         tec_products b
         ON
            a.id_produto = b.id
          ORDER BY a.id');
      while ($pedido=mysql_fetch_array($query_pdv)) {
        echo "<tr>"              
                ."<td class='collapsing center aligned'>".$pedido['code']."</td>";
               if ($pedido['category_id'] == 99) 
                {
                   echo "<td class='collapsing'>1/2 - ".$pedido['Produto']."</td>"
                        . "<td class='collapsing'>R$ ".$pedido['obs']."</td>"
                        . "<td class='center aligned'>".$pedido['quantidade']."x</td>"
                           . "<input type='text' id='seu_nome'>"
                        ."<td class='collapsing'>R$ ".$pedido['obs']."</td>";
                   $subtotal+=$pedido['obs'];
                }
                elseif ($pedido['category_id'] == 98) 
                {
                   echo "<td class='collapsing'>1/3 - ".$pedido['Produto']."</td>"
                        . "<td class='collapsing'>R$ ".$pedido['obs']."</td>"
                        . "<td class='center aligned'>".$pedido['quantidade']."x</td>"
                        ."<td class='collapsing'>R$ ".$pedido['obs']."</td>";
                   $subtotal+=$pedido['obs'];
                }
                else 
                {
                  if ($pedido['code'] == 2000) {
                      echo "<td class=''>".$pedido['Produto']."</td>"
                        ."<td class='collapsing'><form action='processa.php' method='post'>R$ <input type='hidden' name='preco_id' value='".$pedido['id']."'><input type='text' name='preco' placeholder='".$pedido['Preço']."' size='4'></td>"
                        . "<td class='center aligned'><form action='processa.php' method='post'><input type='hidden' name='seu_nome2' value='".$pedido['id']."'><input type='text' name='seu_nome' placeholder='".$pedido['quantidade']."' size='2'>x</td>"
                        ."<td class='collapsing'>R$ ".$pedido['Total']."</td>"; 
                      $subtotal+=$pedido['Total'];
                  }
                  else {
                      echo "<td class=''>".$pedido['Produto']."</td>"
                        ."<td class='collapsing'>R$ ".$pedido['Preço']."</td>"
                        . "<td class='center aligned'><form action='processa.php' method='post'><input type='hidden' name='seu_nome2' value='".$pedido['id']."'><input type='text' name='seu_nome' placeholder='".$pedido['quantidade']."' size='2'>x</td>"
                        ."<td class='collapsing'>R$ ".$pedido['Total']."</td>"; 
                      $subtotal+=$pedido['Total'];
                    }
                }
                echo 
               "<td class='center aligned'>"."<a href='balcaoDAO.php?id_del=".$pedido['id']."'><i class='trash icon'></i></a>"
                . "<input type='submit' value='Alterar'>"
                . "</form>"
                
            ."</td>"
            ."</tr>"
        ;
        
      }
      echo 
        "</table>".
            "<table class='ui table'>".
      "<tr>"
            ."<td><a href='balcaoDAO.php?truncar=yes' class='ui basic fluid button'>Cancelar</a></td>"
            ."<td><a href='suspender_venda.php?tipo=balcao&total=".$subtotal."' class='ui basic fluid button'>Aguardar</a></td>"
            ."<td colspan='4' rowspan='2'><div class='subtotal'><span>subtotal </span>R$ ".number_format($subtotal, 2,',','.')."</div></td>"
          ."</tr>"
          ."<tr>"
            ."<td colspan='2'><a href='#venda' id='botao' class='ui green fluid button'>Finalizar</a></td>"
          ."</tr>"
          ."</table>"
          ."</p>"
     ?>
    <script>
        function alterar_div() {
  $.ajax({
    type: "POST",
    url: "processa.php",
    data: {
      nome_usuario: $("#seu_nome").val(),
      nome_usuario2: $("#seu_nome2").val()
    },
    success: function(data) {
      $("#conteudo").html(data);
    }
  });
}
        </script>
  </div>
    
  <div class="column">
    <p><h3 class='ui center aligned header'>Produtos</h3><br></p>
    <p>
        <a href="search/modal_sabores.php#pizzas" class="ui basic button">2 Sabores</a>
        <a href="search/modal_3sabores.php#pizzas" class="ui basic button">3 Sabores</a>
    <div class="ui bottom attached segment" id="refresh">
      <p>
        <?php
             include 'lista_pizzas.php';
        ?>
          </p>
        </div>
      </p>
    </div>
  </div>
<script>
  var target = window.location.hash;
  if (target === "#lanches") 
  {
    $('.lanches').addClass('active');
    $('.bebidas').removeClass('active');
    $('.geral').removeClass('sumir');
    $('#pdv').addClass('active');
    $('.prod2').removeClass('sumir');
  } 
  else if (target === "#bebidas") 
  {
    $('.lanches').removeClass('active');
    $('.bebidas').addClass('active');
    $('.geral').removeClass('sumir');
    $('#pdv').addClass('active');
    $('.prod1').removeClass('sumir');
  }
  else if (target === "#Pizzas" || target === "")
  {
    $('.lanches').removeClass('active');
    $('.Pizzas').addClass('active');
    $('.geral').removeClass('sumir');
    $('#pdv').addClass('active');
    $('.prod1').removeClass('sumir');  
  }
  else if (target === "#Esfihas")
  {
    $('.lanches').removeClass('active');
    $('.Esfihas').addClass('active');
    $('.geral').removeClass('sumir');
    $('#pdv').addClass('active');
    $('.prod2').removeClass('sumir');  
  }
  else if (target === "#Salgados")
  {
    $('.lanches').removeClass('active');
    $('.Salgados').addClass('active');
    $('.geral').removeClass('sumir');
    $('#pdv').addClass('active');
    $('.prod3').removeClass('sumir');  
  }
  else if (target === "#Beirutes")
  {
    $('.lanches').removeClass('active');
    $('.Beirutes').addClass('active');
    $('.geral').removeClass('sumir');
    $('#pdv').addClass('active');
    $('.prod4').removeClass('sumir');  
  }
  else if (target === "#Porções")
  {
    $('.lanches').removeClass('active');
    $('.Porções').addClass('active');
    $('.geral').removeClass('sumir');
    $('#pdv').addClass('active');
    $('.prod5').removeClass('sumir');  
  }
  else if (target === "#Bebidas")
  {
    $('.lanches').removeClass('active');
    $('.Bebidas').addClass('active');
    $('.geral').removeClass('sumir');
    $('#pdv').addClass('active');
    $('.prod6').removeClass('sumir');  
  }
  else if (target === "#Pastéis")
  {
    $('.lanches').removeClass('active');
    $('.Pastéis').addClass('active');
    $('.geral').removeClass('sumir');
    $('#pdv').addClass('active');
    $('.prod7').removeClass('sumir');  
  }
  else if (target === "#Lanches")
  {
    $('.lanches').removeClass('active');
    $('.Lanches').addClass('active');
    $('.geral').removeClass('sumir');
    $('#pdv').addClass('active');
    $('.prod8').removeClass('sumir');  
  }
  else if (target === "#Doces")
  {
    $('.lanches').removeClass('active');
    $('.Doces').addClass('active');
    $('.geral').removeClass('sumir');
    $('#pdv').addClass('active');
    $('.prod9').removeClass('sumir');  
  }
  else if (target === "#Sorvetes")
  {
    $('.lanches').removeClass('active');
    $('.Sorvetes').addClass('active');
    $('.geral').removeClass('sumir');
    $('#pdv').addClass('active');
    $('.prod10').removeClass('sumir');  
  }
  else if (target === "#Balas")
  {
    $('.lanches').removeClass('active');
    $('.Balas').addClass('active');
    $('.geral').removeClass('sumir');
    $('#pdv').addClass('active');
    $('.prod11').removeClass('sumir');  
  }
</script>
<?php
  include 'popup_caixa.php';
  include 'popup_venda.php';
?>
