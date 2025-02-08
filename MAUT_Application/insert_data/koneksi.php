<?php

$host="localhost";
$user="root";
$password="";
$db="crud";

$kon = mysqli_connect($host,$user,$password);
if ($kon){

}else {

}

$hasil=mysqli_select_db($kon,$db);
if ($hasil){
//	echo "Database $db berhasil dipilih";
}else {
//	echo "Database $db gagal dipilih";
}



?>