<?php 
$dbhost="localhost"; 
$username="root"; 
$password=""; 
$dbname="qlbh"; 
$connect = mysqli_connect($dbhost, $username, $password); 
mysqli_query($connect,"SET NAMES'utf8'"); 
mysqli_select_db($connect,$dbname); 
?> 