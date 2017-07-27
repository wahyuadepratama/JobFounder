<?php 

	session_start();
	require_once 'controller/class.postingan.php';
	require_once 'controller/class.script.php';
	require_once 'controller/koneksi.php';

	$postingan = new postingan();
	$script = new function_script();

	if(isset($_REQUEST['tipe'])){

		if($_REQUEST['tipe']=='tetap'){

			if(isset($_POST['cari']) && isset($_POST['kategori'])){

				$data = $postingan->select_by_kategori($_POST['kategori'],'Karyawan');		

			}else{

				$data = $postingan->select_tipe_active('Karyawan');		

			}
			
		}elseif($_REQUEST['tipe']=='paruh_waktu'){

			if(isset($_POST['cari']) && isset($_POST['kategori'])){

				$data = $postingan->select_by_kategori($_POST['kategori'],'kontrak');	

			}else{

				$data = $postingan->select_tipe_active('kontrak');		

			}

		}else{

			$script->redirect('lowongan');

		}
	}elseif(isset($_POST['cari']) && isset($_POST['kategori'])){

		$data = $postingan->select_by_kategori($_POST['kategori'],'');

	}else{

		$data = $postingan->select_active();

	}
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
						<input type="checkbox" name="kategori[]" value="administrasi"> Administrasi </input><br>
						<input type="checkbox" name="kategori[]" value="karyawan toko"> Karyawan Toko </input><br>
						<input type="checkbox" name="kategori[]" value="marketing dan sales"> Marketing & Sales </input><br>
						<input type="checkbox" name="kategori[]" value="SPG dan SPB"> SPG & SPB </input><br>
						<input type="checkbox" name="kategori[]" value="manajemen"> Manajemen </input><br>
						<input type="checkbox" name="kategori[]" value="fotograger"> Fotografer </input><br>
						<input type="checkbox" name="kategori[]" value="desain grafis dan multimedia"> Desain Grafis dan Multimedia </input><br>
						<input type="checkbox" name="kategori[]" value="penerjemah"> Penerjemah </input><br>
					</div>
					<div class="col-sm-4">
						<input type="checkbox" name="kategori[]" value="teknologi"> Teknologi </input><br>
						<input type="checkbox" name="kategori[]" value="teknik"> Teknik </input><br>
						<input type="checkbox" name="kategori[]" value="hukum"> Hukum </input><br>
						<input type="checkbox" name="kategori[]" value="akuntansi"> Akuntansi </input><br>
						<input type="checkbox" name="kategori[]" value="kesehatan"> Kesehatan </input><br>
						<input type="checkbox" name="kategori[]" value="akuntan"> Akuntan </input><br>
						<input type="checkbox" name="kategori[]" value="entri data"> Entry Data </input><br>
						<input type="checkbox" name="kategori[]" value="pengajar"> Pengajar / kursus </input><br>
					</div>
					<div class="col-sm-4">
						<input type="checkbox" name="kategori[]" value="peternakan dan pertanian"> Peternakan dan Pertanian </input><br>
						<input type="checkbox" name="kategori[]" value="pegawai negeri"> Pegawai Negeri </input><br>
						<input type="checkbox" name="kategori[]" value="website dan developer"> Website Design and Developper </input><br>
						<input type="checkbox" name="kategori[]" value="mobile developer"> Mobile Developer </input><br>
						<input type="checkbox" name="kategori[]" value="penulis lepas"> Penulis Lepas (content writer) </input><br>
						<input type="checkbox" name="kategori[]" value="pembantu dan baby sitter"> Pembantu dan Baby Sitter </input><br>
						<input type="checkbox" name="kategori[]" value="driver"> Driver </input><br>
						<input type="checkbox" name="kategori[]" value="lain-lain"> Lain - lain </input><br>
					</div>
				</div>
			</div>
			
				<center><button type="submit" class="btn btn-default" name="cari">Cari</button></center><br>
			</form>

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
				  	<p>".$row['deskripsi']."<br></p>
            		<a class='remo' href='detail.php?id=".$postingan->encode($row['id_postingan'])."'><b>Read more</b></a>
				</div>
			</div>";
			}
		} 

	?>

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