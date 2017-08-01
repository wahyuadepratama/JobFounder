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
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <title> JobUs | Employee </title>
  <?php include '../../view/source.php'; ?>

</head>
  
<body>
<!-- banner -->
  <div class="banner1">
    <div class="container">
      
      <?php include '../../view/header.php'; ?>

    </div>
  </div>
<!-- banner -->

<!-- dashboard -->
<br>
<div class="container menu-nav">
<!-- MAKAN BANG -->
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
        <li role="presentation" class="noac"><a href="new-posting.php">New Posting</a></li>
        <li role="presentation"  class="active"><a href="list-posting.php">List Posting</a></li>
        <li role="presentation" class="noac"><a href="profile.php">Profile</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
<!-- //dashboard -->

<div class="container employ">
  <h4>Lihat pekerja yang telah mensubmit lowongan perusahaanmu disini. Lihat CV mereka, terima jika memenuhi persyaratan, dan kontak mereka untuk melakukan wawancara.</h4>
</div>

<br>
  <?php include '../../controller/include.pengiklan.list-posting.php'; ?>

<br>
<br>
<!-- FOOTER -->
  <?php include '../../view/footer2.php'; ?>

<!-- javascript -->
  <?php include '../../view/script.php'; ?>


</body>
</html>

<?php
  if(isset($_POST['terima'])){
    $postingan->accept_submit($_POST['id_terima'],$_POST['id_pos']);
    $script->redirect('list-posting');
  }
?>