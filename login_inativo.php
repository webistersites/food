<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui yellow image header">        
      <div class="content">
       Sistema Bloqueado
      </div>
        <img src="images/logo-sf.png" class="image">
    </h2>
    <form class="ui large form" method="post" action="valida_codigos.php">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="privacy icon"></i>
            <input type="text" name="codigo" placeholder="Codigo" autofocus="">
          </div>
        </div>
<!--         <div class="disabled field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="senha" placeholder="Senha" disabled>
          </div> -->
            <?php 
                
                if (isset($_GET['error'])) {
                    echo '<div class="ui negative mini message">
                            <div class="header">
                              Login ou Senha incorretos!
                            </div>
                            </div>';
                }
                else {
                    
                }
            
            ?>
<!--         </div> -->
        <div class="ui fluid large yellow submit button">Validar Sistema</div>
      </div>

      <div class="ui error message"></div>

    </form>

<!--     <div class="ui message">
      Esqueceu a senha? <a href="#">Resgatar</a>
    </div> -->
  </div>
</div>