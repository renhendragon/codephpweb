<?php 
include 'ketnoi.php'; 
$ma=$_POST["MaLoai"]; 
$ten=$_POST["TenLoai"]; 
$query="UPDATE loaihang SET MaLoai='$ma',TenLoai='$ten' WHERE MaLoai=$ma";
echo $query; 
$kq = mysqli_query($connect,$query); 
echo "<script>"; 
 	if($kq){ 
 	 	echo "alert('Cập Nhật thành công');"; 
 	} 
 	else{ 
 	 	echo "alert('Cập Nhật không thành công');"; 
 	} 
 	echo "window.location='quanlybanhang.php';"; 
echo "</script>"; 

?>