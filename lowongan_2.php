<?php 
  session_start();
  require_once 'controller/koneksi.php';
  require_once 'model/class.postingan.php';
  require_once 'controller/class.script.php';

  $postingan = new postingan();
  $script = new function_script();

  include 'controller/include.lowongan.post.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <title>JobUs | Lowongan Kerja</title>
  <?php include 'view/head.php'; ?>
   <link rel="stylesheet" type="text/css" href="assets/css/style-login.css">
   <!-- <link rel="stylesheet" type="text/css" href="assets/css/style.css"> -->

</head>
  
<body>
<!-- NAVBAR -->
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
              <?php include '/controller/include.daftar.or.dashboard.php';?>
              <li><a href="#section4">about</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
   <!-- END NAVBAR-->
   <div class="container main-content" id="startchange">
      <h3><span>Cari Lowongan Kerja Disini</span></h3>
      <p>Pilih kategori yang anda inginkan untuk hasil yang lebih spesifik</p> 

    <link rel="stylesheet" href="assets/css/jquery-ui.css"/>
    <script src="assets/js/jquery-ui.js"></script>

    <script>
/*autocomplete muncul setelah user mengetikan minimal2 karakter */
    $(function() {  
        $( "#search" ).autocomplete({
         source: "model/JSON_kategori.php",  
           minLength:1, 
        });
    });
    </script>

  <div class="ui-widget">
    <label for="search">Pekerjaan : </label>
    <input id="search"  />
  </div> 

      <?php include 'controller/include.lowongan.table.php'; ?>

      <?php include 'controller/include.lowongan.navigator.php'; ?>
   </div>

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


</body>
</html>