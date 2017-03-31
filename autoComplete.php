<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="sao_francisco"; // Database name


	$con = mysql_connect($host,$username,$password)   or die(mysql_error());
	mysql_select_db($db_name, $con)  or die(mysql_error());

$q = strtolower($_GET["q"]);
if (!$q) return;

$sql = "select DISTINCT code,name from tec_products where name LIKE '%$q%' or code LIKE '%$q%'";
//$sql2 = "select DISTINCT id,name from clientes where id LIKE '%$q%'";
$rsd = mysql_query($sql);
//$rsd2 = mysql_query($sql2);
while($rs = mysql_fetch_array($rsd)) {
	$cname = $rs['code'] . " - " . $rs['name'];
	echo "$cname\n";
}

?>
