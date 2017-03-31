<?php
    //include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
    //protegePagina(); // Chama a função que protege a página
?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <title>Ponto da Esfiha | Sistema</title>
  <!--- Favicon -->

  <!--  IDENTIFICAR QUANTAS BARRAS EXISTEM NA URL -->

  <?php

    $url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; // resgata o valor da URL
    $barras = substr_count($url, '/'); // Retorna a qtd de barras '/'

    if ($barras == 4) {
      // Caso sejam 4 barras, descer 2 níveis no 'src' para o diretório RAÍZ
      echo "<link rel='icon' href='../../_img/icone.png' />";
    } else {
        // Caso seja 0, não descer níveis. já está em raíz
        echo "<link rel='icon' href='_img/icone.png' />";
    }

  ?>

  <!--  ** FIM **  -->

  <!--- Site CSS -->
  <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/semantic.css">
  <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/components/reset.css">
  <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/components/site.css">
  <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/components/grid.css">
  <link rel="stylesheet" type="text/css" href="estilo.css">

  <!--- Component CSS -->
  <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/components/menu.css">
  <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/components/input.css">
  <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/components/dropdown.css">
  <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/components/icon.css">
  <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/components/button.css">
  <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/components/transition.css">

  <!--- Example Libs -->
  <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/components/popup.css">
  <script src="bower_components/semantic/examples/assets/library/jquery.min.js"></script>
<!--  <script src="bower_components/semantic/examples/assets/library/iframe-content.js"></script>-->
<!--  <script src="bower_components/semantic/examples/assets/show-examples.js"></script>-->
  <script type="text/javascript" src="bower_components/semantic/dist/components/popup.js"></script>

  <!--- Component JS -->
  <script type="text/javascript" src="bower_components/semantic/dist/components/transition.js"></script>
  <script type="text/javascript" src="bower_components/semantic/dist/components/dropdown.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
  <script type="text/javascript" src="func.js"></script>
  <script type="text/javascript" src="func2.js"></script>


  <!--- Example Javascript -->

</head>
<body>

<div class="ui inverted red menu">

  <!--  IDENTIFICAR QUANTAS BARRAS EXISTEM NA URL -->

  <?php

    $url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; // resgata o valor da URL
    $barras = substr_count($url, '/'); // Retorna a qtd de barras '/'

    if ($barras == 4) {
      // Caso sejam 4 barras, descer 2 níveis no 'src' para o diretório RAÍZ
      echo "<div class='header item'><img src='../../images/logo_pde.png'></div>";
    } else {
        // Caso seja 0, não descer níveis. já está em raíz
        echo "<div class='header item'><img src='images/logo_pde.png'> </div>";
    }

  ?>

  <!--  ** FIM **  -->

<!-- ****************** Início de Menu ******************** -->
  <a href="http://localhost/pde/index.php" id="dash" class="item"><i class="dashboard icon"></i>Painel</a>
  <a href="pdv.php" id="pdv" class="item"><i class="shopping basket icon"></i>Caixa</a>
  <a href="mesas.php" id="salao" class="item"><i class="food icon"></i>Mesas</a>
  <a href="delivery.php" id="delivery" class="item"><i class="home icon"></i>Delivery</a>
  <a href="#" class="item"><i class="money icon"></i>Financeiro</a>
  <a href="funcionarios.php" id="func" class="item"><i class="users icon"></i>Funcionários</a>
  <a href="configuracoes.php" id="config" class="item"><i class="settings icon"></i>Configurações</a>
<!--  <a class="teal item">Alterar</a>-->
<!--  <div class="ui dropdown item">
    Dropdown
    <i class="dropdown icon"></i>
    <div class="menu">
      <div class="item">Action</div>
      <div class="item">Another Action</div>
      <div class="item">Something else here</div>
      <div class="divider"></div>
      <div class="item">Separated Link</div>
      <div class="divider"></div>
      <div class="item">One more separated link</div>
    </div>
  </div>-->
  <div class="right menu">

      
      
      <div class="item">

      </div>
<!--    <div class="item">
      <div class="ui action left icon input">
        <i class="search icon"></i>
        <input type="text" placeholder="Pesquisar">
        <button class="ui inverted basic button">Buscar</button>
      </div>
    </div>-->
        <a class="item" href="logout.php"><i class="sign out icon"></i>Logout</a>
  </div>
</div>
