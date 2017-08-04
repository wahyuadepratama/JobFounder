<?php 
    if(isset($_SESSION['user'])){
        if(isset($_SESSION['pekerja'])){
            echo "<li><a href='dashboard/pekerja/profile.php'>dashboard</a></li>";  
        }elseif(isset($_SESSION['pengiklan'])){
         	echo "<li><a href='dashboard/pengiklan/profile.php'>dashboard</a></li>";
        }elseif(isset($_SESSION['admin'])){
            echo "<li><a href='dashboard/admin/dashboard.php'>dashboard</a></li>";
        }
    }else{echo "<li><a href='daftar.php'>sign in</a></li>";}									
 ?>