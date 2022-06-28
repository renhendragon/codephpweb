<?php
echo '<div class="col-md-4 sanpham1">';
echo "<img src=\"IMG/$row[Hinh]\">"; 
echo "<a class=\"btn btn-danger\" href=\"Thongtinsanpham.php?mahang=".$row['MaHang']."\"> 
<span class=\"glyphicon glyphiconremove\"></span> Xem Thêm</a>";
echo '</div>';
?>  
