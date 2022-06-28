<?php
            include 'ketnoi.php'; 
            $query="select * from loaihang"; 
            $kq = mysqli_query($connect,$query); 
            
            while($row= mysqli_fetch_array($kq)){
              echo "<li><a class=\"dropdown-item\" href=\"sanpham.php?maloai=".$row['MaLoai']."\"> 
              <span class=\"glyphicon glyphiconremove\"></span>$row[TenLoai]</a></li>";
          }

?>