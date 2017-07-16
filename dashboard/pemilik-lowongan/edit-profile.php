<?php 
  session_start();
  require_once '../../controller/koneksi.php';
  require_once '../../controller/session.php';
  require_once '../../controller/class.script.php';
  require_once '../../controller/class.pengiklan.php';

  $pengiklan = new pengiklan();
  $script = new function_script();

  session_cek();

  $result = $pengiklan->select_profile($_SESSION['user']['id_pengiklan']);
  $pengiklan->set_all_property($result['data']);

 ?>

<!DOCTYPE html>
<html lang="en">
<head>

	<title> Edit Profile </title>
	<?php include("../../view/source.php"); ?>

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
<form method="post">
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
		  <input type="text" class="form-control" name="nama" placeholder="ex: PT Makmur tbk  atau Ridho Maulana" required="" value="<?php echo $pengiklan->nama ?>">
	</div>
	<div class="form-group">
		  <label for="desc">Deskripsi</label>
		  <textarea class="form-control" rows="5" id="description" placeholder="ex : Perusahaan memproduksi berbagai macam baju. Kami juga menerima pesanan / Saya adalah pemilik dari kebun buah naga" name="deskripsi"><?php echo $pengiklan->deskripsi ?></textarea>
	</div>
	<div class="form-group">
		  <label for="email">Alamat Email</label>
		  <input type="text" class="form-control" name="email" placeholder="ex: yolandaparawita@gmail.com" value="<?php echo $pengiklan->email ?>">
	</div>
	<div class="form-group">
		  <label for="fax">Telepon/Fax</label>
		  <input type="text" class="form-control" name="no_hp" placeholder="ex:  Kantor : 0751 - 712372 / Andi : 0813827381981" value="<?php echo $pengiklan->no_hp ?>">
	</div>
	<div class="form-group">
		  <label for="fax">Sosial Media</label>
		  <input type="text" class="form-control" name="sosmed" placeholder="ex: Line : @tokobunga4   |    IG : @nabang97  |   WA : 0812172615243" value="<?php echo $pengiklan->sosmed ?>">
	</div>
	<div class="form-group">
		  <label for="prov">Provinsi</label>
		  <select class="form-control" id="sel2" name="provinsi">
		    <option value="Sumatera Barat">Sumatera Barat</option>
		    <option value="Riau">Riau</option>
		  </select>
	</div>
	<div class="form-group">
		  <label for="kota">Kota</label>
		  <select class="form-control" id="sel2" name="kota">
		    <option value="Padang">Padang</option>
		    <option value="Payakumbuh">Payakumbuh</option>
		  </select>
	</div>
	<div class="form-group">
		  <label for="kec">Kecamatan</label>
		  <select class="form-control" id="sel2" name="kecamatan">
		    <option value="Padang Utara">Padang Utara</option>
		    <option value="Padang Selatan">Padang Selatan</option>
		  </select>
	</div>
	<div class="form-group">
		  <label for="alamat">Alamat Perusahaan / Pemilik Pekerjaan</label>
		  <textarea class="form-control" rows="5" id="req" name="alamat" placeholder="ex: Jl Khatib Sulaiman no 32 / Komplek perumahan kolam indah mata air no 12"><?php echo $pengiklan->alamat ?></textarea>
	</div>
	<div class="form-group">
		  <label for="fax">Marking Lokasi</label>
		  <input type="text" class="form-control" name="lokasi" placeholder="" disabled="true" value="<?php echo $pengiklan->lokasi ?>">
	</div>

	<div class="form-group">
	<center>
		<button class="btn btn-default" name="save">Save</button>
		<button class="btn btn-danger btn-sm" name="logout">Logout</button>
	</center>
	</div>
</form>
</div>
<!-- end profile -->

<!-- javascript -->
	<?php include '../../view/script.php'; ?>
<!-- javascript -->


</body>
</html>

	<?php
		if(isset($_POST['save'])){
			$pengiklan->set_profile_updated();
			$script->redirect('profile.php');
		}
	?>