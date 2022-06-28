<?php 
include 'ketnoi.php'; 
$hinh1=$_POST["hinh1"]; 
$text1=$_POST["text1"];
$label1=$_POST["label1"];
$hinh1=$_POST["hinh2"]; 
$text1=$_POST["text2"];
$label1=$_POST["label2"];
$hinh1=$_POST["hinh2"]; 
$text1=$_POST["text2"];
$label1=$_POST["label2"];
if (isset($_FILES['hinh1'])){ 
	move_uploaded_file($_FILES['hinh1']['tmp_name'], 'IMG/'.$_FILES['hinh1']['name']); 
	$hinh1=$_FILES['hinh1']['name'];
}
if (isset($_FILES['hinh2'])){ 
	move_uploaded_file($_FILES['hinh2']['tmp_name'], 'IMG/'.$_FILES['hinh2']['name']); 
	$hinh2=$_FILES['hinh2']['name'];
}
if (isset($_FILES['hinh3'])){ 
	move_uploaded_file($_FILES['hinh3']['tmp_name'], 'IMG/'.$_FILES['hinh3']['name']); 
	$hinh3=$_FILES['hinh3']['name'];
}
$query="insert into header(id,hinh1,hinh2,hinh3,label1,label2,label3,text1,text2,text3) values('','$hinh1', '$hinh2',
'$hinh3','$label1','$label2','$label3','$text1','$text2','$text3')" ;
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