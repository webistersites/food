<script>
    $('.dropdown').dropdown();
</script>
<div class="cadastrar">
<div class="ui secondary pointing menu">
    <a class="item" href="#" onclick="location.reload()">
        Gerenciar
      </a>
        <a class="item active" href="#cadastrar" onclick="location.reload()">
        Cadastrar
      </a>

</div>
<div class="ui segment">
    <h2 class="ui center aligned dividing header">
            Cadastrar Funcionários
        </h2>
    <br><br>
    <?php 
        $buscar_cargo = mysql_query("SELECT * FROM cargo where id != 1");
        echo '<div class="ui center aligned grid">'
        . '<form action="cadastrar_func.php" method="post">';
        echo '<div class="ui form">
                <div class="two fields">
                  <div class="field">
                    <label>Nome</label>
                    <input placeholder="Nome" name="nome" type="text" autofocus="">
                  </div>
                  <div class="field">
                    <label>Sobrenome</label>
                    <input placeholder="Sobrenome" name="sobrenome" type="text">
                  </div>
                </div>
                <div class="two fields">
                    <div class="field">
                        <select class="ui dropdown" name="genero">
                            <option>Gênero</option>
                            <option value="boy">Masculino</option>
                            <option value="girl">Feminino</option>
                        </select>
                    </div>
                    <div class="field">
                        <select class="ui dropdown" name="cargo">
                            <option>Cargo</option>
                            ';
        while ($ver_cargo=mysql_fetch_array($buscar_cargo))
        {
            echo '<option value="'.$ver_cargo['id'].'">'.$ver_cargo['cargo'].'</option>';
        }
        echo '
                        </select>
                    </div>
                </div>
                <br>
                <h4 class="ui left aligned dividing header">
                    Informações de Login
                </h4>
                <br>
                <div class="two fields">
                  <div class="field">
                    <label>Usuário</label>
                    <input placeholder="Usuário" name="usuario" type="text">
                  </div>
                  <div class="field">
                    <label>Senha</label>
                    <input placeholder="Senha" type="password" name="senha">
                  </div>
                </div>
                <br>
                <input type="submit" class="ui submit right floated blue button" value="Cadastrar">
                <br><br><br>
              </div>'
    ;
        echo '</form></div>';
    ?>
    </div>
</div>

