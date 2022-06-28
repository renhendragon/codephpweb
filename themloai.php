<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>Trang thêm sản phẩm</title> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head> <?php 
include 'ketnoi.php'; 
$query="select * from loaihang"; 
$kq = mysqli_query($connect,$query); 

?> 
<body> 
<div class="container"> 
	 	<div class="row"> 
	 	 	<div class="col-md-12"> 
	 	 	 	<h1>TRANG THÊM LOẠI SẢN PHẨM</h1> 
	 	 	 	<form role="form" method="post"  enctype= multipart/form-data action="thuchienthemloai.php">  
	 	 	 	  <div class="form-group"> 
	 	 	 	 	<label for="exampleInputPassword1">Mã Loại</label> 
 	 	 	 	<input type="text" class="form-control" id="MaLoai" name="MaLoai" placeholder="Nhập mã Loại"> 
	 	 	 	  </div> 
	 	 	 	  <div class="form-group"> 
	 	 	 	 	<label for="exampleInputPassword1">Tên Loại</label> 
 	 	 	 	<input type="text" class="form-control" id="TenLoai" name="TenLoai" placeholder="Nhập Tên Loại"> 
	 	 	 	  </div> 	
					 <br /> 
 	 	 	  <button type="submit" class="btn btn-primary">Thực hiện thêm</button> 
 	 	 	</form> 
 	 	</div> 
 	</div> 
</div> 
</body> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html> 

