<!DOCTYPE html>
<html lang="en">
<head>

	<title> JobUs | Profile Perusahaan </title>
	<?php include("../../view/source.php"); 
	include '../../controller/koneksi.php';
	session_start();

	include '../../controller/class.pengiklan.php';

	$pengiklan = new pengiklan();
	$pengiklan->set_all_property($_SESSION['user']);

	?>

</head>
	
<body>
<!-- banner -->
	<div class="banner1">
		<div class="container">
			
			<?php include("../../view/header.php"); ?>

		</div>
	</div>
<!-- banner -->

<!-- profile -->
<br>
<div class="container">
<!-- MAKAN BANG -->
	<nav class="navbar navbar-default transbg">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand"><img class="img-responsive" src="../../assets/images/coin-small.png"></a><a class="coin">0</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         
      <ul class="nav navbar-nav navbar-right" id="menu">
        <li role="presentation" class="noac"><a href="lowonganbaru.php">New Upload</a></li>
        <li role="presentation"  class="noac"><a href="employee.php">Employee</a></li>
        <li role="presentation" class="active"><a href="profile.php">Profile</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>

<div class="container">
<form action="profile.php" method="post">
	<center>
		<img src="/JobFounder/assets/images/invest.png" class="img-circle img-responsive" width="200"><br>
		<div class="div-upload btn-default">
		<span class="upload">Choose your photo profile</span>
		<input type="file" class="file-upload" name='foto_profile'>
		</div>
	</center>
	<br>
	<div class="form-group">
		  <label for="company">Nama Perusahaan / Pemilik Pekerjaan</label>
		  <input type="text" class="form-control" name="nama" placeholder="ex: PT Makmur tbk  / Ridho Maulana" required="">
	</div>
	<div class="form-group">
		  <label for="desc">Deskripsi</label>
		  <textarea class="form-control" rows="5" id="description" placeholder="ex : Perusahaan memproduksi berbagai macam baju. Kami juga menerima pesanan / Saya adalah pemilik dari kebun buah naga" name="deskripsi"></textarea>
	</div>
	<div class="form-group">
		  <label for="email">Alamat Email</label>
		  <input type="text" class="form-control" name="email" placeholder="ex: yolandaparawita@gmail.com">
	</div>
	<div class="form-group">
		  <label for="fax">Telepon/Fax</label>
		  <input type="text" class="form-control" name="no_hp" placeholder="ex:  Kantor : 0751 - 712372 / Andi : 0813827381981" >
	</div>
	<div class="form-group">
		  <label for="fax">Sosial Media</label>
		  <input type="text" class="form-control" name="sosmed" placeholder="ex: Line : @tokobunga4   |    IG : @nabang97  |   WA : 0812172615243">
	</div>
	<div class="form-group">
		  <label for="prov">Provinsi</label>
		  <select class="form-control" id="sel2" name="provinsi">
		    <option value="">Sumatera Barat</option>
		    <option value="">Riau</option>
		  </select>
	</div>
	<div class="form-group">
		  <label for="kota">Kota</label>
		  <select class="form-control" id="sel2" name="kota">
		    <option value="">Padang</option>
		    <option value="">Payakumbuh</option>
		  </select>
	</div>
	<div class="form-group">
		  <label for="kec">Kecamatan</label>
		  <select class="form-control" id="sel2" name="kecamatan">
		    <option value="">Padang Utara</option>
		    <option value="">Padang Selatan</option>
		  </select>
	</div>
	<div class="form-group">
		  <label for="alamat">Alamat Perusahaan / Pemilik Pekerjaan</label>
		  <textarea class="form-control" rows="5" id="req" name="alamat" placeholder="ex: Jl Khatib Sulaiman no 32 / Komplek perumahan kolam indah mata air no 12"></textarea>
	</div>
	<div class="form-group">
		  <label for="fax">Marking Lokasi</label>
		  <input type="text" class="form-control" name="lokasi" placeholder="" >
	</div>

	<div class="form-group">
	<center>
	    <button class="btn btn-default">Edit</button>
		<button class="btn btn-default" name="save">Save</button>
	</center>
	</div>
</form>
</div>
<!-- end profile -->



<!-- javascript -->
	<?php
	include '../../view/script.php';

	if(isset($_POST['save'])){
		$pengiklan->update_profile($_POST);
	}


	

	 ?>
<!-- javascript -->


</body>
</html>