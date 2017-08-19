<?php 
  session_start();
  require_once '../../controller/koneksi.php';
  require_once '../../controller/class.session.php';
  require_once '../../controller/class.script.php';
  require_once '../../model/class.pengiklan.php';

  $session = new function_session();
  $pengiklan = new pengiklan();
  $script = new function_script();

  $session->pengiklan();
  $result = $pengiklan->get_profile_id($_SESSION['user']['id_pengiklan']);
  $pengiklan->set_all_property($result['data']);
  $daerah=$pengiklan->get_daerah();

  if(isset($_REQUEST['logout'])){
    $_POST['logout']='true';
    $session->logout();
  }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>

	<title> Profile Pengiklan </title>
	<?php include("../../view/head-user.php"); ?>
     <link rel="stylesheet" type="text/css" href="../../assets/css/style-user.css">
</head>
	
<body>
 	
<?php include('../../view/header-company.php') ?>
 	
 	<div class="container main-content" id="startchange">
   
       <center>
        <img src="<?php 
			if($pengiklan->foto_profile!=null){
				echo 'profile/'.$pengiklan->foto_profile;
			}else{
				echo '../../assets/images/invest.PNG';
			}
	 	?>" class="img-circle img-responsive" width="200"><br>
    </center>
    <br>
      <table class="table table-striped ">
           <tr>
               <th class="text-left">Nama Perusahaan / Pemilik Pekerjaan</th>
               
               <td class="text-left"><?php echo $pengiklan->nama; ?></td>
           </tr>
           <tr>
               <th class="text-left">Deskripsi</th>
               
               <td class="text-left"><?php echo $pengiklan->deskripsi; ?></td>
           </tr>
           <tr>
               <th class="text-left">Alamat Email</th>
               
               <td class="text-left"><?php echo $pengiklan->email; ?></td>
           </tr>
           <tr>
               <th class="text-left">Telepon/Fax</th>
               
               <td class="text-left"><?php echo $pengiklan->no_hp; ?></td>
           </tr>
           <tr>
               <th class="text-left">Sosial Media</th>
               
               <td class="text-left"><?php echo $pengiklan->sosmed; ?></td>
           </tr>
           <tr>
               <th class="text-left">Provinsi</th>
               
               <td class="text-left"><?php echo $daerah[0]['lokasi_nama']; ?></td>
           </tr>
           <tr>
               <th class="text-left">Kota</th>
               
               <td class="text-left"><?php echo $daerah[1]['lokasi_nama']; ?></td>
           </tr>
           <tr>
               <th class="text-left">Kecamatan</th>
               
               <td class="text-left"><?php echo $daerah[2]['lokasi_nama']; ?></td>
           </tr>
           <tr>
               <th class="text-left">Alamat Perusahaan / Pemilik Pekerjaan</th>
               
               <td class="text-left"><?php echo $pengiklan->alamat; ?></td>
           </tr>
    
      </table>
      <br>
     
    

        <form method="post">
            <div class="form-group">
                <center>
                    <button class="btn btn-default"><a href="edit-profile.php">Edit</a></button>
                    <button class="btn btn-danger btn-sm" name="logout">Logout</button>
                </center>
            </div>
        </form>
        <br>
      
   </div>

   <?php include('../../view/footer.php') ?>

<!-- ================================================================================================================ -->


</body>
</html>