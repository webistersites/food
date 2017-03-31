<?php
include 'cabecalho.php';

$id = $_GET['id'];

mysql_query("DELETE FROM usuarios WHERE id = $id");

?>

<script>
    window.location.replace("http://localhost/sao_francisco/funcionarios.php#gerenciar");
    </script>