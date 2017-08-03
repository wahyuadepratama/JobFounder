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
		      <img class="img-responsive" src="assets/images/logo-lands.png">
		    </div>
		    <div>
		      <div class="collapse navbar-collapse" id="myNavbar">
		        <ul class="nav navbar-nav navbar-right">
		          <li><a href="home.php">home</a></li>
		          <li><a href="lowongan.php">find jobs</a></li>
		          <?php 

										if(isset($_SESSION['pekerja'])){
											echo "<li><a href='dashboard/pekerja/profile.php'>dashboard</a></li>";	
										}elseif(isset($_SESSION['pengiklan'])){
											echo "<li><a href='dashboard/pengiklan/profile.php'>dashboard</a></li>";
										}else{
											echo "<li><a href='daftar.php'>sign in</a></li>";
										} 
										
									?>
		          <li><a href="about">about</a></li>
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
        <h3 >BIARKAN ORANG LAIN MEMBANTU PEKERJAAN ANDA</h3><br>
          <p class="ju_info_fts">Kami membantu semua orang untuk mengiklankan lowongan kerja dan memberikan kesempatan kepada siapapun untuk mengambil peluang kerja tersebut.</p>
          <br>
    </div>
      
    </div>
    </div>
   
    <div id="section3" class="container-fluid">
    <div class="container ju_sec">
        <h3>ABOUT<span class="ju_line"> JobUs</span></h3>
        <div class="under_line"></div>
    
      <p class="ju_jobus_what">JobUs adalah sebuah aplikasi iklan dan pencarian lowongan kerja yang cepat dan dan tidak terbatas pada jenis pekerjaan. <span class="ju_line">JobUs</span> memberikan kemudahan bagi setiap orang untuk bisa mengiklankan lowongan dalam bentuk apapun, dan bisa dikerjakan oleh siapapun. <span class="ju_line">JobUs</span> bisa anda gunakan untuk mencari seseorang yang bisa membantu mengerjakan pekerjaan anda, atau bagi anda yang ingin mencari pekerjaan yang bisa langsung anda kerjakan tanpa harus jauh-jauh menuju lokasi kerja.</p>
    </div> 
    </div>

    <div id="section2" class="container-fluid">
      <div class="col-md-4">
        <div class="panel panel-default hideme3">
          <div class="panel-heading one">
           
          </div>
          <div class="panel-body">
             <h4>Anda Butuh Bantuan Kerja ?</h4>
            <p>Anda memiliki sebuah pekerjaan dan butuh orang lain untuk membantu anda ? temukan orang itu disini.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="panel panel-default hideme2">
          <div class="panel-heading two">
             
          </div>
          <div class="panel-body">   
          <h4>Anda Butuh Pekerjaan ?</h4>   
            <p>Anda ingin mencari penghasilan tambahan dengan cepat ? bergabunglah dengan JobUs dan temukan lowongan yang anda butuhkan.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="panel panel-default hideme">
        <div class="panel-heading three">
             
          </div>
          <div class="panel-body">

          <h4>Anda Butuh Pekerja Berkualitas ?</h4>
            <p>Jika sebuah perusahaan sedang mencari karyawan yang berkualitas, maka JobUs adalah tempat yang tepat.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid more">
       <div class="col-md-6 one">
         <div class="ju_title2">
          <h3>Temukan Orang Yang Bisa Membantu Anda</h3>
          <div class="under_line"></div>
          </div>
          <p>Bagi anda yang butuh bantuan untuk mengerjakan pekerjaan seperti : membersihkan rumah, membersihkan kebun, membuat desain logo/poster acara, mengantarkan galon, mencek tugas, mengajar les private, membuat video dan lain sebagainya. Maka anda bisa menguploadnya dalam bentuk iklan di JobUs, nantinya orang-orang yang melihat iklan anda akan mensubmit jika mereka merasa bisa membantu anda. Nah, anda tinggal buka akun, cek menu employee dan lihat siapa saja yang telah mensubmit. Setelah merasa menemukan orang yang tepat, anda tinggal menghubunginya.</p>
        </div>
        <div class="col-md-6 para_one">
          
        </div>

    </div>

<div class="container-fluid more_two">

    <div class="col-md-6 para_dua">
    
    </div>
     <div class="col-md-6 dua">
        <div class="ju_title3">
        <h3>Cari Pekerjaan</h3>
        <div class="under_line"></div>
       </div>
       <p>Bagi anda yang butuh bantuan untuk mengerjakan pekerjaan seperti : membersihkan rumah, membersihkan kebun, membuat desain logo/poster acara, mengantarkan galon, mencek tugas, mengajar les private, membuat video dan lain sebagainya. Maka anda bisa menguploadnya dalam bentuk iklan di JobUs, nantinya orang-orang yang melihat iklan anda akan mensubmit jika mereka merasa bisa membantu anda. Nah, anda tinggal buka akun, cek menu employee dan lihat siapa saja yang telah mensubmit. Setelah merasa menemukan orang yang tepat, anda tinggal menghubunginya.</p>
     </div>

</div>

<div class="container-fluid more_three">
     <div class="col-md-6 one">
        <div class="ju_title3">
          <h3>Temukan Pekerja Berkualitas</h3>
          <div class="under_line"></div>
       </div>
       <p>Bagi anda yang memiliki usaha bisnis / perusahaan yang membutuhkan karyawan yang berkualitas. Anda bisa menggunakan koin yang ada pada JobUs untuk beriklan. Dengan fitur ini setiap karyawan yang mensubmit harus mengupload CV mereka terlebih dahulu, jadi anda bisa melihat kualitas mereka dari CV yang diupload. Selain itu anda bisa mendowload langsung CV mereka dari halaman employee anda, jadi anda tidak perlu lagi menggunakan pengiriman CV ataupun email. Setiap koin bisa anda gunakan untuk mengupload lowongan selama 1 hari, dan harga koin itu sendiri sangatlah murah.</p>
     </div>
     <div class="col-md-6 para_three">
          
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