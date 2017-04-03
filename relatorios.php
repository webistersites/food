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
    // include 'gerenciar_funcionarios.php';
    include 'submenu_relatorios.php';
?>

<script>
    var pasta = window.location.pathname;
    var ancora = window.location.hash;
    if (ancora === "#gerenciar" || ancora === "") {
        $('.gerenciar').removeClass('sumir');
        $('.cadastrar').addClass('sumir');
        
} else if (ancora === "#cadastrar") {
        $('.gerenciar').addClass('sumir');
        $('.cadastrar').removeClass('sumir');
}
</script>

<?php
    include "rodape.php";
?>

