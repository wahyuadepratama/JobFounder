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

	<title> Profile Pengiklan </title>
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

	<center>
		<img src="/JobFounder/assets/images/invest.png" class="img-circle img-responsive" width="200"><br>
	</center>
	<br>
		
	<center>
	  <table class="tabpad">
	       <tr>
	           <td class="text-left">Nama Perusahaan / Pemilik Pekerjaan</td>
	           <td width="20">:</td>
	           <td class="text-left"><?php echo $pengiklan->nama; ?></td>
	       </tr>
	       <tr>
	           <td class="text-left">Deskripsi</td>
	           <td width="20">:</td>
	           <td class="text-left"><?php echo $pengiklan->deskripsi; ?></td>
	       </tr>
	       <tr>
	           <td class="text-left">Alamat Email</td>
	           <td>:</td>
	           <td class="text-left"><?php echo $pengiklan->email; ?></td>
	       </tr>
	       <tr>
	           <td class="text-left">Telepon/Fax</td>
	           <td>:</td>
	           <td class="text-left"><?php echo $pengiklan->no_hp; ?></td>
	       </tr>
	       <tr>
	           <td class="text-left">Sosial Media</td>
	           <td>:</td>
	           <td class="text-left"><?php echo $pengiklan->sosmed; ?></td>
	       </tr>
	       <tr>
	           <td class="text-left">Provinsi</td>
	           <td>:</td>
	           <td class="text-left"><?php echo $pengiklan->provinsi; ?></td>
	       </tr>
	       <tr>
	           <td class="text-left">Kota</td>
	           <td>:</td>
	           <td class="text-left"><?php echo $pengiklan->kota; ?></td>
	       </tr>
	       <tr>
	           <td class="text-left">Kecamatan</td>
	           <td>:</td>
	           <td class="text-left"><?php echo $pengiklan->kecamatan; ?></td>
	       </tr>
	       <tr>
	           <td class="text-left">Alamat Perusahaan / Pemilik Pekerjaan</td>
	           <td>:</td>
	           <td class="text-left"><?php echo $pengiklan->alamat; ?></td>
	       </tr>
	       <tr>
	           <td class="text-left">Marking Lokasi</td>
	           <td>:</td>
	           <td class="text-left"><?php echo $pengiklan->lokasi; ?></td>
	       </tr>
	  </table><br>
	</center>

<form method="post">
	<div class="form-group">
		<center>
		    <button class="btn btn-default"><a href="edit-profile.php">Edit</a></button>
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