<?php
    include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
    protegePagina(); // Chama a função que protege a página
?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <title>PIZZARIA SÃO FRANCISCO | SISTEMA DE VENDAS</title>
  <!--- Favicon -->

  <!--  IDENTIFICAR QUANTAS BARRAS EXISTEM NA URL -->

  <?php

    $url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; // resgata o valor da URL
    $barras = substr_count($url, '/'); // Retorna a qtd de barras '/'

    if ($barras == 4) {
      // Caso sejam 4 barras, descer 2 níveis no 'src' para o diretório RAÍZ
      echo "<link rel='icon' href='_img/icon.png'/>";
    } else {
        // Caso seja 0, não descer níveis. já está em raíz
        echo "<link rel='icon' href='_img/icon.png' />";
    }

  ?>

  <!--  ** FIM **  -->

  <!--- Site CSS -->
  <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/semantic.css">
  <!-- <link rel="stylesheet" type="text/css" href="bower_components/_materialize/dist/css/semantic.css"> -->
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
  <script type="text/javascript" language="javascript" src="js/ajaxpost.js"></script>

  <!--- Component JS -->
  <script type="text/javascript" src="bower_components/semantic/dist/components/transition.js"></script>
  <script type="text/javascript" src="bower_components/semantic/dist/components/dropdown.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
  <script type="text/javascript" src="func.js"></script>
   <script type="text/javascript" src="func2.js"></script>
  <script type="text/javascript" src="func3.js"></script>
  <script TYPE=”text/javascript”>
    function submitenter(myfield,e)
    {
    var keycode;
    if (window.event) keycode = window.event.keyCode;
    else if (e) keycode = e.which;
    else return true;

    if (keycode == 13)
    {
    myfield.form.submit();
    return false;
    }
    else
    return true;
    }

</script>

  <!--- Example Javascript -->

</head>
<body>

<div class="ui inverted green menu">

    <div class='header item'><img src='images/logo-sf.png'> </div>

<!-- ****************** Início de Menu ******************** -->
  <a href="index.php" id="dash" class="item"><i class="dashboard icon"></i>Painel</a>
  <a href="pdv.php" id="pdv" class="item"><i class="shopping basket icon"></i>Caixa</a>
  <a href="mesas.php" id="salao" class="item"><i class="food icon"></i>Mesas</a>
  <a href="delivery.php" id="delivery" class="item"><i class="home icon"></i>Delivery</a>
  <a href="financeiro.php" id="financeiro" class="item"><i class="money icon"></i>Pedidos</a>
  <a href="funcionarios.php" id="func" class="item"><i class="users icon"></i>Funcionários</a>
  <a href="configuracoes.php" id="config" class="item"><i class="settings icon"></i>Motoboys</a>
  <a href="ver_fechamento.php" id="fech" class="item"><i class="money icon"></i>Fechamento</a>
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

      <?php
        $notificacao_delivery = mysql_query("SELECT count(id) FROM vendas_suspensas WHERE tipo != 'balcao'");
        $notificacao_balcao = mysql_query("SELECT count(id) FROM vendas_suspensas WHERE tipo = 'balcao'");
        
        
        if (mysql_result($notificacao_delivery,0) > 0) 
            {
                $lista_suspensa = mysql_query("SELECT
                                                    a.id_suspensao
                                                    ,b.id
                                                    ,b.name
                                                    ,b.endereco
                                                    ,a.total
                                                FROM
                                                        vendas_suspensas a
                                                INNER JOIN
                                                        clientes b
                                                ON 
                                                        a.tipo = b.id
                                                WHERE
                                                        tipo != 'balcao'");
                $qtd_notificacoes = mysql_result($notificacao_delivery,0);
                echo '<div class="ui simple dropdown item">
                        <i class="home large icon"></i>
                        <div class="ui tiny black left pointing label">'.$qtd_notificacoes.'</div>
                        <div class="menu">';
                while ($lista=mysql_fetch_array($lista_suspensa))
                {
                echo '
                            <a class="item" href="resgata_suspensos.php?id_cliente='.$lista['id'].'&origem=delivery&nf='.$lista['id_suspensao'].'">
                                <h4 class="ui left aligned header">
                                    <div class="content">
                                        '.$lista['name'].'
                                            <div class="sub header">
                                                '.$lista['endereco'].'
                                            </div>
                                            <div class="sub header">
                                                Total: R$ '.$lista['total'].'
                                            </div>
                                    </div>
                                </h4>
                            </a>
                            <div class="divider"></div>';
                }
                echo '
                        <a href="ver_suspensos.php" class="item"><h5 class="ui center aligned header">ver todos</h5></a>
                        </div>
                        </div>';
            }
            else
            {
                
            }
            if (mysql_result($notificacao_balcao,0) > 0) 
            {
                $lista_suspensa = mysql_query("SELECT id_suspensao,total FROM vendas_suspensas WHERE tipo = 'balcao'");
                $qtd_notificacoes2 = mysql_result($notificacao_balcao,0);
                echo '<div class="ui simple dropdown item">
                        <i class="shopping basket icon"></i>
                        <div class="ui tiny black left pointing label">'.$qtd_notificacoes2.'</div>
                        <div class="menu">';
                while ($lista=mysql_fetch_array($lista_suspensa))
                {
                echo '
                            <a class="item" href="resgata_suspensos.php?origem=balcao&nf='.$lista['id_suspensao'].'">
                                <h4 class="ui left aligned header">
                                    <div class="content">
                                        '.$lista['id_suspensao'].'
                                            <div class="sub header">
                                                Total: R$ '.$lista['total'].'
                                            </div>
                                    </div>
                                </h4>
                            </a>
                            <div class="divider"></div>';
                }
                echo '
                        <a href="ver_suspensos.php" class="item"><h5 class="ui center aligned header">ver todos</h5></a>
                        </div>
                        </div>';
            }
            else
            {
                
            }
      ?>
      
      <div class="item">
          <?php
          $user = $_SESSION['usuarioLogin'];
          $sql = "SELECT * FROM usuarios WHERE usuario = '".$user."'";
          $consulta = mysqli_query($_SG['link'], $sql);
          $avatar = mysqli_fetch_array($consulta);

          // IDENTIFICAR NIVEL DE URL
          if ($barras == 4) {
            // 4 barras - Descer 2 níveis no 'src' para o diretório RAÍZ.
            echo '<img class="ui avatar image" src="../../'.$avatar['avatar'].'"> ';
          } else {
              // 0 barras - Não descer níveis.
              echo '<img class="ui avatar image" src="'.$avatar['avatar'].'"> ';
          }
          // FIM

          echo '&nbsp;&nbsp;<span>'.utf8_encode($_SESSION['usuarioNome']).'</span>';
          ?>
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
