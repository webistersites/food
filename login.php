<?php

?>
<link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/semantic.css">

<!--<form method="post" action="valida.php">
  <label>Usuário</label>
  <input type="text" name="usuario" maxlength="50" />

  <label>Senha</label>
  <input type="password" name="senha" maxlength="50" />

  <input type="submit" value="Entrar" />
</form>-->

<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- favicon -->
  <link rel='icon' href='_img/icon.png' />

  <!-- Site Properties -->
  <title>Login - Webister Food</title>
  <link rel="icon" href="_img/icon.png" />
  <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/components/reset.css">
  <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/components/site.css">

  <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/components/container.css">
  <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/components/grid.css">
  <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/components/header.css">
  <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/components/image.css">
  <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/components/menu.css">

  <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/components/divider.css">
  <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/components/segment.css">
  <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/components/form.css">
  <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/components/input.css">
  <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/components/button.css">
  <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/components/list.css">
  <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/components/message.css">
  <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/components/icon.css">

  <script src="bower_components/semantic/examples/assets/library/jquery.min.js"></script>
  <script src="bower_components/semantic/dist/components/form.js"></script>
  <script src="bower_components/semantic/dist/components/transition.js"></script>

  <style type="text/css">
    body {
      background: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url(_img/eat-1237431_1280.jpg) no-repeat center;
      /*background-color: #c1c1c1;*/
      /*background-image: url(images/background2.jpg);*/
      background-size: 100%;
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
  </style>
  <script>
  $(document)
    .ready(function() {
      $('.ui.form')
        .form({
          fields: {
            email: {
              identifier  : 'usuario',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Por favor digite seu usuario'
                },
                {
                  type   : 'empty',
                  prompt : 'Entre com um nome válido'
                }
              ]
            },
            password: {
              identifier  : 'senha',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Por favor digite sua senha'
                }
              ]
            }
          }
        })
      ;
    })
  ;
  </script>
</head>
<body>

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

</body>

</html>
