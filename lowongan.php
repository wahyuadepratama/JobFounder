<?php 
	session_start();
	require_once 'controller/koneksi.php';
	require_once 'model/class.postingan.php';
	require_once 'controller/class.script.php';

	$postingan = new postingan();
	$script = new function_script();

	include 'controller/include.lowongan.post.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<title>JobUs | Lowongan Kerja</title>
	<?php include 'view/source2.php'; ?>

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
            
			<div class="dropdown" >
			  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
			    Kategori
			    <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1" name="kategori">
			  	<li role="presentation"><a role="menuitem" tabindex="-1" href="lowongan.php">Semua</a></li>
			    <li role="presentation"><a role="menuitem" tabindex="-1" href="?tipe=tetap">Kerja Tetap</a></li>
			    <li role="presentation"><a role="menuitem" tabindex="-1" href="?tipe=kontrak">Kerja Freelance</a></li>
			  </ul>
			</div><br><br>

			<form method="post">
			<div class="form-group">
				<label for="posisi">Kategori Pekerja (Bisa dipilih lebih dari 1)</label><br><br>
				<div class="container">
			<div class="col-sm-4">
				<input type="checkbox" name="kategori[]" value="Pelayan Resto (waiters)"> Pelayan Resto (waiters) </input><br>
				<input type="checkbox" name="kategori[]" value="Pelayan Toko (pramuniaga)"> Pelayan Toko (pramuniaga)</input><br>
				<input type="checkbox" name="kategori[]" value="Delivery Makanan"> Delivery Makanan </input><br>
				<input type="checkbox" name="kategori[]" value="Marketing dan Sales"> Marketing & Sales </input><br>
				<input type="checkbox" name="kategori[]" value="SPG dan SPB"> SPG & SPB </input><br> 
				<input type="checkbox" name="kategori[]" value="Administrator"> Administrator </input><br>
				
				<input type="checkbox" name="kategori[]" value="Petani dan Peternak"> Petani dan Peternak </input><br>
				<input type="checkbox" name="kategori[]" value="Fotografer"> Fotografer </input><br>
				<input type="checkbox" name="kategori[]" value="Wartawan"> Wartawan </input><br>
				<input type="checkbox" name="kategori[]" value="Penyiar Radio"> Penyiar Radio</input><br>
				<input type="checkbox" name="kategori[]" value="Penulis (content writer)"> Penulis (content writer) </input><br>
				<input type="checkbox" name="kategori[]" value="Penerjemah"> Penerjemah </input><br>
			</div>
			<div class="col-sm-4">
				<input type="checkbox" name="kategori[]" value="Supir (driver)"> Supir (driver) </input><br>
				<input type="checkbox" name="kategori[]" value="Driver Ojek"> Driver Ojek </input><br>
				<input type="checkbox" name="kategori[]" value="Pengajar"> Pengajar / Kursus </input><br>	
				<input type="checkbox" name="kategori[]" value="jasa perawatan hewan"> Jasa Perawatan Hewan </input><br>
				<input type="checkbox" name="kategori[]" value="Pembantu"> Pembantu </input><br>
				<input type="checkbox" name="kategori[]" value="Baby Sitter"> Baby Sitter</input><br>

				<input type="checkbox" name="kategori[]" value="Teknisi mesin"> Teknisi Mesin </input><br>
				<input type="checkbox" name="kategori[]" value="Event Organizer"> Event Organizer </input><br>
				<input type="checkbox" name="kategori[]" value="Tour Guide"> Tour Guide </input><br>
				<input type="checkbox" name="kategori[]" value="Entri data"> Entry Data </input><br>
				<input type="checkbox" name="kategori[]" value="Operator"> Operator </input><br>
				<input type="checkbox" name="kategori[]" value="Jasa Mengetik (type writer)"> Jasa Mengetik (type writer) </input><br>

			</div>
			<div class="col-sm-4">
				<input type="checkbox" name="kategori[]" value="Kesehatan"> Kesehatan </input><br>
				<input type="checkbox" name="kategori[]" value="Hukum"> Hukum </input><br>
				<input type="checkbox" name="kategori[]" value="Pelatih"> Pelatih </input><br>
				<input type="checkbox" name="kategori[]" value="Olahraga"> Olahraga </input><br>
				<input type="checkbox" name="kategori[]" value="Musik"> Musik </input><br>
				<input type="checkbox" name="kategori[]" value="Konsultan"> Konsultan </input><br>

				<input type="checkbox" name="kategori[]" value="Website Designer"> Website Designer </input><br>
				<input type="checkbox" name="kategori[]" value="Website Developer"> Website Developer </input><br>
				<input type="checkbox" name="kategori[]" value="Mobile Developer"> Mobile Developer </input><br>
				<input type="checkbox" name="kategori[]" value="Desain Grafis"> Desain Grafis </input><br>
				<input type="checkbox" name="kategori[]" value="Video Editing dan Multimedia"> Video Editing dan Multimedia </input><br>
				<input type="checkbox" name="kategori[]" value="Service Hardware and Software"> Service Hardware and Software</input><br>

				<input type="checkbox" name="kategori[]" value="Non Kategori"> Lain - lain </input><br>
			</div>
				</div>
			</div>
				<center><button type="submit" class="btn btn-default" name="cari">Cari</button></center><br>
			</form>

			<?php include 'controller/include.lowongan.table.php'; ?>

			<nav>
			  <ul class="pager">
			    <li class="next"><a href="#">NEXT  <span aria-hidden="true"><div class="glyphicon glyphicon-hand-right"></div></span></a></li>
			  </ul>
			</nav>

		</div>

	</div>

<!-- footer -->
	<?php include 'view/footer.php'; ?>

<!-- javascript -->
	<?php include 'view/script2.php'; ?>

</body>
</html>