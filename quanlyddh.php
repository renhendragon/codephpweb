
	 	 	<div class="col-md-12"> 
	 	 	 	<h1>DANH SÁCH ĐƠN ĐẶT HĂNG</h1> 
	 	 	 	<table class="table table-hover"> 
	 	 	 	 	<tr class="success"> 
	 	 	 	 	 	<td><strong>STT</strong></td> 
	 	 	 	 	 	<td><strong>Mã Hàng</strong></td> 
                        <td><strong>Địa Chỉ</strong></td> 
                        <td><strong>Tên người nhận</strong></td> 
                        <td><strong>Số Điện Thoại</strong></td> 
                        <td><strong>Tình Trạng</strong></td> 
                        <td><strong>Xóa </strong></td>  
                        <td><strong>Xác nhận đơn hàng </strong></td> 
	 	 	 	 	</tr> 
	 	 	 	 	<?php 
                        include 'ketnoi.php';
                        $query="select * from dondathang"; 
                        $kq = mysqli_query($connect,$query); 
	 	 	 	 	$stt = 1; 
	 	 	 	 	 	while($row= mysqli_fetch_array($kq)){ 
	 	 	 	 	 	 	echo "<tr>"; 
	 	 	 	 	 	 	echo "<td>".$stt."</td>";  	 	
                            echo "<td>".$row["MaHang"]."</td>";  	 	 	 	 	 	
                            echo "<td>".$row["diachi"]."</td>"; 
                            echo "<td>".$row["tennguoinhan"]."</td>"; 
                            echo "<td>".$row["sdt"]."</td>"; 
                            echo "<td>".$row["tinhtrang"]."</td>"; 
 	 	 	 	 	 	echo "<td><a class=\"btn btn-danger\" href=\"xoadh.php?ma=".$row['ID']."\"> 
      <span class=\"glyphicon glyphiconremove\"></span> Xóa</a></td>"; 
      if($row['tinhtrang']==0){
		echo "<td><a class=\"btn btn-danger\" href=\"xacnhandonhang.php?ma=".$row['ID']."\"> 
		<span class=\"glyphicon glyphiconremove\"></span> Xác Nhận</a></td>";
	}
    else echo "<td>Đã Xác Nhận</td>";
	 	 	 	 	 	 	echo "</tr>"; 
	 	 	 	 	 	 	$stt++; 
	 	 	 	 	 	} 
	 	 	 	 	?> 
 	 	 	 	 
	 	 	 	</table> 
 	 	 	
</div> 
<style>
img{
    width:100%;
    height: 100px;
}
</style>