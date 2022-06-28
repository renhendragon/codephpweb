<?php 
include 'ketnoi.php'; 
$ma=$_GET["ma"]; 
$query="UPDATE dondathang SET tinhtrang=1 WHERE ID=$ma";
echo $query; 
$kq = mysqli_query($connect,$query); 
echo "<script>"; 
 	if($kq){ 
 	 	echo "alert('Xác nhận thành công');"; 
 	} 
 	else{ 
 	 	echo "alert('Xác nhận không thành công');"; 
 	} 
 	echo "window.location='quanlybanhang.php';"; 
echo "</script>"; 

?>