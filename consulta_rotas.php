<?php 
    include 'cabecalho.php';

    $cep = $_GET['cep'];

?>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<div id="site">
        
          <h1>Google Maps API v3: Criando rotas</h1>
        
            <form method="post" action="#" id="auto_enviar">
                <fieldset>
                    <legend>Endereços</legend>
                    
                    <div>
                        <label for="txtEnderecoPartida">Endereço de partida:</label>
                        <input type="text" id="txtEnderecoPartida" name="txtEnderecoPartida" value="Rua Ataliba Leonel, 52 - São Paulo" />
                    </div>
                    
                    <div>
                        <label for="txtEnderecoChegada">Endereço de chegada:</label>
                        <?php echo '<input type="text" id="txtEnderecoChegada" name="txtEnderecoChegada" value="'.$cep.'" />'; ?>
                    </div>
                    
                    <div>
                        <input type="submit" id="btnEnviar" name="btnEnviar" value="Enviar" />
                    </div>
                </fieldset>
            </form>
        
            <div id="mapa"></div>
            
            <div id="trajeto-texto"></div>
        
        </div>
        
        <script src="js/jquery.min.js"></script>
    
        <!-- Maps API Javascript -->
        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDCjMe9FJr26brUXzoxKy5KQf6ByfgmJoU&sensor=false"></script>
 
        <!-- Arquivo de inicialização do mapa -->
    <script src="js/mapa.js"></script>
    
<script>
  $(document).ready(function() {
    $('#auto_enviar').submit();
  });
</script>