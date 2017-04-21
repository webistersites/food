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
    <a class="item active" href="#">
        Produtos
      </a>
        <a href="clientes.php" class="item">
        Clientes
      </a>
        <a class="item" href="funcionarios.php">
        Funcionários
      </a>
</div>';
include 'produtos.php';
echo '</div>'; #Final da Div Container


 ?>

