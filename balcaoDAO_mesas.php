<?php
  include 'cabecalho.php';

  $id_garcom    = $_SESSION['usuarioID'];
  $quantidade   = $_POST['quantidade'];
  $id           = $_POST['id'];
  $obs          = $_POST['obs'];
  $id_del       = $_GET['id_del'];
  $truncar      = $_GET['truncar'];
  $mesa         = $_GET['mesa'];

  if (!isset($truncar)) {
    if (!isset($id_del)) {
        $consulta=mysql_query("SELECT id,quantidade FROM pedido_mesa".$mesa." WHERE id = $id");
        if (mysql_num_rows($consulta) == 0) {
          $insere = mysql_query("INSERT pedido_mesa".$mesa." SELECT '',$id,$quantidade,'$obs',$id_garcom");
          echo 'Cadastrando...';
        } elseif (mysql_num_rows($consulta) >= 1) {
          $qtd = mysql_result($consulta) + $qtd;
          $insere = mysql_query("UPDATE pedido_mesa".$mesa." SET quantidade = $qtd WHERE id = $id");
        }
      } else {
        $deleta = mysql_query("DELETE from pedido_mesa".$mesa." WHERE id = $id_del");
        echo "Deletando...";
      }
  } else {
    $truncate = mysql_query("TRUNCATE TABLE pedido_mesa".$mesa);
    echo "Cancelando...";
    $truncate2 = mysql_query("TRUNCATE TABLE pedido_aux_mesa".$mesa);
    
    mysql_query("UPDATE tec_mesas SET estado = 'free' WHERE id = ".$mesa);
  }
  echo '<meta http-equiv="refresh" content="0.1; url=mesa'.$mesa.'.php">';
  
  ?>


