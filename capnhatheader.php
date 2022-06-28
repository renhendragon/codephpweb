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
   $query="select* from header Where ID='$ma'"; 
   $kq= mysqli_query($connect,$query);  
   $row=mysqli_fetch_array($kq);
?> 

<body> 
<div class="container"> 
	 	<div class="row"> 
	 	 	<div class="col-md-12"> 
	 	 	 	<h1>TRANG cập nhật header</h1> 
	 	 	 	<form role="form" method="post"  enctype= multipart/form-data action="thuchiencapnhatheader.php">  
                   <div class="form-group"> 
                      
                      <label for="exampleInputEmail1">ID</label> 
                     
                      <input type="text" class="form-control" id="ID" name="ID" placeholder="Thêm Hình 1 "value="<?php echo $row['ID'];?>">
                 
                   </div> 
	 	 	 	  <div class="form-group"> 
                      
	 	 	 	 	<label for="exampleInputEmail1">Hình 1</label> 
                       
 	 	 	 	<input type="file" class="form-control" id="hinh1" name="hinh1" placeholder="Thêm Hình 1 "value="<?php echo $row['hinh1'];?>">
                   
	 	 	 	  </div> 
	 	 	 	  <div class="form-group"> 
	 	 	 	 	<label for="exampleInputPassword1">Label 1</label> 
 	 	 	 	<input type="text" class="form-control" id="label1" name="label1" placeholder="Nhập Label 1"value="<?php echo $row['label1'];?>"> 
	 	 	 	  </div> 	
	 	 	 	  <div class="form-group"> 
	 	 	 	 	<label for="exampleInputPassword1">Text 1</label> 
 	 	 	 	<input type="text" class="form-control" id="text1" name="text1" placeholder="Nhập Text 1"value="<?php echo $row['text1'];?>"> 
	 	 	 	  </div> 
                     <div class="form-group"> 
	 	 	 	 	<label for="exampleInputEmail1">Hình 1</label> 
 	 	 	 	<input type="file" class="form-control" id="hinh2" name="hinh2" placeholder="Thêm Hình 2"value="<?php echo $row['hinh2'];?>"> 
	 	 	 	  </div> 
	 	 	 	  <div class="form-group"> 
	 	 	 	 	<label for="exampleInputPassword1">Label 2</label> 
 	 	 	 	<input type="text" class="form-control" id="label2" name="label2" placeholder="Nhập Label 2"value="<?php echo $row['label2'];?>"> 
	 	 	 	  </div> 	
	 	 	 	  <div class="form-group"> 
	 	 	 	 	<label for="exampleInputPassword1">Text 2</label> 
 	 	 	 	<input type="text" class="form-control" id="text2" name="text2" placeholder="Nhập Text 2"value="<?php echo $row['text2'];?>"> 
	 	 	 	  </div> 
                     <div class="form-group"> 
	 	 	 	 	<label for="exampleInputEmail1">Hình 3</label> 
 	 	 	 	<input type="file" class="form-control" id="hinh3" name="hinh3" placeholder="Thêm Hình 3"value="<?php echo $row['hinh3'];?>"> 
	 	 	 	  </div> 
	 	 	 	  <div class="form-group"> 
	 	 	 	 	<label for="exampleInputPassword1">Label 3</label> 
 	 	 	 	<input type="text" class="form-control" id="label3" name="label3" placeholder="Nhập Label 3"value="<?php echo $row['label3'];?>"> 
	 	 	 	  </div> 	
	 	 	 	  <div class="form-group"> 
	 	 	 	 	<label for="exampleInputPassword1">Text 3</label> 
 	 	 	 	<input type="text" class="form-control" id="text3" name="text3" placeholder="Nhập Text 3"value="<?php echo $row['text3'];?>"> 
	 	 	 	  </div> 
 	 	 	  <br /> 
 	 	 	  <button type="submit" class="btn btn-primary" name="update">Thực hiện cập nhật</button> 
 	 	 	</form> 
 	 	</div> 
 	</div> 
</div> 
</body> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html> 

