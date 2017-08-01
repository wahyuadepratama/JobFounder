<?php 
  session_start();
  require_once '../../controller/koneksi.php';
  require_once '../../controller/class.session.php';
  require_once '../../controller/class.script.php';
  require_once '../../model/class.pengiklan.php';

  $session = new function_session();
  $pengiklan = new pengiklan();
  $script = new function_script();

  $session->pengiklan();
  $result = $pengiklan->get_profile_id($_SESSION['user']['id_pengiklan']);
  $pengiklan->set_all_property($result['data']);

	if(isset($_POST['save'])){
		$pengiklan->set_profile_post();
		$script->redirect('profile');
	}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>

	<title> Edit Profile </title>
	<?php include("../../view/head-user.php"); ?>
	<link rel="stylesheet" type="text/css" href="../../assets/css/style-user.css">

</head>
	
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
		  <div class="container">
		    <div class="navbar-header">
		        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		      </button>
		      <img class="img-responsive" src="../../assets/images/logo-lands.png">
		    </div>
		    <div>
		      <div class="collapse navbar-collapse" id="myNavbar">
		        <ul class="nav navbar-nav navbar-right">
		          
		          <li><a href="list-posting.php">Employee</a></li>
		          <li><a href="new-posting.php">Upload</a></li>
		          <li class="dropdown satu">
		          <a class="dropdown-toggle satu" data-toggle="dropdown" href="#">
			        <img src="../../assets/images/yola-small.jpg" width="25" class="img-responsive img-rounded profile-pic"><b class="caret"></b>      
		          </a>
		            <ul class="dropdown-menu">
		              <li><a href="profile.php" class="active">Profile</a></li>
		              <li><a href="#">Log out</a></li>
		            </ul>
		          </li>
		          <li><a class="dua" href="profile.php">Profile</a></li>
		          <li><a class="dua" href="#section3">Log out</a></li>
		        </ul>
		      </div>
		    </div>
		  </div>
	</nav>
	<div class="container main-content" id="startchange">
   
        <form method="post">
            <center>
               <img src="<?php
					if($pengiklan->foto_profile!=null){
						echo 'profile/'.$pengiklan->foto_profile;
					}else{
						echo '../../assets/images/invest.PNG';
					}		
				 ?>" class="img-circle img-responsive" width="200"><br>
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
                 <option >No Selected</option>
                 </select>
            </div>
            <div class="form-group">
                 <label for="kota">Kota</label>
                 <select class="form-control" id="sel2" name="kota">
                   <option >No Selected</option>
                 </select>
            </div>
            <div class="form-group">
                 <label for="kec">Kecamatan</label>
                 <select class="form-control" id="sel2" name="kecamatan">
                   <option >No Selected</option>
                 </select>
            </div>
            <div class="form-group">
                 <label for="alamat">Alamat Perusahaan / Pemilik Pekerjaan</label>
                 <textarea class="form-control" rows="5" id="req" name="alamat" placeholder="ex: Jl Khatib Sulaiman no 32 / Komplek perumahan kolam indah mata air no 12"><?php echo $pengiklan->alamat ?></textarea>
            </div>
            

            <div class="form-group">
            <center>
               <button class="btn btn-default" name="save">Save</button>
            </center>
            </div>
         </form>
      
   </div>

   	<?php include('../../view/footer.php') ?>
<!-- =================================================================================================================== -->


<!-- profile -->
<!-- <br>
	<div class="container">

		<nav class="navbar navbar-default transbg">
		  <div class="container-fluid">
		  
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand"><img class="img-responsive" src="../../assets/images/coin-small.png"></a><a class="coin"><?php // echo $pengiklan->get_koin($_SESSION['user']['id_pengiklan']) ?></a>
		    </div> -->

		


</body>
	<script type="text/javascript" src="../../assets/js/lokasi.js"></script>
</html>