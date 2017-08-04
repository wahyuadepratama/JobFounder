<?php 
  session_start();
  require_once '../../controller/koneksi.php';
  require_once '../../controller/class.session.php';
  require_once '../../model/class.postingan.php';
  require_once '../../model/class.pengiklan.php';
  require_once '../../model/class.lowongan.php';
  require_once '../../model/class.pekerja.php';
  require_once '../../controller/class.script.php';

  $session = new function_session();
  $pengiklan = new pengiklan();
  $postingan = new postingan();
  $lowongan = new lowongan();
  $pekerja = new pekerja();
  $script = new function_script();

  $data = $postingan->select_by_pengiklan();
  $session->pengiklan();
  $result = $pengiklan->get_profile_id($_SESSION['user']['id_pengiklan']);
  $pengiklan->set_all_property($result['data']);

  if(isset($_POST['terima'])){
    $postingan->accept_submit($_POST['id_terima'],$_POST['id_pos']);
    $script->redirect('list-posting');
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>

  <title> JobUs | Employee </title>
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
    <h4>Lihat pekerja yang telah mensubmit lowongan perusahaanmu disini. Lihat CV mereka, terima jika memenuhi persyaratan, dan kontak mereka untuk melakukan wawancara.</h4>

    <br>

    <?php include '../../controller/include.pengiklan.list-posting.php'; ?>

  </div>
  <?php include '../../view/footer.php'; ?>
<!-- =================================================================================================================================== -->



</body>
</html>