<?php 
include 'ketnoi.php'; 
$ma=$_GET["ma"]; 
$query="delete from user where ID ='$ma'"; 
$kq = mysqli_query($connect,$query); 
echo "<script>"; 
 	if($kq){ 
 	 	echo "alert('Xóa thành công');"; 
 	} 
 	else{ 
 	 	echo "alert('Xóa không thành công');"; 
 	} 
 	echo "window.location='quanlybanhang.php';"; 
echo "</script>"; 
?> 
