
	 	 	<div class="col-md-12"> 
	 	 	 	<h1>DANH SÁCH USER</h1> 
	 	 	 	<table class="table table-hover"> 
	 	 	 	 	<tr class="success"> 
	 	 	 	 	 	<td><strong>STT</strong></td> 
	 	 	 	 	 	<td><strong>Username</strong></td> 
                        <td><strong>Password</strong></td> 
                        <td><strong>Fullname</strong></td> 
                        <td><strong>Xóa </strong></td> 
                        <td><strong>Cập Nhật </strong></td> 
	 	 	 	 	</tr> 
	 	 	 	 	<?php 
                        include 'ketnoi.php';
                        $query="select * from user"; 
                        $kq = mysqli_query($connect,$query); 
	 	 	 	 	$stt = 1; 
	 	 	 	 	 	while($row= mysqli_fetch_array($kq)){ 
	 	 	 	 	 	 	echo "<tr>"; 
	 	 	 	 	 	 	echo "<td>".$stt."</td>";  	 	
                            echo "<td>".$row["username"]."</td>";  	 	 	 	 	 	
                            echo "<td>".$row["password"]."</td>"; 
                            echo "<td>".$row["fullname"]."</td>"; 
 	 	 	 	 	 	echo "<td><a class=\"btn btn-danger\" href=\"xoauser.php?ma=".$row['ID']."\"> 
      <span class=\"glyphicon glyphiconremove\"></span> Xóa</a></td>"; 
      echo "<td><a class=\"btn btn-danger\" href=\"capnhatuser.php?ma=".$row['ID']."\"> 
      <span class=\"glyphicon glyphiconremove\"></span> Cập Nhật</a></td>";
	 	 	 	 	 	 	echo "</tr>"; 
	 	 	 	 	 	 	$stt++; 
	 	 	 	 	 	} 
	 	 	 	 	?> 
 	 	 	 	 
	 	 	 	</table> 
 	 	 	<a href="dangky.html" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Thêm User</a> 
</div> 
<style>
img{
    width:100%;
    height: 100px;
}
</style>