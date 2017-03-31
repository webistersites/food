 <script>
// $(document).ready(function(){
//  $("#Esfihas").click(function(){
//   $("#refresh").load("lista_esfihas.php");
//  });
// });
// </script>
<div class="geral sumir">
<div class="ui secondary pointing green menu">
    <a class="item active" href="#">
        Caixa
      </a>
        <a class="item" href="#cadastrar_item" onclick="location.reload()">
        Produtos
      </a>

    <a href="fechar_caixa.php" class="right floated item">Fechar Caixa</a>
</div>
<div class="ui segment">
        <h2 class="ui center aligned dividing header">
            Caixa 01
        </h2>
        <br>
        <div class="ui pointing grey inverted menu">
            <?php
                $buscaCategorias = mysql_query("SELECT * FROM categorias");
                while ($categoria = mysql_fetch_array($buscaCategorias))
                {
                    echo '<script>
                            $(document).ready(function(){
                             $("#'.$categoria['categoria'].'").click(function(){
                              $("#refresh").load("lista_'.$categoria['categoria'].'.php");
                              alert("Fui clicado");
                             });
                            });
                            </script>';

                    echo '<a href="javascript:void(0)" id="'.$categoria['categoria'].'" class="right floated item '.$categoria['categoria'].'" >'
                            . $categoria['categoria']
                        . '</a>';
                }
            ?>
        </div>
<?php
  include 'novo_caixa.php';
?>
    </div>
</div>
