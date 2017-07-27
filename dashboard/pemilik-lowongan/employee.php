<?php 
  session_start();
  require_once '../../controller/koneksi.php';
  require_once '../../controller/class.session.php';
  require_once '../../controller/class.postingan.php';
  require_once '../../controller/class.pengiklan.php';
  require_once '../../controller/class.lowongan.php';
  require_once '../../controller/class.pekerja.php';
  require_once '../../controller/class.script.php';

  $session = new function_session();
  $pengiklan = new pengiklan();
  $postingan = new postingan();
  $lowongan = new lowongan();
  $pekerja = new pekerja();
  $script = new function_script();
  $data = $postingan->select_by_pengiklan();

  $session->pengiklan();
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
        <li role="presentation" class="noac"><a href="lowonganbaru.php">New Upload</a></li>
        <li role="presentation"  class="active"><a href="employee.php">Employee</a></li>
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
<?php 
if(count($data) > 0){
  foreach ($data as $row) {
    echo "

<div class='container panel panel-default colaps'>
  <table class='tabpad'>
       <tr>
           <td class='text-left'>Judul</td>
           <td width='20'>:</td>
           <td class='text-left'>".$row['judul']."</td>
       </tr>  
       <tr>
           <td class='text-left'>Waktu upload</td>
           <td>:</td>
           <td class='text-left'>".date('d M Y, g.i', strtotime($row['tanggal']))."</td>
       </tr> 
    </table>         
    <p>Jika lowongan ini sudah terpenuhi, kamu bisa menghapusnya. <button class='btn btn-default'>Hapus</button>&nbsp;<button class='btn btn-default' data-toggle='collapse' data-target='#".$row['id_postingan']."'>Lihat</button></p></div>
    <div class='container table-responsive collapse' id='".$row['id_postingan']."'>
    <table class='table'>
      <th>No</th>
      <th>Employee Name</th>
      <th>CV</th>
      <th>Date Submitted</th>
      <th>Detail Employee</th>
      <th>Status</th>
      <th>Action</th>
    ";
    $submit=$lowongan->select_by_postingan($row['id_postingan']);
    $i = 1;
    if(count($submit)>0){
      foreach ($submit as $rows) {

      $identitas = $pekerja->get_profile_id($rows['id_pekerja']);
      $file_name = $script->get_docs($rows['tanggal'],$identitas['data']['username'],'../../assets/docs/');
        echo " 
        <tbody>
        <form method='post'>
        <td> ".$i." </td>
        <td> ".$identitas['data']['nama']." </td>
        <td>
          <button>
            <a href='../../assets/docs/".$file_name."' download=>Click to Download!</a>
          </button>
        </td>
        <td>".$rows['tanggal']."</td>
        <td>
          <button type='button' class='btn btn-default' data-toggle='modal' data-target='#pekerja".$rows['id_pekerja']."'>Show Detail</button>
        </td>
        <td>Waiting</td>
        <td>
          <button class='btn btn-default'>Terima</button>
          <button class='btn btn-default'>Tolak</button>
        </td>
        </form>
      </tbody>
      ";
    }      
  }

    echo "    
    </table>
  
  <br><br>
</div>";
}} 

  $daftar = $pekerja->get_by_pengiklan_submit($_SESSION['user']['id_pengiklan']);
  if(count($daftar)>0){
  foreach ($daftar as $x) {
    echo "
    <div id='pekerja".$x['id_pekerja']."' class='modal fade' role='dialog'>
      <div class='modal-dialog'>

        <!-- Modal content-->
        <div class='modal-content'>
          <div class='modal-header'>
            <!-- <button type='button' class='close' data-dismiss='modal'>&times;</button> -->
            <h4 class='modal-title'>Detail Akun</h4>
          </div>
          <div class='modal-body'>
          <!-- Photo Profile -->
           <div class='container-fluid'>
            <div class='col-sm-4'>
            <img src='../../assets/images/yola-small.jpg' class='img-responsive center-block'>
            <br>
            </div>
            <div class='col-sm-8'>
                <table align='center'>
                    <tr>
                        <td class='text-left'>Nama </td>
                        <td style='width:20px'> : </td>
                        <td class='text-left'>".$x['nama']."</td>
                    </tr>
                    <tr>
                        <td class='text-left'>e-mail </td>
                        <td> : </td>
                        <td class='text-left'>".$x['email']."</td>
                    </tr>
                    <tr>
                        <td class='text-left'>Telephone </td>
                        <td> : </td>
                        <td class='text-left'>".$x['no_hp']."</td>
                    </tr>
                    <tr>
                        <td class='text-left'>Social Media </td>
                        <td> : </td>
                        <td class='text-left'>".$x['sosmed']."</td>
                    </tr>
                    <tr>
                        <td class='text-left'>Alamat </td>
                        <td> : </td>
                        <td class='text-left'>".$x['alamat']."</td>
                    </tr>
                    <tr>
                        <td class='text-left'>Keahlian </td>
                        <td> : </td>
                        <td class='text-left'>".$x['keahlian']."</td>
                    </tr>
                </table>
            </div>
            
           </div>
           </div>
          <div class='modal-footer'>
            <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End modal -->           
    ";}  
  }
  
?>

<br>
<br>
<!-- FOOTER -->
<?php include '../../view/footer2.php'; ?>
<!-- //FOOTER -->

<!-- javascript -->
  <?php 
  include '../../view/script.php'; 
  if(isset($_POST['cv'])){
    $script->download($_POST['download']);
  }
  ?>
<!-- javascript -->

</body>
</html>