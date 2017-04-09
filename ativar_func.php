<?php
include 'cabecalho.php';

$id = $_GET['id'];

mysql_query("UPDATE usuarios SET ativo = 1 WHERE id = $id");

?>

<script>
    window.location.replace("funcionarios.php");
    </script>