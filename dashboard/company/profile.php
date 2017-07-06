<!DOCTYPE html>
<html lang="en">
<head>

	<title> JobUs | Profile Perusahaan </title>
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

<!-- profile -->
<br>
<div class="container">
	<ul class="nav nav-pills">
		<li role="presentation"><a href="perusahaan.php">Job Vacancies</a></li>
	  	<li role="presentation"><a href="employee.php">Employee</a></li>
	  	<li role="presentation" class="active"><a href="profile.php">Profile</a></li>
	</ul>
	<ul class="">
		
	</ul>
</div>

<div class="container">
	<center>
		<img src="../../assets/images/invest.png" class="img-circle img-responsive" width="200"><br>
		<input type="file" class="custom-file-input">
	</center>
	<br>
	<div class="form-group">
		  <label for="company">Nama Perusahaan</label>
		  <input type="text" class="form-control" name="company" placeholder="ex: PT Makmur tbk  |  Toko Baju Sejahtera">
	</div>
	<div class="form-group">
		  <label for="desc">Deskripsi Perusahaan</label>
		  <textarea class="form-control" rows="5" id="description" placeholder="ex : Kami menjual berbagai macam baju sesuai kebutuhan. Kami juga menerima pesanan. Toko kami memiliki 3 cabang di kota Padang. dst"></textarea>
	</div>
	<div class="form-group">
		  <label for="email">Alamat Email</label>
		  <input type="text" class="form-control" name="email" placeholder="ex: yolandaparawita@gmail.com">
	</div>
	<div class="form-group">
		  <label for="fax">Telepon/Fax</label>
		  <input type="text" class="form-control" name="fax" placeholder="ex: Andi : 0813827381981   |   Home : 0751 - 712372" >
	</div>
	<div class="form-group">
		  <label for="fax">Sosial Media</label>
		  <input type="text" class="form-control" name="fax" placeholder="ex: Line : @tokobunga4   |    IG : @nabang97  |   WA : 0812172615243">
	</div>
	<div class="form-group">
		  <label for="posisi">Provinsi</label>
		  <select class="form-control" id="sel2">
		    <option value="">Sumatera Barat</option>
		    <option value="">Riau</option>
		  </select>
	</div>
	<div class="form-group">
		  <label for="posisi">Kota</label>
		  <select class="form-control" id="sel2">
		    <option value="">Padang</option>
		    <option value="">Payakumbuh</option>
		  </select>
	</div>
	<div class="form-group">
		  <label for="posisi">Kecamatan</label>
		  <select class="form-control" id="sel2">
		    <option value="">Padang Utara</option>
		    <option value="">Padang Selatan</option>
		  </select>
	</div>
	<div class="form-group">
		  <label for="posisi">Alamat Perusahaan</label>
		  <textarea class="form-control" rows="5" id="req" name="judul" placeholder="ex: Jl Khatib Sulaiman no 32"></textarea>
	</div>

	<div class="form-group">
	<center>
		<button type="submit" class="btn btn-default">Edit</button>
		<button type="submit" class="btn btn-default">Save</button>
	</center>
	</div>
</div>
<!-- end profile -->

<!-- javascript -->
	<?php include '../../view/script.php'; ?>
<!-- javascript -->

</body>
</html>