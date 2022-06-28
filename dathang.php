<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>Trang Đặt Hàng</title> 
<link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css1.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head> <?php 
 
?> 
<body> 
<?php
include 'header.php';
?>
<div class="container"> 
	 	<div class="row"> 
	 	 	<div class="col-md-6"> 
                 <?php
                  include 'ketnoi.php';
                  $ma=$_GET["mahang"]; 
                  $query="select * from sanpham Where MaHang='$ma'"; 
                  $kq= mysqli_query($connect,$query);  
                  $row=mysqli_fetch_array($kq);
 echo "<img class=\"img\" src=\"Img/$row[Hinh]\" alt=\"\" id=\"large_img\">";
?>
 </div> 
 <div class="col-md 6">
	 	 	 	<h1>Form Đặt hàng</h1> 
	 	 	 	<form role="form" method="post"  enctype= multipart/form-data action="xulydondathang.php">  
                   <div class="form-group"> 
                      <input type="text" class="form-control a" id="mahang" name="mahang" placeholder="Nhập Địa Chỉ" value="<?php echo $row['MaLoai'];?>">
                   </div> 
                   <div class="form-group"> 
                      <label for="exampleInputEmail1">Vui Lòng Nhập Địa Chỉ</label> 
                      <input type="text" class="form-control" id="diachi" name="diachi" placeholder="Nhập Địa Chỉ">
                   </div> 
	 	 	 	  <div class="form-group"> 
	 	 	 	 	<label for="exampleInputPassword1">Số Điện Thoai</label> 
 	 	 	 	<input type="text" class="form-control" id="sdt" name="sdt" placeholder="Nhập số điện thoại"> 
	 	 	 	  </div> 
	 	 	 	  <div class="form-group"> 
	 	 	 	 	<label for="exampleInputPassword1">Tên Người nhận</label> 
 	 	 	 	<input type="text" class="form-control" id="ten" name="ten" placeholder="Nhập tên người nhận"> 
	 	 	 	  </div> 
					 <br /> 
 	 	 	  <button type="submit" class="btn btn-primary">Đặt Hàng Ngay</button> 
 	 	 	</form> 
 	 	</div> 
 	</div> 
 
                 <?php
  echo '<div class="col-md-6">';
  echo "<h4>$row[TenHang]</h4>";
  echo "<p class=\"gia\">Giá: <del>$row[GiaCu]</del> $row[Giamoi]</p>";
?>
 </div> 

</div> 
</body> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html> 

<style>
.a{
    display: none;
}
</style>