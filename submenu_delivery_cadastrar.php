<div class="cadastrar sumir">
<div class="ui secondary pointing menu">
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
    <h2 class="ui center aligned dividing header"><i class="ui user icon"></i>Cadastro de Clientes</h2>
    <br><br>
    <div class="ui center aligned grid">
        <form action="cadastrar_clientes.php" method="post">
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
        </div>
        <input type="submit" class="ui submit right floated blue button" value="Cadastrar">
    </form>
    </div> 
    <br>
             <div class='ui divider'>
             
         </div>
         <?php
            include 'ver_clientes.php';
                include 'popup_altera_cliente.php';
         ?>
    </div>
</div>
