<?php
  include 'cabecalho.php';

  $quantidade = $_POST['quantidade'];
  $id = $_POST['id'];
  $obs = $_POST['obs'];
  $id_del = $_GET['id_del'];
  $truncar = $_GET['truncar'];

  if (!isset($truncar)) {
    if (!isset($id_del)) {
        $consulta=mysql_query("SELECT id,quantidade FROM pedido_balcao WHERE id = $id");
        if (mysql_num_rows($consulta) == 0) {
          $insere = mysql_query("INSERT pedido_balcao SELECT '',$id,$quantidade,'$obs'");
          echo 'Cadastrando...';
        } elseif (mysql_num_rows($consulta) >= 1) {
          $qtd = mysql_result($consulta) + $qtd;
          $insere = mysql_query("UPDATE pedido_balcao SET quantidade = $qtd WHERE id = $id");
        }
      } else {
        $deleta = mysql_query("DELETE from pedido_balcao WHERE id = $id_del");
        echo "Deletando...";
      }
  } else {
    $truncate = mysql_query("TRUNCATE TABLE pedido_balcao");
    mysql_query("TRUNCATE TABLE cpf_nota");
    echo "Cancelando...";
  }
 ?>

<meta http-equiv="refresh" content="0.1; url=pdv.php">
