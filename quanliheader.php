
	 	 	<div class="col-md-12"> 
	 	 	 	<h1>DANH SÁCH HEADER</h1> 
	 	 	 	<table class="table table-hover"> 
	 	 	 	 	<tr class="success"> 
	 	 	 	 	 	<td><strong>STT</strong></td> 
	 	 	 	 	 	<td><strong>Hình Slide 1</strong></td> 
                        <td><strong>Label silde 1</strong></td> 
	 	 	 	 	 	<td><strong>Text Slide 1</strong></td> 
	 	 	 	 	 	<td><strong>Hình Slide 2</strong></td> 
                        <td><strong>Label silde 1</strong></td> 
	 	 	 	 	 	<td><strong>Text Slide 2</strong></td> 
                        <td><strong>Hình Slide 3</strong></td> 
                        <td><strong>Label silde 3</strong></td> 
	 	 	 	 	 	<td><strong>Text Slide </strong></td> 
                             <td><strong>Xóa </strong></td> 
                             <td><strong>Cập Nhật </strong></td> 
	 	 	 	 	</tr> 
	 	 	 	 	<?php 
                        include 'ketnoi.php';
                        $query="select * from header"; 
                        $kq = mysqli_query($connect,$query); 
	 	 	 	 	$stt = 1; 
	 	 	 	 	 	while($row= mysqli_fetch_array($kq)){ 
	 	 	 	 	 	 	echo "<tr>"; 
	 	 	 	 	 	 	echo "<td>".$stt."</td>"; 
                            echo "<td>"."<img src=\"IMG/$row[hinh1]\" >"."</td>";  	 	 	 	 	 	
                            echo "<td>".$row["label1"]."</td>";  	 	 	 	 	 	
                            echo "<td>".$row["text1"]."</td>"; 
                            echo "<td>"."<img src=\"IMG/$row[hinh2]\" >"."</td>"; 	 	 	 	 	 	
                            echo "<td>".$row["label2"]."</td>";  	 	 	 	 	 	
                            echo "<td>".$row["text2"]."</td>"; 
                            echo "<td>"."<img src=\"IMG/$row[hinh3]\" >"."</td>";  	 	 	 	 	 	
                            echo "<td>".$row["label3"]."</td>";  	 	 	 	 	 	
                            echo "<td>".$row["text3"]."</td>"; 
 	 	 	 	 	 	echo "<td><a class=\"btn btn-danger\" href=\"xoaheader.php?ma=".$row['ID']."\"> 
      <span class=\"glyphicon glyphiconremove\"></span> Xóa</a></td>"; 
      echo "<td><a class=\"btn btn-danger\" href=\"capnhatheader.php?ma=".$row['ID']."\"> 
      <span class=\"glyphicon glyphiconremove\"></span> Cập Nhật</a></td>";
	 	 	 	 	 	 	echo "</tr>"; 
	 	 	 	 	 	 	$stt++; 
	 	 	 	 	 	} 
	 	 	 	 	?> 
 	 	 	 	 
	 	 	 	</table> 
 	 	 	<a href="themheader.php" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Thêm Header</a> 
</div> 
<style>
img{
    width:100%;
    height: 100px;
}
</style>