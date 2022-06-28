<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Mục Sản Phẩm</title>
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<?php 

?> 
<body>
<!-- headder -->
<html>
<?php
include('header.php');
?>
<!-- san pham -->
<div class="sanpham-full">
<?php
$ma=$_GET["maloai"]; 
$query="select * from loaihang where MaLoai=$ma";  
$kq = mysqli_query($connect,$query); 
$row= mysqli_fetch_array($kq);
echo "<h1 class=\"text\">Sản Phẩm $row[TenLoai]</h1>";
?>
<div class="sanpham-full">
<div class="container sanpham">
<div class="row">

<?php
include 'ketnoi.php'; 
$ma=$_GET["maloai"]; 
$query="select * from sanpham where MaLoai=$ma";  
$kq = mysqli_query($connect,$query); 
// $row1= mysqli_fetch_array($kq);
while($row= mysqli_fetch_array($kq)){
    include('insanpham.php');
}
?>
</div>
</div>
</div>
</div>
<!-- footer -->
<?php
include('footer.php');

?>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>
<!-- <style>
  .sanpham-full{
    background-color: pink;
    width: 100%;
    /* border:1px solid red; */
  }
</style> -->