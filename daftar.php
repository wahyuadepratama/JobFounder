<?php 
	session_start();
	require_once 'controller/koneksi.php';
	require_once 'controller/class.script.php';
	require_once 'controller/class.session.php';
	require_once 'model/class.pengiklan.php';
	require_once 'model/class.pekerja.php';

	require_once 'controller/validator.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>JobUs | Daftar</title>
	<?php include 'view/head.php'; ?>
	<link rel="stylesheet" type="text/css" href="assets/css/style-login.css">
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->
</head>
<body id="style-3">

	 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a href="index.php"><img class="img-responsive" src="assets/images/logo-lands.png"></a>
        </div>
        <div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="home.php">home</a></li>
              <li><a href="lowongan.php">find jobs</a></li>
              <li><a href="about.php">about</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

   <div class="container main-cont">
   <h3>Sudah kah Anda Bergabung dengan <span class="jobus"> JobUs</span>?</h3>
       <div class="col-md-6 login-cont">
          <h4>Judul</h4>
          <div class="underline"></div>
       	<p>Silakan menekan tombol sign ini dibawah untuk masuk dan menggunakan fitur JobUs</p>
       	<button class="btn sign-in" data-toggle="modal" data-target="#loginModal">sign in</button>
         

       </div>
       <div class="col-md-6 signup-cont">
       	<h4>Judul</h4>
        <div class="underline"></div>
        <p><i class="fa fa-check" aria-hidden="true"></i> Temukan orang yang bisa membantu pekerjaan anda<br>
          <i class="fa fa-check" aria-hidden="true"></i> Cari pekerjaan dengan mudah<br>
          <i class="fa fa-check" aria-hidden="true"></i> Temukan pekerja berkualitas untuk pekerjaan anda<br>
          <i class="fa fa-check" aria-hidden="true"></i> Daftarkan diri anda secara gratis<br>
          <i class="fa fa-check" aria-hidden="true"></i> blabla just contoh</p>
        <button class="btn sign-up" data-toggle="modal" data-target="#signupModal">sign up</button>
      
       </div>
    </div>
     <div class="container content-two">
        <img src="assets/images/bg-login.png" class="img-responsive center-block">
     </div>
     <!-- <div class="container footer">
       <ul class="list-inline">
         <li><a>Copyright © 2017</a></li>
       </ul>
     </div> -->
     <!-- FOOTER -->
    <div id="information" class="container-fluid">
       <ul class="list-inline" style="">
              <li><a href="#section1">Home</a></li>
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
    <!-- ENDFOOTER -->

    <!-- Login Modal -->
          <div id="loginModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Login Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title text-center">Login ke <span class="jobus">JobUs</span></h4>
                </div>
                <div class="modal-body">
                  <form action="" method="post">  
                  <div class="lebar">          
                  <div class="form-group">
                    <label>Username / Email</label>
                    <input type="text" name="lusername" class="form-control lebar" required=""/>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="lpassword" class="form-control" required=""> 
                  </div> 
                  <div class="form-group">
                  <label>Siapakah Anda?</label>
                      <select class="form-control" id="opsi2" name="opsi2">
                        <option value="0"></option>
                        <option value="1">Individu / Pemilik Usaha Yang Butuh Pekerja</option>
                        <option value="2">Pencari Lowongan Kerja</option>
                      </select>
                  </div>
                  <div class="button-login"> 
                    <input type="submit" value="sign in" name="login" class="btn btn-default"> 
                  </div>  
                  </div>
                </form>
                </div>
                <div class="modal-footer">
                  <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                </div>
              </div>

            </div>
          </div>
 	
  <!-- Sign Up Modal -->
          <div id="signupModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Sign Up Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title text-center">Bergabung dengan <span class="jobus">JobUs</span></h4>
                </div>
                <div class="modal-body" style="text-align:left">
                  <form action="post">
                     <div class="form-group">
                      <label style="text-align:left;">Username</label>
                      <input type="text" name="username" class="form-control" required="">
                     </div>
                     <div class="form-group">
                      <label>E-mail ID</label>
                      <input type="text" name="email" class="form-control" required="">
                     </div>
                     <div class="form-group">
                      <label>Phone Number</label>
                      <input type="text" name="no_handphone" class="form-control" required="">
                     </div>
                     <div class="form-group">
                      <label>Password</label>
                      <input type="text" name="password" class="form-control" required="">
                     </div>
                     <div class="form-group">
                      <label>Confirm Password</label>
                      <input type="text" name="confirm" class="form-control" onchange="cek_pass();" required="">
                     </div>
                     <div class="form-group">
                     <label>Siapakah Anda?</label>
                      <select class="form-control" id="opsi1" name="opsi1" required="">
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
              <input type="submit" value="sign up" name="sign" class="btn btn-default"> 
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
                <div class="modal-footer">
                  <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                </div>
              </div>

            </div>
          </div>
<!-- ====================================================================================== -->
   
    <!-- <div class="container-fluid login-page">
		<div class="container login-menu">
			  <div class="pull-left logo-menu"> 
		          <img src="assets/images/logo-lands.png" class="img-responsive">
		      </div>
		   	  <div class="pull-right sign-menu">
		          <ul class="list-inline">
		             <li><a href="#register" class="show-register-form active">sign up</a></li>
		             |
		             <li><a href="#login" class="show-login-form">sign in</a></li>
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
                   <div class="col-md-5 side-right"> -->
                    <!-- <p><h4>Bergabunglah dengan JobUs!</h4><br>
                    	<ul>
                    		<li>Temukan pekerjaanmu disini</li>
                    		<li>blablabla</li>
                    	</ul>
                    </p> -->
                   	  <!-- <p>Already have an account?<br>
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
 -->

<!-- ======================================================================================================== -->
		
</body>
</html>

