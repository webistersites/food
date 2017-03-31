<?php
    include "cabecalho.php";
    $id     = $_GET['id'];
    $ver_clientes = mysql_query("SELECT * FROM clientes WHERE id = " . $id);
    $cliente      = mysql_fetch_array($ver_clientes);
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
    <div class="ui secondary pointing green menu">
    <a class="item" href="#" onclick="location.reload()">
        Delivery
      </a>
        <a class="item active" href="#cadastrar">
        Cadastrar
      </a>
        <a class="item" href="pdv_delivery.php" onclick="location.reload()">
        Caixa
      </a>
</div>
    <div class="ui segment">
        <h2 class="ui center aligned dividing header">
            Alterar <?php echo $cliente['name']; ?>
            <div class="sub header">Digite somente o que for alterar</div>
        </h2>
        <br><br>
        <div class="ui center aligned grid">
            <br>
            <br>
            <form action="alterar_clientes.php" method="post">
            <div class="ui equal width form">
            <div class="fields">
              <div class="field">
                <label>Nome</label>
                <input type="text" name="nome" placeholder="Nome" autofocus="">
              </div>
              <div class="field">
                <label>Telefone</label>
                <input type="text" name="telefone" placeholder="DDD">
              </div>
              <div class="field">
                <label>CEP</label>
                <input type="text" name="cep" placeholder="00000-000">
              </div>
            </div>
            <div class="fields">
                <div class="twelve wide field">
                    <label>Endereço</label>
                    <input type="text" name="endereco" placeholder="Rua, Avenida...">
                </div>
                <div class="one wide field">
                    <label>N°</label>
                    <input type="text" name="cf1" size="1" placeholder="">
                </div>

            </div>
            <div class="fields">
                <div class="ten wide field">
                    <label>Bairro</label>
                    <input type="text" name="bairro" placeholder="Bairro">
                </div>
                <div class="one wide field">
                    <label>Taxa de Entrega</label>
                    <input type="text" name="taxa" placeholder="R$" size="4">
                </div>
            </div>
            <input type="hidden" name="id2" <?php echo 'value="'.$id.'"' ?> >
            <a href="delivery.php#cadastrar" class="ui small button">Voltar</a>
            <input type="submit" class="ui submit right floated green small button" value="Alterar">
            <br><br><br>
        </div>
        </form>
        <br>
        </div> 
        <div class='ui divider'></div>
        <br>
        <?php 
            echo '<div class="ui center aligned grid">
            <table class="ui very basic collapsing center aligned celled table">
            <thead>
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Endereço</th>
                <th>Taxa de entrega</th>
                <th>CEP</th>
            </thead>
            <tr>
                <td>'.$cliente['id'].'</td>
                <td>'.$cliente['name'].'</td>
                <td>'.$cliente['phone'].'</td>
                <td>'.$cliente['endereco'].', '.$cliente['cf1'].' - '.$cliente['bairro'].'</td>
                <td>'.$cliente['taxa_de_entrega'].'</td>
                <td>'.$cliente['cep'].'</td>
            </tr>
            </table>
            </div>'
            ;

        ?>
        <br>
    </div>
    <br>
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




