
	 	 	<div class="col-md-12"> 
	 	 	 	<h1>DANH SÁCH LOẠI HÀNG</h1> 
	 	 	 	<table class="table table-hover"> 
	 	 	 	 	<tr class="success"> 
	 	 	 	 	 	<td><strong>STT</strong></td> 
	 	 	 	 	 	<td><strong>Mã Loại</strong></td> 
                        <td><strong>Tên Loại</strong></td> 
                        <td><strong>Xóa </strong></td> 
                        <td><strong>Cập Nhật </strong></td> 
	 	 	 	 	</tr> 
	 	 	 	 	<?php 
                        include 'ketnoi.php';
                        $query="select * from loaihang"; 
                        $kq = mysqli_query($connect,$query); 
	 	 	 	 	$stt = 1; 
	 	 	 	 	 	while($row= mysqli_fetch_array($kq)){ 
	 	 	 	 	 	 	echo "<tr>"; 
	 	 	 	 	 	 	echo "<td>".$stt."</td>";  	 	
                            echo "<td>".$row["MaLoai"]."</td>";  	 	 	 	 	 	
                            echo "<td>".$row["TenLoai"]."</td>"; 
 	 	 	 	 	 	echo "<td><a class=\"btn btn-danger\" href=\"xoaloai.php?ma=".$row['MaLoai']."\"> 
      <span class=\"glyphicon glyphiconremove\"></span> Xóa</a></td>"; 
      echo "<td><a class=\"btn btn-danger\" href=\"capnhatloai.php?ma=".$row['MaLoai']."\"> 
      <span class=\"glyphicon glyphiconremove\"></span> Cập Nhật</a></td>";
	 	 	 	 	 	 	echo "</tr>"; 
	 	 	 	 	 	 	$stt++; 
	 	 	 	 	 	} 
	 	 	 	 	?> 
 	 	 	 	 
	 	 	 	</table> 
 	 	 	<a href="themloai.php" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Thêm Loại Sản Phẩm</a> 
</div> 
<style>
img{
    width:100%;
    height: 100px;
}
</style>