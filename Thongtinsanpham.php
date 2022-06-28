<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thông tin sản phẩm</title>
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="css1.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<?php
include('header.php');
include ('ketnoi.php'); 
$Mahang=$_GET["mahang"];
$query="select * from sanpham where MaHang='$Mahang'"; 
$kq = mysqli_query($connect,$query);
?>
    <!-- san pham -->
    <div class="sanpham-full">
    <div class="container">
      <div class="row">
      <?php

while($row= mysqli_fetch_array($kq)){
 include('inthongtinsanpham.php');
}
?>
      </div>
    </div>
    </div>
    <?php
include('footer.php');

?>
</body>
<!-- JavaScript Bundle with Popper -->
<script>
      var large_img = document.getElementById("large_img");
      var small_img = document.getElementsByClassName("small_img");
      for(let i = 0; i<small_img.length; i++) {
        small_img[i].onclick = function(){
         large_img.src = small_img[i].src
      }
      }
     
     
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>