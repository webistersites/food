<?php
	date_default_timezone_set('America/Sao_Paulo');
	/*$date = date('Ymd');
	system('mysqldump -h chocolateria.mysql.dbaas.com.br -u chocolateria --all-data --database chocolateria > backup'.$date.'.sql -pejwkh24$');
	*/

    $toDay = date('dmY');

    $dbhost =   "localhost";
    $dbuser =   "root";
    $dbpass =   "";
    $dbname =   "pde";

    exec("mysqldump --user=$dbuser --password='$dbpass' --host=$dbhost $dbname > ".$toDay."_BKP.sql");

?>

<script>
    window.location.replace("http://localhost/pde/configuracoes.php");
</script>