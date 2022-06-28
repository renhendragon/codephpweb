<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Bán Hàng</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<?php 
include 'ketnoi.php'; 

if(isset($_POST["login"])){
    include 'xulydangnhap.php';
}




?> 
    <div class="container">
        <div class="col-md-2">
        <div class="panel panel-primary">
  <div class="panel-heading">Quản Lý Hệ Thống</div>
  <div class="panel-body">
            <ul>
                <li><a href="?t=header">Quản Lý Header</a></li>
                <li><a href="?t=sp">Quản Lý Sản Phẩm</a></li>
                <li><a href="?t=user">Quản Lý Users</a></li>
                <li><a href="?t=loaihang">Quản Lý Loại Hàng</a></li>
                <li><a href="?t=ddh">Quản Lý Đơn Đặt Hàng</a></li>
            </ul>
  </div>
</div>
        </div>
        <div class="col-md-8">
        <?php
        if(isset( $_GET['t'])){
            $x=  $_GET['t'];
            
        }
        else  $x="";
         if($x=='header'){
             
             include ('quanliheader.php'); 
             
         }
         else if($x=='sp'){
            include ('quanlysanpham.php');
        }
         else if($x=='loaihang'){
            include ('quanlyloaihang.php');
        }
        else if($x=='user'){
            include ('quanlyuser.php');
        }
        else if($x=='ddh'){
            include ('quanlyddh.php');
        }
         else{
            echo '<div class="container">';
            echo '<div class="row">';
            echo '<h2>Trang Quản Trị</h2>';
            echo '<h1>HỆ THỐNG QUẢN TRỊ TRANG BÁN HÀNG</h1>';
            echo '</div>';
            echo '</div>';
            echo '';
        }  
        ?>
        </div>
        <div class="col-md-2">
        <?php
        $query="select * from user "; 
        $kq = mysqli_query($connect,$query);  
        $row=mysqli_fetch_array($kq);
echo '<div class="dropdown">';
echo '<button class="btn  btn-danger dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">';
echo "Xin Chào $row[fullname]";
echo '</button>';
echo '<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">';
echo '<li><a class="dropdown-item" href="login.html">Đăng Xuất</a></li>';
echo '</ul>';
echo '</div>';
?>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>
<style>
.panel-heading{
    font-size:18px;
}
li{
    color: blue;
}
a{
    padding: 5%;
    font-size:15px;
    text-decoration:none;
    color: white;
}
.panel{
   background-color:black;
}
.row{
    align-items: center;
    margin-top:10%;
}
h2{
    color: red
    ;
}
h1{
    color:blue;
}
h1,h2{
    text-align:center;
}
</style>