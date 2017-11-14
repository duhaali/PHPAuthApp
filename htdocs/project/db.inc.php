<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbName = "userlogin";

$conect=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
if($conect){
	echo "secses";
}
else{
	echo "error";
}
 ?>

