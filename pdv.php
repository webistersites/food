<?php
    include "cabecalho.php";
    $verificaAbertura = mysql_query("SELECT * FROM caixa01 ORDER BY id DESC");
    $verificaAbertura2 = mysql_query("SELECT * FROM caixa02 ORDER BY id DESC");
    $caixa01 = mysql_fetch_assoc($verificaAbertura);
    $caixa02 = mysql_fetch_assoc($verificaAbertura2);
    
?>
<style type="text/css">
    body {
      background-color: #EEE;
    }
    .sumir {
        display: none;
    }
</style>

<div class="ui container">

<?php
        if ($caixa02['status'] == "Aberto" && $caixa02['id_usuario'] == $_SESSION['usuarioID'])
        {
            include 'balcao2.php';
        }        
        elseif ($caixa01['status'] == "Aberto" && $caixa01['id_usuario'] == $_SESSION['usuarioID'])
        {
            include 'balcao.php';
        }
        elseif ($caixa01['status'] == "Fechado" && $caixa02['status'] == "Fechado") 
        {
            echo '<br><div class="ui center aligned grid">
            <div class="ui warning compact message">
            <i class="close icon"></i>
            <div class="header">
              Caixa fechado!
            </div>
            Você precisa fazer a abertura do caixa para continuar. Informe o valor de entrada abaixo: <br><br>
            <form action="abrir_caixa.php" method="post">
            <div class="ui right labeled input">                
                <div class="ui green label">R$</div>
                <input type="text" placeholder="Entrada" name="valorEntrada">
                <div class="ui basic label">.00</div>                                
              </div>
              <br><br>
                <input type="submit" class="ui right floated button" value="Confirmar">
              </form>
          </div>
          </div>
          <br><br>'
    ;
        }
        elseif (($caxa01['status'] == "Aberto" && $caixa01['id_usuario'] != $_SESSION['usuarioID']) && ($caixa02['status'] == "Aberto" && $caixa02['id_usuario'] != $_SESSION['usuarioID'])) 
        {
            echo '<br><div class="ui center aligned grid">
            <div class="ui error compact message">
            <i class="close icon"></i>
            <div class="header">
              Nenhum caixa disponível!
            </div>
            Todos os caixas estão em aberto, entre em contato com o gerente da loja. <br><br>
          </div>
          </div>'
    ;
        }
        elseif (($caixa01['status'] == "Aberto" && $caixa01['id_usuario'] != $_SESSION['usuarioID']) && $caixa02['status'] == "Fechado")
        {
            echo '<br><div class="ui center aligned grid">
            <div class="ui warning compact message">
            <i class="close icon"></i>
            <div class="header">
              Caixa fechado!
            </div>
            Você precisa fazer a abertura do caixa para continuar. Informe o valor de entrada abaixo: <br><br>
            <form action="abrir_caixa2.php" method="post">
            <div class="ui right labeled input">                
                <div class="ui green label">R$</div>
                <input type="text" placeholder="Entrada" name="valorEntrada">
                <div class="ui basic label">.00</div>                                
              </div>
              <br><br>
                <input type="submit" class="ui right floated button" value="Confirmar">
              </form>
          </div>
          </div>'
    ;
        }
        elseif (($caixa02['status'] == "Aberto" && $caixa02['id_usuario'] != $_SESSION['usuarioID']) && $caixa01['status'] == "Fechado")
        {
            echo '<br><div class="ui center aligned grid">
            <div class="ui warning compact message">
            <i class="close icon"></i>
            <div class="header">
              Caixa fechado!
            </div>
            Você precisa fazer a abertura do caixa para continuar. Informe o valor de entrada abaixo: <br><br>
            <form action="abrir_caixa.php" method="post">
            <div class="ui right labeled input">                
                <div class="ui green label">R$</div>
                <input type="text" placeholder="Entrada" name="valorEntrada">
                <div class="ui basic label">.00</div>                                
              </div>
              <br><br>
                <input type="submit" class="ui right floated button" value="Confirmar">
              </form>
          </div>
          </div>'
    ;
        }
    
    include 'submenu_caixa_cadastrar.php';
?>
    
</div>

<script>
    var pasta = window.location.pathname;
    var ancora = window.location.hash;
    if (ancora === "#geral" || ancora === "") {
        $('.geral').removeClass('sumir');
        $('#pdv').addClass('active');
      } else if (ancora === "#cadastrar_item") {
        $('.cadastrar_item').removeClass('sumir');
        $('#pdv').addClass('active');
}
</script>

<?php
    include "rodape.php";
    echo '<div class="sumir">';
    include 'teste/autocomplete/789/index.php';
    echo '</div>';
?>
