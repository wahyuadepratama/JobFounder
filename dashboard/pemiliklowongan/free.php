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
		<li role="presentation" class="active"><a href="lowonganbaru.php" >New Upload</a></li>
	  	<li role="presentation"><a href="employee.php">Employee</a></li>
	  	<li role="presentation"><a href="profile.php">Profile</a></li>
	</ul>
	<ul class="">
		
	</ul>
</div>
<!-- end Menu -->
<!-- Dashboard -->
<br>
<div class="container">
	<div class="panel panel-default">
	  <div class="panel-body">
	  	<h4>Ketentuan :</h4><br>
	    <ul class="list-group">
		  <li class="list-group-item">1. Isilah lowongan yang sesuai dengan perusahaan, toko , ataupun perorangan yang membutuhkan pekerja</li>
		  <li class="list-group-item">2. Pastikan anda sudah melengkapi profile anda, agar pekerja tidak sulit menemukan anda nantinya</li>
		  <li class="list-group-item">3. Sampaikan deskripsi pekerjaan dengan jelas dan ringkas</li>
		  <li class="list-group-item">4. Iklan anda akan bertahan selama 1 minggu</li>
		</ul>
	  </div>
	</div>
</div>
<br>
<div class="container">
<form>
<div class="form-group">
		  <label for="posisi">Judul Lowongan</label>
		  <input type="text" class="form-control" name="judul" placeholder="Lowongan Kerja PT Freeport / Dicari tukang kebun buah naga">
	</div>
	<div class="form-group">
		  <label for="posisi">Deskripsi Pekerjaan (syarat dan ketentuan pekerja)</label>
		  <textarea class="form-control" rows="5" id="req" name="judul" placeholder="ex: Saya membutuhkan 2 orang tukang kebun yang setidaknya berpengalaman dalam berkebun"></textarea>
	</div>
	<div class="form-group">
		<label for="posisi">Kategori Pekerja (Bisa dipilih lebih dari 1)</label><br><br>
		<div class="container">
			<div class="col-sm-4">
				<input type="checkbox"> Administrasi </input><br>
				<input type="checkbox"> Karyawan Toko </input><br>
				<input type="checkbox"> Marketing & Sales </input><br>
				<input type="checkbox"> SPG & SPB </input><br>
				<input type="checkbox"> Manajemen </input><br>
				<input type="checkbox"> Fotografer </input><br>
				<input type="checkbox"> Desain Grafis dan Multimedia </input><br>
				<input type="checkbox"> Penerjemah </input><br>
			</div>
			<div class="col-sm-4">
				<input type="checkbox"> Teknologi </input><br>
				<input type="checkbox"> Teknik </input><br>
				<input type="checkbox"> Hukum </input><br>
				<input type="checkbox"> Akuntansi </input><br>
				<input type="checkbox"> Kesehatan </input><br>
				<input type="checkbox"> Akuntan </input><br>
				<input type="checkbox"> Entry Data </input><br>
				<input type="checkbox"> Pengajar / kursus </input><br>
			</div>
			<div class="col-sm-4">
				<input type="checkbox"> Peternakan dan Pertanian </input><br>
				<input type="checkbox"> Pegawai Negeri </input><br>
				<input type="checkbox"> Website Design and Developper </input><br>
				<input type="checkbox"> Mobile Developer </input><br>
				<input type="checkbox"> Penulis Lepas (content writer) </input><br>
				<input type="checkbox"> Pembantu dan Baby Sitter </input><br>
				<input type="checkbox"> Driver </input><br>
				<input type="checkbox"> Lain - lain </input><br>
			</div>
		</div>
	</div>
	<div class="form-group">
		  <label for="posisi">Gaji</label>
		  <input type="text" class="form-control" name="gaji" placeholder="ex: Rp. 4.500.000  -  Rp. 9.000.000">
	</div>
	<div class="form-group">
		  <label for="posisi">Keterangan Tambahan (jika dibutuhkan)</label>
		  <textarea class="form-control" rows="5" id="req" name="judul" placeholder="ex: Tukang kebun akan tinggal digubuk pada ladang saya, untuk biaya beli beras dan uang harian akan saya berikan"></textarea>
	</div>
	<div class="form-group">
		  <label for="posisi">Tipe</label>
		  <select class="form-control" id="sel2">
		    <option value="">Freelance / Kontrak</option>
		    <option value="">Karyawan / Kerja Tetap</option>
		  </select>
	</div>
	<div class="form-group">
		    <label for="exampleInputFile">Upload Pamflet / Brosur (optional)</label><br><br>
		    <input type="file" id="pamflet">
		    <p class="help-block">nb : ekstensi yang diterima hanya berupa jpg/jpeg/png</p>
	</div>
	<center><button type="submit" class="btn btn-default">Submit</button></center><br>
</form>
</div>

<!-- javascript -->
	<?php include '../../view/script.php'; ?>
<!-- javascript -->

</body>
</html>