<?php 
include 'ketnoi.php'; 
$ma=$_POST["MaLoai"]; 
$ten=$_POST["TenLoai"]; 
$query="insert into loaihang(MaLoai, TenLoai) values($ma, 
'$ten')" ;
echo $query; 
$kq = mysqli_query($connect,$query); 
echo "<script>"; 
 	if($kq){ 
 	 	echo "alert('Thêm thành công');"; 
 	} 
 	else{ 
 	 	echo "alert('Thêm không thành công');"; 
 	} 
 	echo "window.location='quanlybanhang.php';"; 
echo "</script>"; 
?> 