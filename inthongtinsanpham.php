 <?php
 echo '<div class="col-md-6 khung2">';
 echo "<img class=\"img\" src=\"Img/$row[Hinh]\" alt=\"\" id=\"large_img\">";
 echo '<div class="row">';
 echo '<div class="col-md-3">';
 echo "<img  src=\"Img/$row[hinhphu1]\" alt=\"\" class=\"small_img\">";
 echo '</div>';
 echo '<div class="col-md-3">';
 echo "<img  src=\"Img/$row[hinhphu2]\" alt=\"\" class=\"small_img\">";
 echo '</div>';
 echo '<div class="col-md-3">';
 echo "<img  src=\"Img/$row[hinhphu3]\" alt=\"\" class=\"small_img\">";
 echo '</div>';
 echo '<div class="col-md-3">';
 echo "<img  src=\"Img/$row[hinhphu4]\" alt=\"\" class=\"small_img\">";
 echo '</div>';
 echo '</div>';
 echo '</div>';
 echo '<div class="col-md-6 khung2">';
 echo '<p>Thông Tin Sản Phẩm</p>';
 echo "<h4>$row[TenHang]</h4>";
 echo "<p class=\"gia\">Giá: <del>$row[GiaCu]</del> $row[Giamoi]</p>";
 echo "<a class=\"btn btn-danger\" href=\"dathang.php?mahang=".$row['MaHang']."\"> 
 <span class=\"glyphicon glyphiconremove\"></span> Mua Ngay</a>";
 echo '</div>';
 ?>
