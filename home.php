<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>JobUs | Home </title>
	<?php include 'view/head.php'; ?>
 	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
	
<body id="style-3">

<!-- NAVBAR -->
<div class="container-fluid">
  <nav class="navbar navbar-inverse navbar-fixed-top">
		  <div class="container-fluid">
		    <div class="navbar-header">
		        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		      </button>
          <button type="button" class="navbar-toggle join-now">join now</button>
		      <img class="img-responsive" src="assets/images/logo-lands.png">
		    </div>
		    <div>
		      <div class="collapse navbar-collapse" id="myNavbar">
		        <ul class="nav navbar-nav navbar-right">
		          <li><a href="home.php">home</a></li>
		          <li><a href="lowongan.php">find jobs</a></li>
		          <?php include '/controller/include.daftar.or.dashboard.php';?>
		          <li><a href="about.php">about</a></li>
              <li><button type="button" class="btn join-now">join now</button></li>
		        </ul>
		      </div>
		    </div>
		  </div>
		</nav>
</div>
   <!-- END NAVBAR-->
   <!-- CONTENT -->
   
<div id="section1" class="container-fluid">
      <div class="container" id="startchange">
       <div class="container item">
        <h3>SOLUSI DALAM MENYELESAIKAN PEKERJAAN</h3>
        <h3>SOLUSI DALAM MENCARI PEKERJAAN</h3>
          <p class="ju_info_fts">Kami membantu semua orang untuk menyelesaikan pekerjaan mereka dan memberikan kesempatan kepada siapapun untuk mengambil peluang kerja yang ada.</p>
          <br>
          <a href="#" class="panah_bawah"><i class="fa fa-chevron-down fa-3x" aria-hidden="true"></i></a>
    </div>
      
    </div>
    </div>
   
    <div id="section3" class="container-fluid">
    <div class="container ju_sec">
        <h3>Apa itu<span class="ju_line"> JobUs</span></h3>
        <div class="under_line"></div>
    
      <p class="ju_jobus_what"><span class="ju_line">JobUs</span> adalah sebuah aplikasi yang dibuat khusus untuk anda yang memiliki kendala dalam pekerjaan, peralatan kerja, maupun mencari partner kerja. <span class="ju_line">JobUs</span> akan membantu anda memilih seperti apa kriteria pekerja yang anda cari, membantu anda menemukan orang yang memiliki peralatan yang anda butuhkan, bahkan bisa membantu anda menemukan seorang partner. Selain itu, <span class="ju_line">JobUs</span> juga menjadi solusi bagi para freelancer yang butuh pekerjaan cepat dengan lokasi yang terjangkau.</p>
    </div> 
    </div>

    <div id="section2" class="container-fluid">
      <div class="col-md-4">
        <div class="panel panel-default hideme3">
          <div class="panel-heading one">
           
          </div>
          <div class="panel-body">
             <h4>Anda tidak punya waktu ?</h4>
            <p>Anda terlalu sibuk sampai tidak bisa mengerjakan suatu pekerjaan. Temukan orang yang bisa membantu anda disini.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="panel panel-default hideme2">
          <div class="panel-heading two">
             
          </div>
          <div class="panel-body">   
          <h4>Anda seorang freelancer ?</h4>   
            <p>Anda ingin mencari penghasilan tambahan dilokasi tempat tinggal anda dengan mudah dan cepat. Bergabunglah dengan JobUs</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="panel panel-default hideme">
        <div class="panel-heading three">
             
          </div>
          <div class="panel-body">

          <h4>Anda Butuh Seorang Partner ?</h4>
            <p>Bergabunglah dengan JobUs dan temukan partner anda disini.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid more">
       <div class="col-md-6 one">
         <div class="ju_title2">
          <h3>Selesaikan Pekerjaan</h3>
          <div class="under_line"></div>
          </div>
          <center><p>Berbagilah pekerjaan dengan orang lain. Jangan biarkan diri anda menyelesaikan segalanya sendirian, orang-orang disekitar ada siap untuk membantu. Segera daftarkan diri anda di JobUs sebagai pengguna jasa.</p></center>
        </div>
        <div class="col-md-6 para_one">
          <img src="assets/images/test-trans.png" class="img-responsive">
        </div>

    </div>

<div class="container-fluid more_two">

    <div class="col-md-6 para_dua">
      <img src="assets/images/materials.png" class="img-responsive">
    </div>
     <div class="col-md-6 dua">
        <div class="ju_title3">
        <h3>Temukan Pekerjaan </h3>
        <div class="under_line"></div>
       </div>
       <center><p>Punya skill dibidang tertentu, punya inventaris yang bisa dimanfaatkan, atau punya kenalan dan jaringan yang luas, jangan ragu untuk memanfaatkan semua itu demi memperoleh penghasilan tambahan. Segera daftarkan diri anda di JobUs sebagai pekerja.</p>
     </div>

</div>

<div class="container-fluid more_three">
     <div class="col-md-6 one">
        <div class="ju_title3">
          <h3>Cari Partner</h3>
          <div class="under_line"></div>
       </div>
       <center><p>Anda bisa menemukan partner kerja maupun karyawan bagi perusahaan anda dengan fitur tambahan yang ada di JobUs.</p></center>
     </div>
     <div class="col-md-6 para_three">
          <img src="assets/images/pekerja-berkualitas.png" class="img-responsive">
        </div>
    </div>
  
   <!-- END CONTENT -->


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


	<div id='ScrollToTop'><i class="fa fa-arrow-circle-up fa-5x" aria-hidden="true"></i></div>
	<!-- script -->
	<script type="text/javascript" src="assets/js/scroll-image.js"></script>
	<script type='text/javascript' src="assets/js/smooth-scrollspy.js"></script>
	<script type='text/javascript' src="assets/js/scroll-to-top.js"></script>
	<script type='text/javascript' src="assets/js/navbar-change.js"></script>
	<!-- //script -->

</body>
</html>