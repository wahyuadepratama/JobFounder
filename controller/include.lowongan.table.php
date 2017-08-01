<?php 

		if(count($data)>0){
			foreach ($data as $row){
			echo "
			<div class='well well-lg' style='text-align: justify;''>
				<div class='row'>
				  	<div class='col-xs-6 col-md-3'>
				    	<a href='detail.php?id=".$postingan->encode($row['id_postingan'])."' class='thumbnail'>
				      	<img src='assets/images/noposter.jpg' alt='...'>
				    	</a>
				  	</div>
				  	<h4>".$row['judul']." </h4>
				  	<p>";
				if(strlen($row['deskripsi'])>18){
					echo substr($row['deskripsi'],0,18).'. . . .';
				}else{
					echo $row['deskripsi'];
				}
			echo	"			  	
				  	<br></p>
            		<a class='remo' href='detail.php?id=".$postingan->encode($row['id_postingan'])."'><b>Read more</b></a>
				</div>
			</div>";
			}
		} 

	?>