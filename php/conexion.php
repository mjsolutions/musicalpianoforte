<?php

$host="67.227.144.24";
$user="pianosen_admin";
$pw="1q2w3e4r5t";
$db="pianosen_mp";
$con = mysqli_connect($host,$user,$pw,$db);
if($con){
	echo mysqli_error($con);
}

/*
$host="localhost";
$user="root";
$pw="";
$db="pianosen_mp";
$con = mysqli_connect($host,$user,$pw,$db);
if($con){
	echo mysqli_error($con);
}
*/
 ?>