<?php 
include 'ketnoi.php'; 
$user=$_POST["user"]; 
$password=$_POST["password"];  
$query="select * from user where username='$user' and password='$password'"; 
$kq = mysqli_query($connect,$query);  
$kq = mysqli_query($connect,$query);
$row=mysqli_fetch_array($kq);
echo "<script>"; 
if(mysqli_num_rows($kq) > 0 ){
    echo "alert('Đăng Nhập Thành Công');"; 
    // echo "window.location='quanlybanhang.php';"; 
}
if(mysqli_num_rows($kq) == 0 ){
    echo "alert('Đăng Nhập không thành công');"; 
    echo "window.location='login.html';"; 
}
echo "</script>"; 
?> 