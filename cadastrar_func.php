<?php
include 'cabecalho.php';


$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$nomecomp = $nome . " " . $sobrenome;
$avatar_gen = "images/" . $_POST['genero'] . ".png";
$cargo = $_POST['cargo'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];


$cadastra_func = mysql_query("INSERT usuarios SELECT '','$nomecomp','$usuario','$senha','$avatar_gen',$cargo");

?>
<script>
    window.location.replace("http://localhost/sao_francisco/funcionarios.php#gerenciar");
</script>