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
  $query="select * from user Where ID='$ma'"; 
  $kq= mysqli_query($connect,$query);  
  $row=mysqli_fetch_array($kq);
?> 
<body> 
<div class="container"> 
	 	<div class="row"> 
	 	 	<div class="col-md-12"> 
	 	 	 	<h1>TRANG CẬP NHẬT USER</h1> 
	 	 	 	<form role="form" method="post"  enctype= multipart/form-data action="thuchiencapnhatuser.php">  
                   <div class="form-group"> 
                      
                      <label for="exampleInputEmail1">ID</label> 
                     
                      <input type="text" class="form-control" id="ID" name="ID" placeholder="Thêm Hình 1 "value="<?php echo $row['ID'];?>">
                 
                   </div> 
	 	 	 	  <div class="form-group"> 
                     
	 	 	 	 	<label for="exampleInputPassword1">User</label> 
 	 	 	 	<input type="text" class="form-control" id="user" name="user" placeholder="Nhập user"value="<?php echo $row['username'];?>"> 
	 	 	 	  </div> 
	 	 	 	  <div class="form-group"> 
	 	 	 	 	<label for="exampleInputPassword1">password</label> 
 	 	 	 	<input type="text" class="form-control" id="password" name="password" placeholder="Nhập password"value="<?php echo $row['password'];?>"> 
	 	 	 	  </div> 
                     <div class="form-group"> 
	 	 	 	 	<label for="exampleInputPassword1">Fullname</label> 
 	 	 	 	<input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nhập Fullname"value="<?php echo $row['fullname'];?>"> 
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

