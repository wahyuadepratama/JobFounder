<!DOCTYPE html>
<html lang="en">
<head>

	<title> JobUs | Profile Perusahaan </title>
	<?php include '../../view/source.php'; 
	include '../../controller/koneksi.php';

	session_start();
	include '../../controller/class.pekerja.php';
	$pekerja = new pekerja();
	$pekerja->set_all_property($_SESSION['user']);

	?>

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
		  <input type="text" class="form-control" name="nama" placeholder="ex: Yolanda Parawita">
	</div>
	<div class="form-group">
		  <label for="email">Alamat Email</label>
		  <input type="text" class="form-control" name="email" placeholder="ex: yolandaparawita@gmail.com">
	</div>
	<div class="form-group">
		  <label for="fax">Telepon/Fax</label>
		  <input type="text" class="form-control" name="no_hp" placeholder="ex: 0813827381981 / 0751321452" >
	</div>
	<div class="form-group">
		  <label for="fax">Sosial Media</label>
		  <input type="text" class="form-control" name="sosmed" placeholder="ex: Line : @tokobunga4   |    IG : @nabang97  |   WA : 0812172615243">
	</div>
	<div class="form-group">
		  <label for="posisi">Provinsi</label>
		  <select class="form-control" id="sel2" name="provinsi">
		    <option value="">Sumatera Barat</option>
		    <option value="">Riau</option>
		  </select>
	</div>
	<div class="form-group">
		  <label for="posisi">Kota</label>
		  <select class="form-control" id="sel2" name="kota">
		    <option value="">Padang</option>
		    <option value="">Payakumbuh</option>
		  </select>
	</div>
	<div class="form-group">
		  <label for="posisi">Kecamatan</label>
		  <select class="form-control" id="sel2" name="kecamatan">
		    <option value="">Padang Utara</option>
		    <option value="">Padang Selatan</option>
		  </select>
	</div>
	<div class="form-group">
		  <label for="posisi">Alamat</label>
		  <textarea class="form-control" rows="5" id="req" name="alamat" placeholder="ex: Jl Khatib Sulaiman no 32"></textarea>
	</div>
	<div class="form-group">
		  <label for="posisi">Keahlian</label>
		  <textarea class="form-control" rows="5" id="req" name="keahlian" placeholder="ex: Programing, Desain"></textarea>
	</div>
	<div class="form-group">
		    <label for="exampleInputFile">Upload Tanda Pengenal (KTP/SIM/KTM/Kartu Pelajar)(</label><br><br>
		    <input type="file" id="ktp" name="foto_pengenal">
		    <p class="help-block">Maks 5mb, ektensi jpg/jpeg/png</p>
	</div>

	<div class="form-group">
		<center>
			<button type="submit" class="btn btn-default">Edit</button>
			<button type="submit" class="btn btn-default" name="save">Save</button>
		</center>
	</div>
	</form>
	<?php echo $pekerja->nama; ?>
</div>
<!-- end profile -->

<!-- javascript -->
	<?php include '../../view/script.php'; 
	if(isset($_POST['save'])){
		$pekerja->update_profile($_POST);
	}

	?>
<!-- javascript -->

</body>
</html>