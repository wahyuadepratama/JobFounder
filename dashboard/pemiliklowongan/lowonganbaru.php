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
		  <li class="list-group-item">4. Lampirkan Poster/Brosur hanya jika benar-benar jika dibutuhkan saja</li>
		  <li class="list-group-item">5. Gunakan "Upload CV" hanya jika anda adalah sebuah perusahaan yang harus menseleksi pekerja secara khusus</li>
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
		  <textarea class="form-control" rows="8" id="req" name="judul" placeholder="ex: Dibutuhkan : System Analis, Manager Marketing, Sales Manager. Min S1 dengan jurusan sebagai berikut : Sistem informasi, teknik informatika, manajemen / Saya membutuhkan 2 orang tukang kebun yang setidaknya berpengalaman dalam berkebun"></textarea>
	</div>
	<div class="form-group">
		<label for="posisi">Kategori Pekerja (Bisa dipilih lebih dari 1) .. Rapikan yool, gimana biar bagus ya :D</label><br><br>
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
		<input type="checkbox"> Website Design and Developper </input>
		<input type="checkbox"> Mobile Developer </input>
		<input type="checkbox"> Penulis Lepas (content writer) </input><br>
		<input type="checkbox"> Fotografer </input>
		<input type="checkbox"> Desain Grafis dan Multimedia </input>
		<input type="checkbox"> Penerjemah </input><br>
		<input type="checkbox"> Akuntan </input>
		<input type="checkbox"> Entry Data </input>
		<input type="checkbox"> Pengajar / kursus </input><br>
		<input type="checkbox"> Pembantu dan Baby Sitter </input>
		<input type="checkbox"> Driver </input><br>
		<input type="checkbox"> Lain - lain </input>
	</div>
	<div class="form-group">
		  <label for="posisi">Gaji</label>
		  <input type="text" class="form-control" name="gaji" placeholder="ex: Rp. 4.500.000  -  Rp. 9.000.000">
	</div>
	<div class="form-group">
		  <label for="posisi">Keterangan Tambahan (jika dibutuhkan)</label>
		  <textarea class="form-control" rows="8" id="req" name="judul" placeholder="ex: Tukang kebun akan tinggal digubuk pada ladang saya, untuk biaya beli beras dan uang harian akan saya berikan"></textarea>
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