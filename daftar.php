<?php 
	session_start();
	require_once 'controller/koneksi.php';
	require_once 'controller/class.script.php';
	require_once 'model/class.pengiklan.php';
	require_once 'model/class.pekerja.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>JobUs | Daftar</title>
	<?php include 'view/head.php'; ?>
	<link rel="stylesheet" type="text/css" href="assets/css/login-page.css">

	<link href="assets/css/style2.css" rel="stylesheet" type="text/css" media="all" />
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->
</head>
<body>
   
    <div class="container-fluid login-page">
		<div class="container login-menu">
			  <div class="pull-left logo-menu"> 
		          <img src="assets/images/logo-lands.png" class="img-responsive">
		      </div>
		   	  <div class="pull-right sign-menu">
		          <ul class="list-inline">
		             <li><a href="#register" class="show-register-form active">Sign Up</a></li>
		             |
		             <li><a href="#login" class="show-login-form">Sign In</a></li>
		          </ul>
		      </div>
	    </div>
	</div>

		<div class="container login-container">
                <div class="row register-form" id="#register">
                 <div class="col-md-8">
                	<div class="welcome-sign">
		                  <h3>Welcome to JobUs!</h3>
		            </div>
                   <form action="post">
                   	 <div class="form-group">
                   	 	<label>Username</label>
                   	 	<input type="text" name="username" class="input-name" required="">
                   	 </div>
                   	 <div class="form-group">
                   	 	<label>E-mail ID</label>
                   	 	<input type="text" name="email" class="input-name" required="">
                   	 </div>
                   	 <div class="form-group">
                   	 	<label>Phone Number</label>
                   	 	<input type="text" name="no_handphone" class=" input-name" required="">
                   	 </div>
                   	 <div class="form-group">
                   	 	<label>Password</label>
                   	 	<input type="text" name="password" class="input-name" required="">
                   	 </div>
                   	 <div class="form-group">
                   	 	<label>Confirm Password</label>
                   	 	<input type="text" name="confirm" class="input-name" onchange="cek_pass();" required="">
                   	 </div>
                   	 <div class="form-group">
                   	 <label>Siapakah Anda?</label>
                   	 	<select class="input-name" id="opsi1" name="opsi1" required="">
							    <option value="0"></option>
							    <option value="1">Individu / Pemilik Usaha Yang Butuh Pekerja</option>
							    <option value="2">Pencari Lowongan Kerja</option>
							  </select>
                   	 </div>
                   	 <div>  
							<p>
							<input type="checkbox" id="brand" value="" required="">
							<label for="brand"><span></span>I accept the terms of use</label>  
							</p>  
						</div>
						<div class="button-register"> 
							<input type="submit" value="Sign Up" name="sign" class="btn btn-default"> 
						</div>	
                   </form>
                    <script type="text/javascript">
					    function cek_pass(){
						    p1 = document.frm.password.value;
						    p2 = document.frm.confirm.value;
					    	if(p1==p2) {
					        	document.frm.sign.disabled=false;
						    } else {
					   			document.frm.sign.disabled=true;				    	
						        swal("Cek Lagi !", "Konfirmasi password harus sama");
							}
					    }
					</script>
                   </div>
                   <div class="col-md-5 side-right">
                    <!-- <p><h4>Bergabunglah dengan JobUs!</h4><br>
                    	<ul>
                    		<li>Temukan pekerjaanmu disini</li>
                    		<li>blablabla</li>
                    	</ul>
                    </p> -->
                   	  <p>Already have an account?<br>
						<a href="">Sign in here</a>
					  </p>
                   </div>
                </div>
                
                <div class="row login-form" id="login">
                <div class="col-md-8">
                <div class="welcome-sign">
                  <h3>Login to JobUs</h3>
                 </div>
                     <form action="" method="post">						
						<div class="form-group">
							<label>Username / Email</label>
							<input type="text" name="lusername" class=" input-name" required=""/>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="lpassword" class=" input-name" required=""> 
						</div> 
						<div class="form-group">
						<label>Siapakah Anda?</label>
							  <select class="input-name" id="opsi2" name="opsi2">
							    <option value="0"></option>
							    <option value="1">Individu / Pemilik Usaha Yang Butuh Pekerja</option>
							    <option value="2">Pencari Lowongan Kerja</option>
							  </select>
						</div>
						<div class="button-login"> 
							<input type="submit" value="Login" name="login" class="btn btn-default"> 
						</div>	
					</form>
                </div>
                <div class="col-md-4 side-right">
                   	  <p>Don't have an account?<br>
						<a href="login-or-signup.php">Sign up now for free</a>
					  </p>
					  <p>Forgot your password?<br>
						<a href="">Reset it here</a></p>
                   </div>
              </div>
		</div>
		<!-- FOOTER -->
		<div class="container footer-login-page">
			<ul class="list-inline" style="">
              <li><a href="index.php">Home</a></li>
              <li><a href="#section2">Find Jobs</a></li>
              <li><a href="#section3">Join</a></li>
              <li><a href="#section4">About</a></li>
        	</ul>
	        <ul class="list-inline" style="">
	              <li><a href="#section1"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
	              <li><a href="#section2"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
	              <li><a href="#section3"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
	              <li><a href="#section4"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
	        </ul>

        	<p>Copyright © 2017</p>

		</div>
    </div>

    	<script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>


<!-- ======================================================================================================== -->
		
</body>
</html>

<?php require_once 'controller/validator.php'; ?>