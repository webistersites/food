<div class="gerenciar sumir">
<div class="ui secondary pointing green menu">
    <a class="item active" href="#">
        Gerenciar
      </a>
        <a class="item" href="#cadastrar" onclick="location.reload()">
        Cadastrar
      </a>
</div>
<div class="ui segment">
        <h2 class="ui center aligned dividing header">
            Gerenciar Funcionários
        </h2>
        <br>
<?php
    $buscar_funcionarios = mysql_query("select 
	a.id
    ,a.nome
    ,b.cargo
FROM
	usuarios a
INNER JOIN
	cargo b
ON
	a.id_cargo = b.id
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
        echo '<tr>'
                .'<td>'.$ver_func['id'].'</td>'
                .'<td>'.$ver_func['nome'].'</td>'
                .'<td>'.$ver_func['cargo'].'</td>'
                . '<td width="10%"><a href="deletar_func.php?id='.$ver_func['id'].'"><img class="ui left floated image" src="images/delete_icon.png"></a></td>'
            .'</tr>'
                ;
    }
    echo '</table>';

    
?>
    </div>
</div>
