<div class="gerenciar">
<div class="ui secondary pointing menu">
    <a class="item" href="config.php">
        Produtos
      </a>
        <a class="item" href="clientes.php">
        Clientes
      </a>
        <a class="item active" href="#">
        Funcionários
      </a>
</div>
<div class="ui segment">
        <h2 class="ui center aligned dividing header">
            Gerenciar Funcionários
        </h2>
        <br>
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
    <div class="ui divider"></div>
<?php
    $buscar_funcionarios = mysql_query("select 
	a.id
    ,a.nome
    ,b.cargo
    ,a.ativo
FROM
	usuarios a
INNER JOIN
	cargo b
ON
	a.id_cargo = b.id
WHERE
    a.id not in (1,16)
ORDER BY
        a.id 
;");
    
    echo '<table class="ui celled table">'
            .'<thead>'
                .'<th>ID</th>'
                .'<th>Nome</th>'
                .'<th>Cargo</th>'
                . '<th>Ações</th>'
            . '</thead>'
    ;
    while($ver_func = mysql_fetch_array($buscar_funcionarios))
    {
        
        if ($ver_func['ativo'] == 0) 
        {
            echo '<tr>'
                .'<td class="disabled">'.$ver_func['id'].'</td>'
                .'<td class="disabled">'.$ver_func['nome'].'</td>'
                .'<td class="disabled">'.$ver_func['cargo'].'</td>'
                . '<td width="10%"><a href="ativar_func.php?id='.$ver_func['id'].'"><img class="ui left floated image" src="images/ok-icon-md.png"></a></td>'
            .'</tr>'
                ;
        } else
        {
        echo '<tr>'
                .'<td>'.$ver_func['id'].'</td>'
                .'<td>'.$ver_func['nome'].'</td>'
                .'<td>'.$ver_func['cargo'].'</td>'
                . '<td width="10%"><a href="deletar_func.php?id='.$ver_func['id'].'"><img class="ui left floated image" src="images/delete_icon.png"></a></td>'
            .'</tr>'
                ;
        }
    }
    echo '</table>';

    
?>
    </div>
</div>
