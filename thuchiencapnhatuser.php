<?php 
include 'ketnoi.php'; 
$ID=$_POST["ID"];
$user=$_POST["user"]; 
$password=$_POST["password"]; 
$fullname=$_POST["fullname"]; 
$query="UPDATE user SET username='$user',password='$password',fullname='$fullname' WHERE ID='$ID'";
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