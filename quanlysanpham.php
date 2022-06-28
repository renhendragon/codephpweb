
	 	 	<div class="col-md-12"> 
	 	 	 	<h1>DANH SÁCH SẢN PHẨM</h1> 
	 	 	 	<table class="table table-hover"> 
	 	 	 	 	<tr class="success"> 
	 	 	 	 	 	<td><strong>STT</strong></td> 
	 	 	 	 	 	<td><strong>Mã Hàng</strong></td> 
                        <td><strong>Tên Hàng</strong></td> 
	 	 	 	 	 	<td><strong>Hình</strong></td> 
	 	 	 	 	 	<td><strong>Giá Cũ</strong></td> 
                        <td><strong>Giá Mới</strong></td> 
	 	 	 	 	 	<td><strong>Mã Loại</strong></td> 
							 <td><strong>Hình 1</strong></td> 
							 <td><strong>Hình 2</strong></td> 
							 <td><strong>Hình 3</strong></td> 
							 <td><strong>Hình 4</strong></td> 
                        <td><strong>Xóa </strong></td> 
                        <td><strong>Cập Nhật </strong></td> 
	 	 	 	 	</tr> 
	 	 	 	 	<?php 
                        include 'ketnoi.php';
                        $query="select * from sanpham"; 
                        $kq = mysqli_query($connect,$query); 
	 	 	 	 	$stt = 1; 
	 	 	 	 	 	while($row= mysqli_fetch_array($kq)){ 
	 	 	 	 	 	 	echo "<tr>"; 
	 	 	 	 	 	 	echo "<td>".$stt."</td>";  	 	
                            echo "<td>".$row["MaHang"]."</td>";  	 	 	 	 	 	
                            echo "<td>".$row["TenHang"]."</td>"; 
                            echo "<td>"."<img src=\"IMG/$row[Hinh]\" >"."</td>";  	 	 	 	 	 	
                            echo "<td>".$row["GiaCu"]."</td>";  	 	 	 	 	 	
                            echo "<td>".$row["Giamoi"]."</td>";  	 	 	 	 	 	
                            echo "<td>".$row["MaLoai"]."</td>"; 
							echo "<td>"."<img src=\"IMG/$row[hinhphu1]\" >"."</td>";    	 	 	 	 	 	
							echo "<td>"."<img src=\"IMG/$row[hinhphu2]\" >"."</td>";    	 	 	 	 	 	
							echo "<td>"."<img src=\"IMG/$row[hinhphu3]\" >"."</td>";  
							echo "<td>"."<img src=\"IMG/$row[hinhphu4]\" >"."</td>";  
 	 	 	 	 	 	echo "<td><a class=\"btn btn-danger\" href=\"xoasp.php?ma=".$row['MaHang']."\"> 
      <span class=\"glyphicon glyphiconremove\"></span> Xóa</a></td>"; 
      echo "<td><a class=\"btn btn-danger\" href=\"capnhatsp.php?ma=".$row['MaHang']."\"> 
      <span class=\"glyphicon glyphiconremove\"></span> Cập Nhật</a></td>";
	 	 	 	 	 	 	echo "</tr>"; 
	 	 	 	 	 	 	$stt++; 
	 	 	 	 	 	} 
	 	 	 	 	?> 
 	 	 	 	 
	 	 	 	</table> 
 	 	 	<a href="them.php" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Thêm Sản Phẩm</a> 
</div> 
<style>
img{
    width:100%;
    height: 100px;
}
</style>