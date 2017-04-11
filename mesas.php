<?php
    include "cabecalho.php";
    include "atualiza_pagina.php";
    $query = mysql_query("select * from tec_mesas where id < 21");
    
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
include 'salao.php';
include 'submenu_mesas_cadastrar.php';
?>
    
</div>
<script>
		var pasta = window.location.pathname;
		var ancora = window.location.hash;
		if (ancora === "#salao" || ancora === "") {
				$('.salao').removeClass('sumir');
				$('#salao').addClass('active');
} else if (ancora === "#cadastrar") {
				$('.cadastrar').removeClass('sumir');
				$('#salao').addClass('active');
}
</script>

<?php
	include "rodape.php";
?>
