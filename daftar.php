<!DOCTYPE html>
<html>
<head>
<title>JobUs | Unit Usaha</title>

<?php include 'view/source.php'; ?>
<link href="assets/css/style2.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->

</head>
<body>
	<div class="banner">
		<div class="container">
			
			<?php include 'view/header.php'; ?>

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
					<form action="dashboard/company/perusahaan.php" method="post">

						<div class="styled-input w3ls-text">
						<input type="text" name="User Name" required=""/>
							<label>Username</label>
							<span></span>
						</div>
						<div class="styled-input w3ls-text">
							<input type="text" name="email" required=""/>
							<label>Email ID</label>
								<span></span>
						</div>
						<div class="styled-input w3ls-text">
							<input type="text" name="email" required=""/>
							<label>No Handphone</label>
								<span></span>
						</div>
						<div class="styled-input w3ls-text">
							<input type="password" name="Password" required=""> 
							<label>Password</label>
							<span></span>
						</div> 
						<div class="styled-input w3ls-text">
							<input type="password" name="Password" required=""> 
							<label>Confirm Password</label>
							<span></span>
						</div><br>
						<div class="form-group">
							  <select class="form-control" id="sel2">
							    <option value="">Siapakah Anda ?</option>
							    <option value="">Pemilik Perusahaan dan Butuh Karyawan</option>
							    <option value="">Pengguna Jasa dan Butuh Pekerja Freelance</option>
							    <option value="">Pencari Lowongan Kerja</option>
							  </select>
						</div>
						<div class="wthree-text">  
							<p>
							<input type="checkbox" id="brand" value="" required="">
							<label for="brand"><span></span>I accept the terms of use</label>  
							</p>  
						</div>
						<div class="agileits-bottom"> 
							<input type="submit" value="Sign Up"> 
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
					<form action="dashboard/freelance/penggunajasa.php" method="post">
						<div class="styled-input w3ls-text">
							<input type="text" name="User_Name" required=""/>
							<label>Username / Email</label>
							<span></span>
						</div>
						<div class="styled-input w3ls-text">
							<input type="password" name="Password" required=""> 
							<label>Password</label>
							<span></span>
						</div> 
						<div class="agileits-bottom"> 
							<input type="submit" value="Login"> 
						</div>	
					</form>
				</div> 
			</div>	
		</div>
	</div>
	<!-- //pop up login -->

	<!-- javascript -->
		<?php include 'view/script.php'; ?>
	<!-- javascript -->
</body>
</html>