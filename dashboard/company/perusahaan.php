<!DOCTYPE html>
<html lang="en">
<head>

	<title> JobUs | Dashboard </title>
	<?php include '../../view/source.php'; ?>

</head>
	
<body>
<!-- banner -->
	<div class="banner1">
		<div class="container">
			
			<?php include '../../view/header.php'; ?>

		</div>
	</div>
<!-- banner -->

<!-- Menu -->
<br>
<div class="container">
	<ul class="nav nav-pills">
		<li role="presentation" class="active"><a href="perusahaan.php">Job Vacancies</a></li>
	  	<li role="presentation"><a href="employee.php">Employee</a></li>
	  	<li role="presentation"><a href="profile.php">Profile</a></li>
	</ul>
	<ul class="">
		
	</ul>
</div>
<!-- end Menu -->
<!-- Dashboard -->
<br>
<div class="container"><h4>Isi deskripsi lowongan yang akan anda bagikan dan jangan lupa pastikan profile perusahaan anda sudah benar</h4></div>
<br>
<div class="container">
<form>
<div class="form-group">
		  <label for="posisi">Judul</label>
		  <input type="text" class="form-control" name="judul" placeholder="Lowongan Kerja PT Freeport">
	</div>
	<div class="form-group">
		  <label for="posisi">Posisi yang Dibutuhkan</label>
		  <textarea class="form-control" rows="5" id="req" name="judul" placeholder="ex: Dibutuhkan : System Analis, Manager Marketing, Sales Manager, dsb"></textarea>
	</div>
	<div class="form-group">
		  <label for="posisi">Persyaratan</label>
		  <textarea class="form-control" rows="5" id="req" placeholder="ex: Min S1 dengan jurusan sebagai berikut : Sistem informasi, teknik informatika, manajemen, dsb"></textarea>
	</div>
	<div class="form-group">
		<label for="posisi">Kategori Pekerja (Bisa dipilih lebih dari 1)</label><br><br>
		<input type="checkbox"> Administrasi </input>
		<input type="checkbox"> Karyawan Toko </input>
		<input type="checkbox"> Marketing & Sales </input>
		<input type="checkbox"> SPG & SPB </input>
		<input type="checkbox"> Manajemen </input><br>
		<input type="checkbox"> Teknologi </input>
		<input type="checkbox"> Teknik </input>
		<input type="checkbox"> Hukum </input>
		<input type="checkbox"> Akuntansi </input><br>
		<input type="checkbox"> Kesehatan </input>
		<input type="checkbox"> Peternakan dan Pertanian </input>
		<input type="checkbox"> Pegawai Negeri </input>
		<input type="checkbox"> Lain - lain </input>
	</div>
	<div class="form-group">
		  <label for="posisi">Gaji</label>
		  <input type="text" class="form-control" name="gaji" placeholder="ex: Rp. 4.500.000  -  Rp. 9.000.000">
	</div>
	<div class="form-group">
		    <label for="exampleInputFile">Upload Pamflet / Brosur (optional)</label><br><br>
		    <input type="file" id="pamflet">
		    <p class="help-block">nb : ekstensi yang diterima hanya berupa jpg/ jpeg/ png</p>
	</div>
	<center><button type="submit" class="btn btn-default">Submit</button></center><br>
</form>
</div>

<!-- javascript -->
	<?php include '../../view/script.php'; ?>
<!-- javascript -->

</body>
</html>