<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<style type="text/css">
#id_of_button {
	visibility: hidden;
}
</style>

<div id="conteudo"></div>
<input type="text" id="seu_nome" size="2" >
<input type="hidden" id="seu_nome2" value="12">
 
<button id="id_of_button" type="hidden" onclick="alterar_div()">Alterar</button>

<script>

document.getElementById("seu_nome")
    .addEventListener("keyup", function(event) {
    event.preventDefault();
    if (event.keyCode == 13) {
        document.getElementById("id_of_button").click();
    }
});


function alterar_div() {
  $.ajax({
    type: "POST",
    url: "processa.php",
    data: {
      nome_usuario: $('#seu_nome').val(),
      nome_usuario2: $('#seu_nome2').val()
    },
    success: function(data) {
      $('#conteudo').html(data);
    }
  });
}


</script>