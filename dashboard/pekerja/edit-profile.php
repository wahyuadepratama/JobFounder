<?php 
	session_start();
	require_once '../../controller/koneksi.php';
	require_once '../../controller/class.session.php';
	require_once '../../controller/class.script.php';
	require_once '../../controller/class.pekerja.php';

	$session = new function_session();
	$pekerja = new pekerja();
	$script = new function_script();

  	$session->pekerja();

	$result = $pekerja->get_profile_id($_SESSION['user']['id_pekerja']);
	$pekerja->set_all_property($result['data']);

	if(isset($_POST['save'])){
		$pekerja->set_profile_post();
		$script->redirect('profile');
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title> Edit Profile </title>
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
		<li role="presentation"><a href="track.php">Tracking</a></li>
	  	<li role="presentation" class="active"><a href="profile.php">Profile</a></li>
	</ul>
	<ul class="">
		
	</ul>
</div>
<div class="container">
 <form method='post'>
	<center>
		<img src="../../assets/images/invest.png" class="img-circle img-responsive" width="200"><br>
		<div class="div-upload btn-default">
		<span class="upload">Choose your photo profile</span>
		<input type="file" class="file-upload" name="foto_profile">
		</div>
	</center>
	<br>
	
	<div class="form-group">
		  <label for="company">Nama</label>
		  <input type="text" class="form-control" name="nama" placeholder="ex: Yolanda Parawita" value="<?php echo $pekerja->nama ?>">
	</div>
	<div class="form-group">
		  <label for="email">Alamat Email</label>
		  <input type="text" class="form-control" name="email" placeholder="ex: yolandaparawita@gmail.com" value="<?php echo $pekerja->email ?>">
	</div>
	<div class="form-group">
		  <label for="fax">Telepon/Fax</label>
		  <input type="text" class="form-control" name="no_hp" placeholder="ex: 0813827381981 / 0751321452" value="<?php echo $pekerja->no_hp ?>">
	</div>
	<div class="form-group">
		  <label for="fax">Sosial Media</label>
		  <input type="text" class="form-control" name="sosmed" placeholder="ex: Line : @tokobunga4   |    IG : @nabang97  |   WA : 0812172615243" value="<?php echo $pekerja->sosmed ?>">
	</div>
	<div class="form-group">
		  <label for="posisi">Provinsi</label>
		  <select class="form-control" id="sel2" name="provinsi">
		  	<option>Pilih</option>
		  </select>
	</div>
	<div class="form-group">
		  <label for="posisi">Kota</label>
		  <select class="form-control" id="sel2" name="kota">
		  	<option >Pilih</option>		  
		  </select>
	</div>
	<div class="form-group">
		  <label for="posisi">Kecamatan</label>
		  <select class="form-control" id="sel2" name="kecamatan">
		  	<option >Pilih</option>		    
		  </select>
	</div>
	<div class="form-group">
		  <label for="posisi">Alamat</label>
		  <textarea class="form-control" rows="5" id="req" name="alamat" placeholder="ex: Jl Khatib Sulaiman no 32"> <?php echo $pekerja->alamat ?> </textarea>
	</div>
	<div class="form-group">
		  <label for="posisi">Keahlian</label>
		  <textarea class="form-control" rows="5" id="req" name="keahlian" placeholder="ex: Programing, Desain" ><?php echo $pekerja->keahlian ?></textarea>
	</div>
	<div class="form-group">
		    <label for="exampleInputFile">Upload Tanda Pengenal (KTP/SIM/KTM/Kartu Pelajar)</label><br><br>
		    <input type="file" id="ktp" name="foto_pengenal">
		    <p class="help-block">Maks 5mb, ektensi jpg/jpeg/png</p>
	</div>

	<div class="form-group">
		<center>
			<button type="submit" class="btn btn-default"><a href="profile.php">Back</a></button>
			<button type="submit" class="btn btn-default" name="save">Save</button>
		</center>
	</div>
	</form>
</div>
<!-- end profile -->
<!-- FOOTER -->
<?php include '../../view/footer2.php'; ?>
<!-- //FOOTER -->
<!-- javascript -->
	<?php include '../../view/script.php'; ?>
<!-- javascript -->

</body>
<script type="text/javascript" src="../../assets/js/lokasi.js"></script>
</html>