<?php
    $consulta_pdv_aberto = mysql_query("SELECT status FROM caixa01 where id = (select max(id) from caixa01)");
    if (mysql_result($consulta_pdv_aberto,0) == 'Fechado')
    {
        echo '<br><br>
            <div class="ui center aligned grid">
            <div class="ui negative message">
                <i class="close icon"></i>
                <div class="header">
                  Caixa está fechado!
                </div>
                <p>Por favor, faça abertura do caixa para utilizar as Mesas!
              </p>
              <p><a href="pdv.php" class="ui green button">Abrir caixa</a></p></div></div><br><br>';
    }
 else {

     // Criar tabela de mesas condicional 
     $criar_tabela = mysql_query("CREATE TABLE IF NOT EXISTS `pedido_mesa".$id_mesa."` (
                    `id` int(11) NOT NULL AUTO_INCREMENT,
                    `id_produto` int(11) NOT NULL,
                    `quantidade` int(11) NOT NULL,
                    `obs` varchar(80) NOT NULL,
                    `id_garcom` int(11) DEFAULT NULL,
                    PRIMARY KEY (`id`)
                  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
     
     $criar_tabela_aux = mysql_query("CREATE TABLE IF NOT EXISTS `pedido_aux_mesa".$id_mesa."` (
                    `id` int(11) NOT NULL AUTO_INCREMENT,
                    `id_produto` int(11) NOT NULL,
                    `quantidade` int(11) NOT NULL,
                    `obs` varchar(80) NOT NULL,
                    `id_garcom` int(11) DEFAULT NULL,
                    PRIMARY KEY (`id`)
                  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
     
?>
<!--
################ Estilo da DIV Subtotal ##################
-->
<style>
  .subtotal {
    background-color: #eee;
    padding: 40px 5px 40px 0px;
    text-align: right;
    font-size: 28pt;
    border-radius: 3px;
    box-shadow: 2px 2px 6px #ccc;
  }

  .subtotal span {
    text-align: center;
    font-size: 11pt;
    vertical-align: middle;
    margin-right: 2%;
    display: none;

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

//   $(function() {
//     $('#result').load("getDataMesas.php?id=");
//     //$('#tabela_aux').css("display", "none");
// });
</script>
<?php 
echo "<script>"
            . '$(function() {
                $("#result").load("getDataMesas.php?mesa='.$id_mesa.'&id=");
                  });'
          . "</script>"
      ; 
?>

<!--
################ LISTAGEM DE PRODUTOS E PEDIDOS ##################
-->

<?php

     echo '<div class="ui grey pointing inverted menu">';
                    $buscaCategorias = mysql_query("SELECT * FROM categorias");
                    while ($categoria = mysql_fetch_array($buscaCategorias))
                    {
                      echo '<script>
                            $(document).ready(function(){
                             $("#'.$categoria['categoria'].'").click(function(){
                              $("#refresh").load("lista_'.$categoria['categoria'].'_mesas.php?mesa='.$id_mesa.'");
                             });
                            });
                            </script>';

                    echo '<a href="javascript:void(0);" id="'.$categoria['categoria'].'" class="right floated item '.$categoria['categoria'].'" >'
                            . $categoria['categoria']
                        . '</a>';
                    }
                    echo '</div>';

?>
        
<div class="ui two column doubling stackable grid container">
  <div class="column">
    <p>        
        <h3 class='ui center aligned header'>PDV</h3>
    </p>
    <?php
        //include 'teste/autocomplete/mesas/index.php';
    echo "<script>";
        echo '$("result").ready(function(){
                 $("#finalizar_mesas").click(function(){
                  $("#refresh").load("forma_pagamento_mesa.php?mesa='.$id_mesa.'");
                 });
                });';
        echo "</script>";
        echo "<p>"
              . "<div id='result'>"
              . ""
              . "</div>";
        echo '<a href="javascript:void(0);" id="finalizar_mesas" class="ui green fluid button">Finalizar</a>';      
          
     ?>
  </div>
  <?php 
    echo "<script>";
        echo '$("result").ready(function(){
                 $("#dois_sabores").click(function(){
                  $("#refresh").load("dois_sabores_mesa.php?mesa='.$id_mesa.'");
                 });
                });';
        echo "</script>";

        echo "<script>";
        echo '$("result").ready(function(){
                 $("#tres_sabores").click(function(){
                  $("#refresh").load("tres_sabores_mesa.php?mesa='.$id_mesa.'");
                 });
                });';
        echo "</script>";

   ?>
  <div class="column">
    <p><h3 class='ui center aligned header'>Produtos</h3><br></p>
    <p>
        <?php 
          echo '<a href="javascript:void(0);" id="dois_sabores" class="ui basic button">2 Sabores</a>';
          echo '<a href="javascript:void(0);" id="tres_sabores" class="ui basic button">3 Sabores</a>'; 
        ?>
        <div class="ui bottom attached segment" id="refresh">
      <p>
        <?php
             include 'lista_pizzas_mesas.php';
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
    //$('#pdv').addClass('active');
    $('.prod2').removeClass('sumir');
  } 
  else if (target === "#bebidas") 
  {
    $('.lanches').removeClass('active');
    $('.bebidas').addClass('active');
    $('.geral').removeClass('sumir');
    //$('#pdv').addClass('active');
    $('.prod1').removeClass('sumir');
  }
  else if (target === "#Pizzas")
  {
    $('.lanches').removeClass('active');
    $('.Pizzas').addClass('active');
    $('.geral').removeClass('sumir');
    //$('#pdv').addClass('active');
    $('.prod1').removeClass('sumir');  
  }
  else if (target === "#Esfihas")
  {
    $('.lanches').removeClass('active');
    $('.Esfihas').addClass('active');
    $('.geral').removeClass('sumir');
    //$('#pdv').addClass('active');
    $('.prod2').removeClass('sumir');  
  }
  else if (target === "#Salgados")
  {
    $('.lanches').removeClass('active');
    $('.Salgados').addClass('active');
    $('.geral').removeClass('sumir');
    //$('#pdv').addClass('active');
    $('.prod3').removeClass('sumir');  
  }
  else if (target === "#Beirutes")
  {
    $('.lanches').removeClass('active');
    $('.Beirutes').addClass('active');
    $('.geral').removeClass('sumir');
    //$('#pdv').addClass('active');
    $('.prod4').removeClass('sumir');  
  }
  else if (target === "#Porções")
  {
    $('.lanches').removeClass('active');
    $('.Porções').addClass('active');
    $('.geral').removeClass('sumir');
    //$('#pdv').addClass('active');
    $('.prod5').removeClass('sumir');  
  }
  else if (target === "#Bebidas")
  {
    $('.lanches').removeClass('active');
    $('.Bebidas').addClass('active');
    $('.geral').removeClass('sumir');
    //$('#pdv').addClass('active');
    $('.prod6').removeClass('sumir');  
  }
  else if (target === "#Pastéis")
  {
    $('.lanches').removeClass('active');
    $('.Pastéis').addClass('active');
    $('.geral').removeClass('sumir');
    //$('#pdv').addClass('active');
    $('.prod7').removeClass('sumir');  
  }
  else if (target === "#Lanches")
  {
    $('.lanches').removeClass('active');
    $('.Lanches').addClass('active');
    $('.geral').removeClass('sumir');
    //$('#pdv').addClass('active');
    $('.prod8').removeClass('sumir');  
  }
  else if (target === "#Doces")
  {
    $('.lanches').removeClass('active');
    $('.Doces').addClass('active');
    $('.geral').removeClass('sumir');
    //$('#pdv').addClass('active');
    $('.prod9').removeClass('sumir');  
  }
  else if (target === "#Sorvetes")
  {
    $('.lanches').removeClass('active');
    $('.Sorvetes').addClass('active');
    $('.geral').removeClass('sumir');
    //$('#pdv').addClass('active');
    $('.prod10').removeClass('sumir');  
  }
  else if (target === "#Balas")
  {
    $('.lanches').removeClass('active');
    $('.Balas').addClass('active');
    $('.geral').removeClass('sumir');
    //$('#pdv').addClass('active');
    $('.prod11').removeClass('sumir');  
  }
</script>

<?php
  include 'popup_caixa.php';
  include 'popup_venda_mesas.php';
  include 'popup_motoboy.php';

   echo '<div class="sumir">';
    include 'teste/autocomplete/mesas/index.php';
   echo '</div>';
 
?>

</div>
</div>
<?php
}
?>