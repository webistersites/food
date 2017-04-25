<?php
    include "cabecalho.php";
?>
<style type="text/css">
    body {
      background-color: #e3e3e3;
    }
    .sumir {
        display: none;
    }
</style>
<div class="ui container">

<?php 
    include 'gerenciar_funcionarios.php';
    //include 'submenu_funcionarios_cadastrar.php';
?>

<script>
    var link = window.location.pathname;
    if (link === "/food/funcionarios.php") 
        {
            $('#config').addClass("active");
            $('#func').removeClass("active");
            
        };
</script>

<?php
    include "rodape.php";
?>

