<!DOCTYPE html>
<html lang="en">
<head>

	<title> JobUs | Dashboard </title>
	<?php include 'view/source.php'; ?>

</head>
	
<body>
<!-- banner -->
	<div class="banner1">
		<div class="container">
			
			<?php include 'view/header.php'; ?>

		</div>
	</div>
<!-- banner -->

<!-- Menu -->
<br>
<div class="container">
	<ul class="nav nav-pills">
		<li role="presentation" class="active"><a href="penggunajasa.php">Job Freelance</a></li>
	  	<li role="presentation"><a href="pekerja.php">Freelancer</a></li>
	  	<li role="presentation"><a href="profile.php">Profile</a></li>
	</ul>
	<ul class="">
		
	</ul>
</div>
<br>
<!-- end Menu -->
<!-- Dashboard -->
<br>
<div class="container">
<form>
<div class="form-group">
		  <label for="posisi">Apa yang kamu butuhkan ?</label>
		  <input type="text" class="form-control" name="posisi" placeholder="ex: Saya membutuhkan 2 orang tukang kebun yang berpengalaman">
	</div>
	<div class="form-group">
		<label for="posisi">Deskripsi Pekerjaan</label>
		<textarea class="form-control" rows="6" id="req" placeholder="ex: Saya memiliki kebun buah naga seluas 1 hektar. Tukang kebun akan tinggal diladang dan melakukan pekerjaannya, yaitu : memupuk, mengawinkan bunga, memotong yang rusak, memanen, dll"></textarea>
	</div>
	<div class="form-group">
		<label for="posisi">Kategori Pekerjaan (Bisa dipilih lebih dari 1)</label><br><br>
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
		  <input type="text" class="form-control" name="posisi" placeholder="ex: Rp. 1.500.000 - Rp. 2.000.000">
	</div>
	<div class="form-group">
		  <label for="posisi">Keterangan</label>
		  <input type="text" class="form-control" name="posisi" placeholder="ex: Untuk beras dan uang makan perbulan akan saya sediakan.">
	</div>

	<div class="form-group">
		  <label for="posisi">Lokasi</label>
		  <select class="form-control" id="sel2">
		    <option value="">Padang</option>
		    <option value="">Payakumbuh</option>
		  </select>
	</div>

	<center><button type="submit" class="btn btn-default">Submit</button></center><br>

</form>
</div>
<!-- Dashboard -->
<!-- javascript -->
	<?php include 'view/script.php'; ?>
<!-- javascript -->

</body>
</html>