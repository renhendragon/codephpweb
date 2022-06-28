<?php 
include 'ketnoi.php'; 
$ma=$_POST["mahang"]; 
$diachi=$_POST["diachi"]; 
$sdt=$_POST["sdt"]; 
$ten=$_POST["ten"]; 
$query="insert into dondathang(ID,MaHang, diachi,tennguoinhan,sdt) values('',$ma, 
'$diachi','$sdt',$ten)" ;
echo $query; 
$kq = mysqli_query($connect,$query); 
echo "<script>"; 
 	if($kq){ 
 	 	echo "alert('Đặt hàng thành công');"; 
 	} 
 	else{ 
 	 	echo "alert('Đặt hàng  không thành công');"; 
 	} 
 	echo "window.location='index.php';"; 
echo "</script>"; 
?> 