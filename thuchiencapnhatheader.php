<?php 
include 'ketnoi.php'; 
if(isset($_POST["update"])){
$ID=$_POST["ID"];
$hinh1=$_POST["hinh1"]; 
$text1=$_POST["text1"];
$label1=$_POST["label1"];
$hinh2=$_POST["hinh2"]; 
$text2=$_POST["text2"];
$label2=$_POST["label2"];
$hinh3=$_POST["hinh3"]; 
$text3=$_POST["text3"];
$label3=$_POST["label3"];
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
$query="UPDATE header SET hinh1='$hinh1',text1='$text1',label1='$label1',hinh2='$hinh2',text2='$text2',label2='$label2',hinh3='$hinh3',text3='$text3',label3='$label3' WHERE ID=$ID";
echo $query; 
$kq = mysqli_query($connect,$query); 
echo "<script>"; 
 	if($kq){ 
 	 	echo "alert('Cập Nhật thành công');"; 
 	} 
 	else{ 
 	 	echo "alert('Cập Nhật không thành công');"; 
 	} 
 	echo "window.location='quanlybanhang.php';"; 
echo "</script>"; 
}
?>