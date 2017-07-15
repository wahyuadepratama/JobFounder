<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
<title>JobUs | Unit Usaha</title>

<?php include 'view/source2.php'; ?>
<link href="assets/css/style2.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->

</head>
<body>
	<div class="banner">
		<div class="container">
			
			<?php include 'view/header2.php'; ?>

			<div class="w3_banner_info">
				<div class="w3_banner_info_grid">
					<br><br><br><br>
					<h3 class="test">Bergabunglah bersama kami</h3>
					<b><p>Silahkan login jika anda sudah pernah mendaftar sebelumnya. Daftarkan diri anda untuk memposting lowongan pekerjaan atau mencari perkerjaan di JobUs.</p></b>
				</div>
				<div class="w3_banner_info_grid">
					<ul>
						<li><a href="#" class="w3l_contact" data-toggle="modal" data-target="#myModal2">Login</a></li>
						<li><a href="#" class="w3ls_more" data-toggle="modal" data-target="#myModal">Daftar Baru</a></li>
					</ul><br>
				</div>
				<br>
			</div><br><br><br><br><br><br>
		</div>
	</div>

	<!-- pop up sign up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
		</div>

		<div class="w3layouts-main" > 
			<div class="agilesign-form">  
				<div class="agileits-top">
					<form action="" method="post">

						<div class="styled-input w3ls-text">
						<input type="text" name="username" required=""/>
							<label>Username</label>
							<span></span>
						</div>
						<div class="styled-input w3ls-text">
							<input type="text" name="email" required=""/>
							<label>Email ID</label>
								<span></span>
						</div>
						<div class="styled-input w3ls-text">
							<input type="text" name="no_handphone" required=""/>
							<label>No Handphone</label>
								<span></span>
						</div>
						<div class="styled-input w3ls-text">
							<input type="password" name="password" required=""> 
							<label>Password</label>
							<span></span>
						</div> 
						<div class="styled-input w3ls-text">
							<input type="password" name="confirm" required=""> 
							<label>Confirm Password</label>
							<span></span>
						</div><br>
						<div class="form-group">
							  <select class="form-control" id="opsi1" name="opsi1">
							    <option value="0">Siapakah Anda ?</option>
							    <option value="1">Individu / Pemilik Usaha Yang Butuh Pekerja</option>
							    <option value="2">Pencari Lowongan Kerja</option>
							  </select>
						</div>
						<div class="wthree-text">  
							<p>
							<input type="checkbox" id="brand" value="" required="">
							<label for="brand"><span></span>I accept the terms of use</label>  
							</p>  
						</div>
						<div class="agileits-bottom"> 
							<input type="submit" value="Sign Up" name="sign"> 
						</div>	
					</form>
				</div> 
			</div>	
		</div>
	</div>
	<!-- //pop up sign up -->

	<!-- pop up login -->
	<div class="modal video-modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
		</div>

		<div class="w3layouts-main" > 
			<div class="agilesign-form">  
				<div class="agileits-top">
					<form action="" method="post">						
						<div class="styled-input w3ls-text">
							<input type="text" name="lusername" required=""/>
							<label>Username / Email</label>
							<span></span>
						</div>
						<div class="styled-input w3ls-text">
							<input type="password" name="lpassword" required=""> 
							<label>Password</label>
							<span></span>
						</div> 
						<div class="form-group">
							  <select class="form-control" id="opsi2" name="opsi2">
							    <option value="0">Siapakah Anda ?</option>
							    <option value="1">Individu / Pemilik Usaha Yang Butuh Pekerja</option>
							    <option value="2">Pencari Lowongan Kerja</option>
							  </select>
						</div>
						<div class="agileits-bottom"> 
							<input type="submit" value="Login" name="login"> 
						</div>	
					</form>
				</div> 
			</div>	
		</div>
	</div>
	<!-- //pop up login -->

	<!-- javascript -->
		<?php include 'view/script2.php'; ?>
	<!-- javascript -->
</body>
</html>

<?php 

// SIGNUP
	require_once 'controller/koneksi.php';
	require_once 'controller/class.script.php';
	require_once 'controller/class.pengiklan.php';
	require_once 'controller/class.pekerja.php';

	$pengiklan = new pengiklan();
	$pekerja = new pekerja();
	$script = new function_script();

	if(isset($_POST['sign']))
	{
		if($_POST['opsi1']==0)
		{
			$script->alert_warning('Gagal Mendaftar','Anda tidak mengisi data dengan lengkap!');
		}
		else
		{

		//cek opsi yang dipilih apakah pengiklan atau pekerja
			try {
				if($_POST['opsi1']==1)
				{
					$objek = $pengiklan;
					$lokasi = 'dashboard/pemilik-lowongan/profile.php';
				}
				elseif ($_POST['opsi1']==2) 
				{
					$objek = $pekerja;
					$lokasi = 'dashboard/pekerja/profile.php';
				}

				$objek->username = $_POST['username'];
				$objek->email = $_POST['email'];
				$objek->no_hp = $_POST['no_handphone'];
				$objek->password = md5($_POST['password']);

				$objek->insert_data();
				$script->redirect($lokasi);
				
			} catch (Exception $e) {
				$script->alert_warning('Gagal Mendaftar','username atau email sudah digunakan');
			}

		}
		
	}


// LOGIN

	if(isset($_POST['login']))
	{
		if($_POST['opsi2']==0)
		{
			$script->alert_warning('Gagal Login','Anda tidak mengisi pilihan dengan benar!');
		}
		else
		{

		//cek opsi yang dipilih apakah pengiklan atau pekerja

			if($_POST['opsi2']==1)
			{
				$result = $pengiklan->cek_login($_POST);
				$lokasi = 'dashboard/pemilik-lowongan/profile.php';
			}
			elseif ($_POST['opsi2']==2) 
			{
				$result = $pekerja->cek_login($_POST);
				$lokasi = 'dashboard/pekerja/profile.php';
			}

			//cek status apakah true atau false
				if(!$result['status'])
				{ 
					$script->alert_warning('Gagal Login','Username atau Password Anda Mungkin Salah'); 
				}
				else
				{					
					$_SESSION['user'] = $result['data'];
					$_SESSION['row'] = '';
					$script->redirect($lokasi);

				}
		}
	}

 ?>