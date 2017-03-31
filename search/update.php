<?php
   require_once 'config.php';
   
   $str ="Aakarshan, Aaryan, Aayush, Abha, Abhay, Abhi, Abhijit, Ajay, Akil, Alka,
   Balavan,Bhanu, Bharati, Bhavya, Chaitra, Charu,Chinmay,Chiranjeev,
   Damini,Darshan,Deepak,Deepika,Deepti,Devi,Era,Falgun,Gajendra,Gautam,Gayatri,
   Girish,Gitanjali,Gowri,Harish,Harshita,Hemlata,Indira,Iravan,Jafar,Jahnavi,Kajal,Kajol,
   Kamal,Kapil,Krisha,laksha,Lalita,Laxmi,Madhu, Muni, Madhulika, Sasi,Ayothi, Roshan, Thippi, Madhammal, Anbu, Rubu, Kalai,
   Priya,loosu, Mahi, Jagan, Dinesh, Senthil, Gokul,Ravi";

$datas = explode(",",$str);
$i= 1;
foreach($datas as $data){
	$data = trim($data);
	mysql_query("UPDATE names set human ='$data' where id = $i");
	$i++;
}
   
   
?>