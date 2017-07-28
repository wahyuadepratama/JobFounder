<?php 
  session_start();
  require_once '../../controller/koneksi.php';
  require_once '../../controller/class.session.php';
  require_once '../../controller/class.script.php';
  require_once '../../controller/class.pengiklan.php';

  $session = new function_session();
  $pengiklan = new pengiklan();
  $script = new function_script();

  $session->pengiklan();
  $result = $pengiklan->get_profile_id($_SESSION['user']['id_pengiklan']);
  $pengiklan->set_all_property($result['data']);
  $daerah=$pengiklan->get_daerah();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>

	<title> Profile Pengiklan </title>
	<?php include("../../view/source.php"); ?>
     <link rel="stylesheet" type="text/css" href="../../assets/css/cssme-com.css">
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
      <a class="navbar-brand"><img class="img-responsive" src="../../assets/images/coin-small.png"></a><a class="coin"><?php echo $pengiklan->get_koin($_SESSION['user']['id_pengiklan']) ?></a>
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
		<img src="<?php 
			if($pengiklan->foto_profile!=null){
				echo 'profile/'.$pengiklan->foto_profile;
			}else{
				echo '../../assets/images/invest.PNG';
			}
	 	?>" class="img-circle img-responsive" width="200"><br>
	</center>
	<br>
		
	
	<div class="container table-responsive">
	  <table class="table table-striped tabpad">
	       <tr>
	           <th class="text-left">Nama Pemilik </th>
	           
	           <td class="text-left"><?php echo $pengiklan->nama; ?></td>
	       </tr>
	       <tr>
	           <th class="text-left">Deskripsi</th>
	           
	           <td class="text-left"><?php echo $pengiklan->deskripsi; ?></td>
	       </tr>
	       <tr>
	           <th class="text-left">Alamat Email</th>
	           
	           <td class="text-left"><?php echo $pengiklan->email; ?></td>
	       </tr>
	       <tr>
	           <th class="text-left">Telepon/Fax</th>
	           
	           <td class="text-left"><?php echo $pengiklan->no_hp; ?></td>
	       </tr>
	       <tr>
	           <th class="text-left">Sosial Media</th>
	           
	           <td class="text-left"><?php echo $pengiklan->sosmed; ?></td>
	       </tr>
	       <tr>
	           <th class="text-left">Provinsi</th>
	           
	           <td class="text-left"><?php echo $daerah[0]['lokasi_nama']; ?></td>
	       </tr>
	       <tr>
	           <th class="text-left">Kota</th>
	           
	           <td class="text-left"><?php echo $daerah[1]['lokasi_nama']; ?></td>
	       </tr>
	       <tr>
	           <th class="text-left">Kecamatan</th>
	           
	           <td class="text-left"><?php echo $daerah[2]['lokasi_nama']; ?></td>
	       </tr>
	       <tr>
	           <th class="text-left">Alamat Perusahaan / Pemilik Pekerjaan</th>
	           
	           <td class="text-left"><?php echo $pengiklan->alamat; ?></td>
	       </tr>

	  </table>
	  <br>
	  </div>
	

<form method="post">
	<div class="form-group">
		<center>
		    <button class="btn btn-default"><a href="edit-profile.php">Edit</a></button>
			<button class="btn btn-danger btn-sm" name="logout">Logout</button>
		</center>
	</div>
</form>
<br>
</div>
<!-- end profile -->

<!-- FOOTER -->
<?php include '../../view/footer2.php'; ?>
<!-- //FOOTER -->

<!-- javascript -->
	<?php include '../../view/script.php'; ?>
<!-- javascript -->


</body>
</html>