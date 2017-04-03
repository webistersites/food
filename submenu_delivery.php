<div class="delivery">
<div class="ui secondary pointing menu">
    <a class="item active" href="#">
        Delivery
      </a>
        <a class="item" href="#cadastrar" onclick="location.reload()">
        Cadastrar
      </a>
        <a class="item" href="pdv_delivery.php" onclick="location.reload()">
        Caixa
      </a>
</div>
<div class="ui segment">
        <h2 class="ui center aligned dividing header">
            <i class="search icon"></i> Procurar Clientes
        </h2>
        <br>
        <div class="ui right aligned container">
        <form class="ui search" method="GET" action="">
        	<div class="ui icon input">
                    <input class="prompt" type="text" id="consulta" name="consulta" placeholder="Telefone..." maxlength="255" autofocus="">
          		<i class="search icon"></i>
          	</div>
          <!-- <input type="submit" value="Buscar" class="ui small button"> -->
        </form>
        </div>
        <div class="ui container">
        <br>
        <!--
            *** Inclui sistema de busca ***
        -->
        <?php
        	include "busca.php";
          echo "<br>";
        ?>
        </div>
    </div>
</div>
