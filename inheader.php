<?php
 $query="select * from header"; 
 $kq = mysqli_query($connect,$query); 
 while($row= mysqli_fetch_array($kq)){
    echo '<div class="carousel-inner caro">';
    echo '<div class="carousel-item active ">';
    echo "<img src=\"IMG/$row[hinh1]\" class=\"d-block w-100\" alt=\"...\">";
    echo '<div class="carousel-caption d-none d-md-block">';
    echo "<h5>$row[label1]</h5>";
    echo "<p>$row[text1]</p>";
    echo '</div>';
    echo '</div>';
    echo '<div class="carousel-item">';
    echo "<img src=\"IMG/$row[hinh2]\" class=\"d-block w-100\" alt=\"...\">";
    echo '<div class="carousel-caption d-none d-md-block">';
    echo "<h5>$row[label2]</h5>";
    echo "<p>$row[text2]</p>";
    echo '</div>';
    echo '</div>';
    echo '<div class="carousel-item">';
    echo "<img src=\"IMG/$row[hinh3]\" class=\"d-block w-100\" alt=\"...\">";
    echo '<div class="carousel-caption d-none d-md-block">';
    echo "<h5>$row[label3]</h5>";
    echo "<p>$row[text3]</p>";
    echo '</div>';
    echo '</div>';
    echo '</div>';
 }


?>