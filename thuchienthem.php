<?php 
include 'ketnoi.php'; 
$ma=$_POST["MaHang"]; 
$ten=$_POST["TenHang"]; 
$namxb=$_POST["GiaCu"]; 
$tennxv=$_POST["GiaMoi"]; 
$mantl=$_POST["MaLoai"]; 
if (isset($_FILES['Hinh'])){ 
	move_uploaded_file($_FILES['Hinh']['tmp_name'], 'IMG/'.$_FILES['Hinh']['name']); 
	$tg=$_FILES['Hinh']['name'];
}
if (isset($_FILES['hinhphu1'])){ 
	move_uploaded_file($_FILES['hinhphu1']['tmp_name'], 'IMG/'.$_FILES['hinhphu1']['name']); 
	$hinhphu1=$_FILES['hinhphu1']['name'];
}
if (isset($_FILES['hinhphu2'])){ 
	move_uploaded_file($_FILES['hinhphu2']['tmp_name'], 'IMG/'.$_FILES['hinhphu2']['name']); 
	$hinhphu2=$_FILES['hinhphu2']['name'];
}
if (isset($_FILES['hinhphu3'])){ 
	move_uploaded_file($_FILES['hinhphu3']['tmp_name'], 'IMG/'.$_FILES['hinhphu3']['name']); 
	$hinhphu3=$_FILES['hinhphu3']['name'];
}
if (isset($_FILES['hinhphu4'])){ 
	move_uploaded_file($_FILES['hinhphu4']['tmp_name'], 'IMG/'.$_FILES['hinhphu4']['name']); 
	$hinhphu4=$_FILES['hinhphu4']['name'];
}
$query="insert into sanpham(MaHang, TenHang, Hinh, GiaCu, GiaMoi, MaLoai,hinhphu1,hinhphu2,hinhphu3,hinhphu4) values($ma, 
'$ten','$tg','$namxb','$tennxv', '$mantl','$hinhphu1','$hinhphu2','$hinhphu3','$hinhphu4')" ;
echo $query; 

$kq = mysqli_query($connect,$query); 
echo "<script>"; 
 	if($kq){ 
 	 	echo "alert('Thêm thành công');"; 
 	} 
 	else{ 
 	 	echo "alert('Thêm không thành công');"; 
 	} 
 	echo "window.location='quanlybanhang.php';"; 
echo "</script>"; 
?> 