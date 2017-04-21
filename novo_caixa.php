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
<!--
################ LISTAGEM DE PRODUTOS E PEDIDOS ##################
-->

<div class="ui two column doubling stackable grid container">
  <div class="column">
    <br>
    <!-- <p><h3 class='ui center aligned header'>PDV</h3><br></p>  -->
    <?php
        include 'teste/autocomplete/789/index.php';
        //echo '<br><div class="ui mini input" id="result_nome"><input type="text" id="nome_nota" name="nome_nota" placeholder="Nome na nota" size="35%"></div>';
        //echo '&nbsp;&nbsp;&nbsp;<a href="#" onclick="insereNome()" class="ui tiny button">Selecionar</a>';
        echo "<script>";
        echo '$("result").ready(function(){
                 $("#finalizar_caixa").click(function(){
                  $("#refresh").load("forma_pagamento_caixa.php");
                 });
                });';
        echo "</script>";
        echo "<p>"
              . "<div id='result'>"
              . ""
              . "</div>";
        
        echo '<a href="balcaoDAO.php?truncar=yes" id="cancelar_caixa" class="ui red button">Cancelar Venda</a>';
        echo '&nbsp;<a href="javascript:void(0);" id="finalizar_caixa" class="ui green right floated button">Finalizar Venda</a>';
            
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
    <?php 
        echo "<script>";
        echo '$("result").ready(function(){
                 $("#dois_sabores").click(function(){
                  $("#refresh").load("dois_sabores.php");
                 });
                });';
        echo "</script>";
        echo "<script>";
        echo '$("result").ready(function(){
                 $("#tres_sabores").click(function(){
                  $("#refresh").load("tres_sabores.php");
                 });
                });';
        echo "</script>";
        echo "<script>";
        echo '$("result").ready(function(){
                 $("#cpf_nota").click(function(){
                  $("#refresh").load("cpf_nota.php");
                 });
                });';
        echo "</script>";

     ?>

  <div class="column">
    <br>
    <!-- <p><h3 class='ui center aligned header'>Produtos</h3><br></p> -->
    <p>
        <a href="javascript:void(0);" id="dois_sabores" class="ui basic button">2 Sabores</a>
        <a href="javascript:void(0);" id="tres_sabores" class="ui basic button">3 Sabores</a>
        <a href="javascript:void(0);" id="cpf_nota" class="ui basic button">CPF na nota</a>
    <div class="ui bottom attached segment" id="refresh">
      <p>
        <?php
             // include 'lista_produtos.php';
            include 'dois_sabores.php';
        ?>
          </p>
        </div>
      </p>
    </div>
  </div>

<?php
  //include 'popup_caixa.php';
  //include 'popup_venda.php';

?>

