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
include 'submenu_delivery.php';
include 'submenu_delivery_cadastrar.php';

?>
</div>
<script>
    var pasta = window.location.pathname;
    var ancora = window.location.hash;
    if (ancora === "#delivery" || ancora === "") {
        $('.delivery').removeClass('sumir');
        $('#delivery').addClass('active');
} else if (ancora === "#cadastrar") {
        $('.cadastrar').removeClass('sumir');
        $('.delivery').addClass('sumir');
        $('.caixa').addClass('sumir');
        $('#delivery').addClass('active');
} else if (ancora === "#caixa") {
        $('.caixa').removeClass('sumir');
        $('.delivery').addClass('sumir');
        $('.cadastrar').addClass('sumir');
        $('#delivery').addClass('active');
}
</script>

<?php
    include "rodape.php";
?>
