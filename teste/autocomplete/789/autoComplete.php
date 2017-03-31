<?php
include 'conecta.php';

$q = strtolower($_GET["q"]);
if (!$q) return;

$sql = "select DISTINCT code,name from sao_francisco.tec_products where name LIKE '%$q%' or code LIKE '%$q%' AND category_id < 98";
//$sql2 = "select DISTINCT id,name from clientes where id LIKE '%$q%'";
$rsd = mysql_query($sql);
//$rsd2 = mysql_query($sql2);
while($rs = mysql_fetch_array($rsd)) {
	$cname = $rs['code'] . " - " . $rs['name'];
	echo "$cname\n";
}

?>
