<?php
    include "../cabecalho.php";
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
    
</div>

<script>
var pasta = window.location.pathname;
var ancora = window.location.hash;
if (ancora === "#salao" || ancora === "") 
    {
        $('.salao').removeClass('sumir');
        $('#salao').addClass('active');
    } 
    else if (ancora === "#cadastrar") 
    {
        $('.cadastrar').removeClass('sumir');
        $('#salao').addClass('active');
    }
</script>

<?php
	include "rodape.php";
?>
