<?php 
    include 'cabecalho.php';
    //include 'submenu_delivery_caixa.php';
?>
<script>
  $(function() {
    $('#result').load("getDataDelivery.php?id=");
    //$('#tabela_aux').css("display", "none");
});
</script>
<style type="text/css">
    body {
      background-color: #e3e3e3;
    }
    .sumir {
        display: none;
    }
</style>
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
                <p>Por favor, faça abertura do caixa para utilizar o Delivery!
              </p>
              <p><a href="pdv.php" class="ui green button">Abrir caixa</a></p></div></div>';
    }
 else {
        
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

  };
  
 
</script>
<div class="ui container">

<!-- <div class="ui secondary pointing menu">
    <a class="item" href="delivery.php" onclick="location.reload()">
        Delivery
      </a>
        <a class="item" href="delivery.php#cadastrar" onclick="location.reload()">
        Cadastrar
      </a>
        <a class="item active" href="pdv_delivery.php">
        Caixa
      </a>
</div> -->
<div class="ui segment">
    <h2 class="ui center aligned dividing header">
            Caixa Delivery
        </h2> 
<!--
################ LISTAGEM DE PRODUTOS E PEDIDOS ##################
-->
<?php
    $consulta_cliente = mysql_query("SELECT
                                            a.id_cliente
                                            ,b.name
                                    FROM
                                            pedido_delivery a
                                    INNER JOIN
                                            clientes b
                                    ON
                                            a.id_cliente = b.id");
    
    $consulta_motoboy = mysql_query("SELECT
                                        distinct c.nome
                                    FROM
                                        pedido_delivery a
                                    INNER JOIN
                                        clientes b
                                    ON
                                        a.id_cliente = b.id
                                    INNER JOIN
                                        usuarios c
                                    ON
                                        a.id_motoboy = c.id");
?>
            <?php
                if (mysql_num_rows($consulta_cliente) == 0)
                {
                    echo '';
                }
                else 
                {

                    echo '<div class="ui grey pointing inverted menu">';
                    $buscaCategorias = mysql_query("SELECT * FROM categorias");
                    while ($categoria = mysql_fetch_array($buscaCategorias))
                    {
                      echo '<script>
                            $(document).ready(function(){
                             $("#'.$categoria['categoria'].'").click(function(){
                              $("#refresh").load("lista_'.$categoria['categoria'].'_delivery.php");
                             });
                            });
                            </script>';

                    echo '<a href="javascript:void(0);" id="'.$categoria['categoria'].'" class="right floated item '.$categoria['categoria'].'" >'
                            . $categoria['categoria']
                        . '</a>';
                    }
                    echo '</div>';
                }
                
            ?>
        
<div class="ui two column doubling stackable grid container">
  <div class="column">
    <p>        
        <?php
            if (mysql_num_rows($consulta_cliente) == 0)
            {
                echo "<h3 class='ui center aligned header'>Selecionar Cliente</h3>";
                echo '<br>';
                exit();
            }
            // elseif (mysql_num_rows($consulta_motoboy) == 0)
            // {   
            //     $ver_consulta = mysql_fetch_array($consulta_cliente);
            //     echo "<h3 class='ui center aligned header'>PDV</h3>";                
            //     echo '<h5 class="ui center aligned header">Cliente: '.$ver_consulta['name'].''
            //             . '<br><br>'
            //             . 'Motoboy: -'
            //             . '</h5>';
            // }
            else
            {
                $ver_consulta = mysql_fetch_array($consulta_cliente);
                // $ver_motoboy = mysql_result($consulta_motoboy,0);               
                echo '<h5 class="ui left aligned header">Cliente: '.$ver_consulta['name'].''
                        . '';
                        //include 'motoboy.php';
                        echo '</h5>';

            }
        ?>        
    </p>
    <?php

        include 'teste/autocomplete/delivery/index.php';
        echo "<script>";
        echo '$("result").ready(function(){
                 $("#finalizar").click(function(){
                  $("#refresh").load("forma_pagamento.php"); 
                  selecionaMotoboy(); 
                 });
                });';
        echo "</script>";
        echo "<p>"
              . "<div id='result'>"
              . ""
              . "</div>";
        echo "<a href='balcaoDAO_delivery.php?truncar=yes' class='ui red button'>Cancelar Venda</a>";
        echo '<a href="javascript:void(0);" id="finalizar" class="ui green right floated button">Finalizar Venda</a>';
          
     ?>
  </div>
  <?php 
    echo "<script>";
          echo '$("result").ready(function(){
                   $("#dois_sabores").click(function(){
                    $("#refresh").load("dois_sabores_delivery.php");
                   });
                  });';
          echo "</script>";

          echo "<script>";
          echo '$("result").ready(function(){
                   $("#tres_sabores").click(function(){
                    $("#refresh").load("tres_sabores_delivery.php");
                   });
                  });';
          echo "</script>";
        echo "<script>";
        echo '$("result").ready(function(){
                 $("#cpf_nota").click(function(){
                  $("#refresh").load("cpf_nota_delivery.php");
                 });
                });';
        echo "</script>";

   ?>
  <div class="column">
    <br><?php include 'motoboy.php'; ?><br>
        <p>
        <a href="javascript:void(0);" id="dois_sabores" class="ui basic button">2 Sabores</a>
        <a href="javascript:void(0);" id="tres_sabores" class="ui basic button">3 Sabores</a>
        <a href="javascript:void(0);" id="cpf_nota" class="ui basic button">CPF na nota</a>
        <div class="ui bottom attached segment" id="refresh">
      <p>
        <?php
             //include __DIR__ . '/2sabores/index.php';
            include 'dois_sabores_delivery.php';
        ?>
          </p>
        </div>
      </p>
    </div>
  </div>
</div>


<?php
  // include 'popup_caixa.php';
  // include 'popup_venda_delivery.php';
  // include 'popup_motoboy.php';
  include 'rodape.php';
    echo '<div class="sumir">';
    include 'teste/autocomplete/789/index.php';
    //include __DIR__ . '/2sabores/index.php';
    echo '</div>';
 
?>
<script>
  var menu = window.location.pathname;
  if (menu == '/food/pdv_delivery.php') {
    $('#delivery').addClass('active');
  };
</script>
</div>
</div>
<?php
}
?>