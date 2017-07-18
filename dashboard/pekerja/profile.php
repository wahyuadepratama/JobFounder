<?php 
  session_start();
  require_once '../../controller/koneksi.php';
  require_once '../../controller/session.php';
  require_once '../../controller/class.script.php';
  require_once '../../controller/class.pekerja.php';

  $pekerja = new pekerja();
  $script = new function_script();

  session_cek();

  $result = $pekerja->select_profile($_SESSION['user']['id_pekerja']);
  $pekerja->set_all_property($result['data']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title> Profile Pekerja </title>
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

<!-- profile -->
<br>
<div class="container">
  <ul class="nav nav-pills">
    <li role="presentation"><a href="track.php">Tracking</a></li>
      <li role="presentation" class="active"><a href="profile.php">Profile</a></li>
  </ul>
  <ul class="">
    
  </ul>
</div>

<div class="container">

  <center>
      <img src="../../assets/images/invest.png" class="img-circle img-responsive" width="200"><br>
  </center>
  <br>

  <div class="container table-responsive">
    <table class="table table-striped tabpad">
         <tr>
             <th class="text-left">Nama</th>
             <td></td>
             <td class="text-left"><?php echo $pekerja->nama; ?></td>
         </tr>
         <tr>
             <th class="text-left">Alamat Email</th>
             <td></td>
             <td class="text-left"><?php echo $pekerja->email; ?></td>
         </tr>
         <tr>
             <th class="text-left">Telepon/Fax</th>
             <td></td>
             <td class="text-left"><?php echo $pekerja->no_hp; ?></td>
         </tr>
         <tr>
             <th class="text-left">Sosial Media</th>
             <td></td>
             <td class="text-left"><?php echo $pekerja->sosmed; ?></td>
         </tr>
         <tr>
             <th class="text-left">Provinsi</th>
             <td></td>
             <td class="text-left"><?php echo $pekerja->provinsi; ?></td>
         </tr>
         <tr>
             <th class="text-left">Kota</th>
             <td></td>
             <td class="text-left"><?php echo $pekerja->kota; ?></td>
         </tr>
         <tr>
             <th class="text-left">Kecamatan</th>
             <td></td>
             <td class="text-left"><?php echo $pekerja->kecamatan; ?></td>
         </tr>
         <tr>
             <th class="text-left">Alamat</th>
             <td></td>
             <td class="text-left"><?php echo $pekerja->alamat; ?></td>
         </tr>
         <tr>
             <th class="text-left">Keahlian</th>
             <td></td>
             <td class="text-left"><?php echo $pekerja->keahlian; ?></td>
         </tr>
    </table>
    <br>
  </div>

<form method="post">
  <div class="form-group">
    <center>
      <button type="submit" class="btn btn-default"><a href="edit-profile.php">Edit</a></button>
      <button class="btn btn-danger btn-sm" name="logout">Logout</button>
    </center>
  </div>
</form>

</div>
<!-- end profile -->
<!-- FOOTER -->
<?php include '../../view/footer2.php'; ?>
<!-- //FOOTER -->
<!-- javascript -->
  <?php include '../../view/script.php'; ?>
<!-- javascript -->

</body>
</html>