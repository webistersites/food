<?php
  include 'conecta.php';

  // CLIENTES ONLINE
  //$url = file_get_contents('http://webister.com.br/clientes_webister/pde_jadson.php'); 

  // CLIENTES OFFLINE
  date_default_timezone_set('America/Sao_Paulo');
  $date = date('d/m/Y');
    $q_ult_data = mysql_query("SELECT data FROM datas_validadas where id = (select max(id) from datas_validadas)");
    $ult_data = mysql_result($q_ult_data, 0);
    if ($date == $ult_data) 
    {
      $q_cod_vigente  = mysql_query("SELECT codigo FROM codigo_offline_vigente");
        $codigo_vigente = mysql_result($q_cod_vigente, 0);
        $q_range        = mysql_query("select 
                                        codigo 
                                      from 
                                        codigos_offline 
                                      where 
                                        STR_TO_DATE('$date', '%d/%m/%Y') 
                                      BETWEEN 
                                        STR_TO_DATE(data_inicial,'%d/%m/%Y') 
                                      AND 
                                        STR_TO_DATE(data_final, '%d/%m/%Y')");
        $range          = mysql_result($q_range, 0);
        if ($codigo_vigente == $range) 
        {
          echo "Sistema validado!";
          include 'login_ativo.php';

        }
        else
        {
          echo "Sistema invalido!";
          include 'login_inativo.php';

        }
    }
    else
    {
      $q_consulta_data = mysql_query("SELECT count(data) FROM datas_validadas WHERE data = '$date'");
      $consulta_data  = mysql_result($q_consulta_data, 0);

      if ($consulta_data == 0) 
      {
        mysql_query("INSERT datas_validadas SELECT '','$date'");
        $q_cod_vigente  = mysql_query("SELECT codigo FROM codigo_offline_vigente");
        $codigo_vigente = mysql_result($q_cod_vigente, 0);
        $q_range        = mysql_query("select 
                                        codigo 
                                      from 
                                        codigos_offline 
                                      where 
                                        STR_TO_DATE('$date', '%d/%m/%Y') 
                                      BETWEEN 
                                        STR_TO_DATE(data_inicial,'%d/%m/%Y') 
                                      AND 
                                        STR_TO_DATE(data_final, '%d/%m/%Y')");
        $range          = mysql_result($q_range, 0);
        if ($codigo_vigente == $range) 
        {
          echo "Sistema validado!";
          include 'login_ativo.php';

        }
        else
        {
          echo "Sistema invalido!";
          include 'login_inativo.php';

        }
      }
      else
      {
        echo "<script>alert('Verifique a data do computador')</script>";
        echo "Verifique a data do seu computador e reinicie o sistema!";       
        exit();
      }
    }
  

  

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
<?php 
  //   if ($url == 0) 
  // {
  //   include 'login_ativo.php';
  // }
  // else
  // {
  //   include 'login_inativo.php';
  // }
 ?>


</body>

</html>
