<?php 
include 'cabecalho.php';

echo 
'<style type="text/css">
    body {
      background-color: #e3e3e3;
    }
    .sumir {
        display: none;
    }
</style>';

echo '<div class="ui container">';

echo
 '<div class="ui secondary pointing menu">
    <a class="item" href="config.php">
        Produtos
      </a>
        <a class="item active" href="#">
        Clientes
      </a>
        <a class="item" href="funcionarios.php">
        Funcionários
      </a>
</div>';
include 'submenu_delivery_cadastrar.php';
echo '</div>'; #Final da Div Container

    
 ?>
<script>
    var link = window.location.pathname;
    if (link === "/food/clientes.php") 
        {
            $('#config').addClass("active");
            
        };
</script>
<?php 
include "rodape.php";
 ?>