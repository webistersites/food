<div class="cadastrar_item sumir">
<div class="ui secondary pointing menu">
    <a class="item" href="#" onclick="location.reload()">
        Caixa
      </a>
        <a class="item active" href="#cadastrar_item">
        Produtos
      </a>

</div>
<div class="ui segment">
        <h2 class="ui center aligned dividing header">
            Cadastrar Produto
        </h2>
         <br><br>
    <?php 
        $buscar_categoria = mysql_query("SELECT * FROM categorias");
        echo '<div class="ui center aligned grid">'
        . '<form action="cadastrar_item.php" method="post">';
        echo '<div class="ui form">
                <div class="two fields">
                  <div class="field">
                    <label>Produto</label>
                    <input placeholder="Produto" name="produto" type="text" autofocus="">
                  </div>
                  <div class="field">
                    <label>Preço</label>
                    <input placeholder="Preço" name="valor" type="text">
                  </div>
                </div>
                    <div class="two fields">
                    <div class="field">
                        <input placeholder="Código" name="code" type="text">
                    </div>
                    <div class="field">
                        <select class="ui dropdown" name="categoria">
                            <option>Categoria</option>
                            ';
        while ($ver_categoria=mysql_fetch_array($buscar_categoria))
        {
            echo '<option value="'.$ver_categoria['id'].'">'.$ver_categoria['categoria'].'</option>';
        }
        echo '
                        </select>
                    </div>
                    </div>
                <br>
                <input type="submit" class="ui submit right floated blue button" value="Cadastrar">
                <br><br><br>
              </div>'
    ;
        echo '</form></div>';
        
    ?>
         <div class='ui divider'>
             
         </div>
         <?php
            include 'ver_produtos.php';
         ?>
    </div>
</div>
