
<?php
$user = "root";
$pass = "";
$host = "localhost";
$base = "sao_francisco";
mysql_connect($host, $user, $pass);
mysql_select_db($base);

//$nome     = $_POST['nome'];
//$email    = $_POST['email'];
//$telefone = $_POST['telefone'];
$pesquisa    = $_POST['course'];

$consulta = mysql_query("SELECT id FROM tec_products WHERE CONCAT(CODE, ' - ',NAME) = '$pesquisa'");
$id = mysql_result($consulta,0);

$verifica_duplicidade = mysql_query("SELECT id_produto FROM pedido_balcao WHERE id_produto = $id");
    
    if (mysql_num_rows($verifica_duplicidade) <= 0 ) 
    {
        mysql_query("INSERT INTO pedido_balcao SELECT '',$id,1,''");
        $return = "carregando...";
    }
    else
    {   $adicionar = mysql_query("SELECT quantidade+1 FROM pedido_balcao WHERE id_produto = $id");
        $sql = mysql_query("UPDATE pedido_balcao SET quantidade = ".mysql_result($adicionar,0)." where id_produto = $id");
        $return = "carregando...";
    }

echo $return;

?>
