<?php
    include "cabecalho.php";
    $id_mesa = 4;

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
    <div class="ui secondary pointing menu">
        <a class="item active" href="#salao" >
            Mesa <?php echo $id_mesa; ?>
        </a>
        <?php echo '<a class="item" href="imprimirCozinha.php?mesa='.$id_mesa.'">'; ?>
            Imprimir Cozinha
        </a>
    </div>
    <div class="ui segment">
        <h2 class="ui center aligned dividing header">
            <i class="food icon"></i> Mesa <?php echo $id_mesa; ?>
        </h2>
        <br>
    <?php include 'pdv_mesas.php'; ?>
    </div>
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
