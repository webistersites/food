<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui yellow image header">        
      <div class="content">
       Efetuar Login
      </div>
        <img src="images/logo-sf.png" class="image">
    </h2>
    <form class="ui large form" method="post" action="valida.php">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="usuario" placeholder="Usuario" autofocus="">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="senha" placeholder="Senha">
          </div>
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
        </div>
        <div class="ui fluid large yellow submit button">Login</div>
      </div>

      <div class="ui error message"></div>

    </form>

    <div class="ui message">
      Esqueceu a senha? <a href="#">Resgatar</a>
    </div>
  </div>
</div>