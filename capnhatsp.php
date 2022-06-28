<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>Trang thêm sản phẩm</title> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head> <?php 
   include 'ketnoi.php';
   $ma=$_GET["ma"]; 
   $query="select* from sanpham Where MaHang='$ma'"; 
   $kq= mysqli_query($connect,$query);  
   $row=mysqli_fetch_array($kq);
?> 

<body> 
<div class="container"> 
	 	<div class="row"> 
	 	 	<div class="col-md-12"> 
	 	 	 	<h1>TRANG THÊM SẢN PHẨM</h1> 
	 	 	 	<form role="form" method="post"  enctype= multipart/form-data action="thuchiencapnhatsp.php">  
	 	 	 	  <div class="form-group"> 
	 	 	 	 	<label for="exampleInputEmail1">Mã Hàng</label> 
 	 	 	 	<input type="text" class="form-control" id="MaHang" name="MaHang" placeholder="Nhập mã Hàng"value="<?php echo $row['MaHang'];?>"> 
	 	 	 	  </div> 
	 	 	 	  <div class="form-group"> 
	 	 	 	 	<label for="exampleInputPassword1">Tên Hàng</label> 
 	 	 	 	<input type="text" class="form-control" id="TenHang" name="TenHang" placeholder="Nhập Tên Hàng"value="<?php echo $row['TenHang'];?>"> 
	 	 	 	  </div> 	
	 	 	 	  <div class="form-group"> 
	 	 	 	 	<label for="exampleInputPassword1">Hình</label> 
 	 	 	 	<input type="file" class="form-control" id="Hinh" name="Hinh" placeholder="Nhập Hình"value="<?php echo $row['Hinh'];?>"> 
	 	 	 	  </div> 
				<div class="form-group"> 
				<label for="exampleInputPassword1">Giá Cũ</label> 
				<input type="text" class="form-control" id="GiaCu" name="GiaCu" placeholder="Nhập Giá Cũ"value="<?php echo $row['GiaCu'];?>"> 
				</div> 
				<div class="form-group"> 
				<label for="exampleInputPassword1">Giá Mới</label> 
				<input type="text" class="form-control" id="GiaMoi" name="GiaMoi" placeholder="Nhập Giá Mới"value="<?php echo $row['Giamoi'];?>"> 
				</div> 
	 	 	 	  <label for="exampleInputPassword1">Mã Loại</label> 
 	 	 	  <select class="form-control" id="MaLoai" name="MaLoai">
	 	 	 	   	<?php 
                          $query="select * from loaihang"; 
                          $kq = mysqli_query($connect,$query); 
	 	 	 	   	 	while($row=mysqli_fetch_array($kq)){ 
	 	 	 	 	 	 	echo "<option 
value=\"".$row["MaLoai"]."\""; 
	 	 	 	 	 	 	echo ">".$row["MaLoai"]." - 
".$row["TenLoai"]." </option>"; 
	 	 	 	 	 	} 
 	 	 	 	?> 
 	 	 	  </select> 
				 <div class="form-group"> 
	 	 	 	 	<label for="exampleInputPassword1">Hình Phụ 1</label> 
 	 	 	 	<input type="file" class="form-control" id="hinhphu1" name="hinhphu1" placeholder="Nhập Hình"value="<?php echo $row['hinhphu1'];?>"> 
	 	 	 	  </div> 
					 <div class="form-group"> 
	 	 	 	 	<label for="exampleInputPassword1">Hình Phụ 2</label> 
 	 	 	 	<input type="file" class="form-control" id="hinhphu2" name="hinhphu2" placeholder="hinhphu2"value="<?php echo $row['hinhphu2'];?>"> 
	 	 	 	  </div> 
					 <div class="form-group"> 
	 	 	 	 	<label for="exampleInputPassword1">Hình Phụ 3</label> 
 	 	 	 	<input type="file" class="form-control" id="hinhphu3" name="hinhphu3" placeholder="Nhập Hình"value="<?php echo $row['hinhphu3'];?>"> 
	 	 	 	  </div> 
					 <div class="form-group"> 
	 	 	 	 	<label for="exampleInputPassword1">Hình Phụ 4</label> 
 	 	 	 	<input type="file" class="form-control" id="hinhphu4" name="hinhphu4" placeholder="Nhập Hình"value="<?php echo $row['hinhphu4'];?>"> 
	 	 	 	  </div> 
 	 	 	  <br /> 
 	 	 	  <button type="submit" class="btn btn-primary">Thực hiện cập nhật</button> 
 	 	 	</form> 
 	 	</div> 
 	</div> 
                    </div> 
</body> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html> 

