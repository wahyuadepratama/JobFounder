<!DOCTYPE html>
<html lang="en">
<head>

	<title>Lowongan Kerja | Timeline</title>
	<?php include 'view/source2.php'; 
	include 'controller/class.postingan.php';
	include 'controller/koneksi.php';

	$postingan = new postingan();
	$data = $postingan->select_active();

	?>

</head>
	
<body>
<!-- banner -->
	<div class="banner1">
		<div class="container">
			
		<?php include 'view/header2.php'; ?>

		</div>
	</div>
<!-- banner -->

<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="w3layouts_breadcrumbs_left">
				<ul>
					<li><i class="glyphicon glyphicon-home" aria-hidden="true"></i><a href="home.php">Home</a><span>/</span></li>
					<li><i class="glyphicon glyphicon-bullhorn" aria-hidden="true"></i>Cari Lowongan Kerja</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->

<div class="welcome">
		<div class="container">
			<h3 class="agileits_w3layouts_head"><span>Cari Lowongan Kerja Disini</span></h3>
			<p class="agile_para_2">Pilih kategori yang anda inginkan untuk hasil yang lebih spesifik</p>
            
		    <!-- <div class="input-group">
		      <input type="text" class="form-control pull-right" placeholder="Search for..." style="width:250px;">
		      <span class="input-group-btn">
		        <button class="btn btn-default" type="button">Go!</button>
		      </span>
		    </div> -->
			<div class="dropdown" >
			  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
			    Kategori
			    <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
			    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Kerja Tetap</a></li>
			    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Kerja Paruh Waktu</a></li>
			  </ul>
			</div><br><br>

			<?php if(count($data)>0){
				foreach ($data as $row) {
					echo "
			<div class='well well-lg' style='text-align: justify;''>
				<div class='row'>
				  <div class='col-xs-6 col-md-3'>
				    <a href='detail.php' class='thumbnail'>
				      <img src='".$row['pamflet']."' alt='...'>
				    </a>
				  </div>
				  <h4>".$row['judul']." </h4>
				  <p>".$row['deskripsi']."<br></p>
            	<a class='remo' href='detail.php'><b>Read more</b></a>

				</div>

			</div>";
				}
			} ?>

			<nav>
			  <ul class="pager">
			    <li class="next"><a href="#">NEXT  <span aria-hidden="true"><div class="glyphicon glyphicon-hand-right"></div></span></a></li>
			  </ul>
			</nav>

		</div>

	</div>

<!-- footer -->
	<?php include 'view/footer.php'; ?>
<!-- //footer -->

<!-- javascript -->
	<?php include 'view/script2.php'; ?>
<!-- javascript -->

</body>
</html>