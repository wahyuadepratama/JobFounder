<!DOCTYPE html>
<html lang="en">
<head>

	<title>JobUs | Profile</title>
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
					<li><i class="glyphicon glyphicon-user" aria-hidden="true"></i>Profile</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->
<br>
<div class="container">

	<div class="form-group">
		  <label for="company">Nama</label>
		  <input type="text" class="form-control" name="nama" placeholder="ex: Yolanda Parawita">
	</div>
	<div class="form-group">
		  <label for="email">Alamat Email</label>
		  <input type="text" class="form-control" name="email" placeholder="ex: yolandaparawita@gmail.com">
	</div>
	<div class="form-group">
		  <label for="fax">No Handphone</label>
		  <input type="text" class="form-control" name="fax" placeholder="ex: 0813827381981 / 0751321452" >
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
		  <label for="posisi">Alamat</label>
		  <textarea class="form-control" rows="5" id="req" name="judul" placeholder="ex: Jl Khatib Sulaiman no 32"></textarea>
	</div>
	<div class="form-group">
		    <label for="exampleInputFile">Upload Foto KTP</label><br><br>
		    <input type="file" id="ktp">
		    <p class="help-block">nb : ekstensi yang diterima hanya berupa jpg/ jpeg/ png</p>
		    <p class="help-block">no : upload lah foto yang jelas dan bisa dibaca no ktp nya </p>
	</div>
	<div class="form-group">
		<center>
			<button type="submit" class="btn btn-default">Edit</button>
			<button type="submit" class="btn btn-default">Save</button>
		</center>
	</div>
</div>
<!-- end profile -->

<!-- footer -->
	<?php include 'view/footer.php'; ?>
<!-- //footer -->

<!-- javascript -->
	<?php include 'view/script2.php'; ?>

<!-- javascript -->

</body>
</html>