<?php 
include 'ketnoi.php'; 
// $id='';
$user=$_POST["user"]; 
$password=$_POST["password"]; 
$name=$_POST["name"]; 
$query="select * from user"; 
$kq = mysqli_query($connect,$query); 
$b=1;
while($row= mysqli_fetch_array($kq)){
    if("$user"== $row["username"]){
        echo "<script>"; 
        echo "alert('Đăng ký không thành công:Tên đăng nhập đã có người sử dụng');";  
        $b=0;
        echo "window.location='dangky.html';";
        echo "</script>"; 
    } 
}
if($b!=0){
    $query="insert into user(ID,username, password,fullname) values('','$user', 
    '$password','$name')";
    echo $query; 
    $kq = mysqli_query($connect,$query); 
    echo "<script>"; 
         if($kq){ 
              echo "alert('Đăng Ký thành công');"; 
            echo "window.location='quanlybanhang.php';"; 
         } 
         else{ 
              echo "alert('Đăng Ký thành công');"; 
         echo "window.location='dangky.html';"; 
         } 
         echo "</script>";  
}
   
?> 