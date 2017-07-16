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
<div class="container">
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
      <a class="navbar-brand"><img class="img-responsive" src="../../assets/images/coin-small.png"></a><a class="coin">0</a>
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

<div class="container">
	<h4>Lihat pekerja yang telah mensubmit lowongan perusahaanmu disini. Lihat CV mereka, terima jika memenuhi persyaratan, dan kontak mereka untuk melakukan wawancara.</h4>
</div>

<br>
<div class="container panel panel-default colaps">
	<table class="tabpad">
       <tr>
           <td class="text-left">Judul</td>
           <td width="20">:</td>
           <td class="text-left">Lowongan PT Freeport</td>
       </tr>  
       <tr>
           <td class="text-left">Waktu upload</td>
           <td>:</td>
           <td class="text-left">Senin, 21 Juni 2017, 14.32</td>
       </tr> 
    </table>         
    <p>Jika lowongan ini sudah terpenuhi, kamu bisa menghapusnya. <button class="btn btn-default">Hapus</button>&nbsp;<button class="btn btn-default" data-toggle="collapse" data-target="#satu">Lihat</button></p>


<div class="container table-responsive collapse" id="satu">
    <table width="100%" class="table">
    	<th>No</th>
    	<th>Employee Name</th>
    	<th>CV</th>
    	<th>Date Submitted</th>
    	<th>Detail Employee</th>
    	<th>Status</th>
    	<th>Action</th>
    <tbody>
    	<td> 1 </td>
    	<td> Wahyu Ade Pratama </td>
    	<td>
    		<button class="btn btn-default">Download CV</button>
    	</td>
    	<td>12-12-2012</td>
    	<td>
    		<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Show Detail</button>
    	</td>
    	<td>Waiting</td>
    	<td>
    		<button class="btn btn-default">Terima</button>
    		<button class="btn btn-default">Tolak</button>
    	</td>
    </tbody>
    <tbody>
    	<td> 2 </td>
    	<td> Toni Saputro </td>
    	<td>
    		<button class="btn btn-default">Download CV</button>
    	</td>
    	<td>12-12-2012</td>
    	<td>
    		<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Show Detail</button>
    	</td>
    	<td>Accept</td>
    	<td>
    		<button class="btn btn-default" disabled="">Terima</button>
    		<button class="btn btn-default" disabled="">Tolak</button>
    	</td>
    </tbody>

    </table>
	
	<br><br>
</div>
</div>

<div class="container panel panel-default colaps">
    <table class="tabpad">
       <tr>
           <td class="text-left">Judul</td>
           <td width="20">:</td>
           <td class="text-left">Lowongan Tukang Kebun</td>
       </tr>  
       <tr>
           <td>Waktu upload</td>
           <td>:</td>
           <td class="text-left">Senin, 21 Juni 2017, 14.32</td>
       </tr> 
    </table>    
    <p>Jika lowongan ini sudah terpenuhi, kamu bisa menghapusnya. <button class="btn btn-default">Hapus</button>&nbsp;<button class="btn btn-default" data-toggle="collapse" data-target="#dua">Lihat</button></p>


<div class="container table-responsive collapse" id="dua">
    <table width="100%" class="table">
        <th>No</th>
        <th>Freelancer Name</th>
        <th>Date Submitted</th>
        <th>Detail Freelancer</th>
        <th>Status</th>
        <th>Action</th>
    <tbody>
        <td> 1 </td>
        <td> Wahyu Ade Pratama </td>
        <td>12-12-2012</td>
        <td>
            <button class="btn btn-default">Show Detail</button>
        </td>
        <td>Waiting</td>
        <td>
            <button class="btn btn-default">Terima</button>
            <button class="btn btn-default">Tolak</button>
        </td>
    </tbody>

    </table>
    
    <br><br>
</div>
</div>
</div>

 <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
            <h4 class="modal-title">Detail Akun</h4>
          </div>
          <div class="modal-body">
          <!-- Photo Profile -->
           <div class="container-fluid">
            <div class="col-sm-4">
            <img src="../../assets/images/yola-small.jpg" class="img-responsive center-block">
            <br>
            </div>
            <div class="col-sm-8">
                <table align="center">
                    <tr>
                        <td class="text-left">Nama </td>
                        <td style="width:20px"> : </td>
                        <td class="text-left">Yolanda Parawita</td>
                    </tr>
                    <tr>
                        <td class="text-left">e-mail </td>
                        <td> : </td>
                        <td class="text-left">parawitayolanda@gmail.com</td>
                    </tr>
                    <tr>
                        <td class="text-left">Telephone </td>
                        <td> : </td>
                        <td class="text-left">081267866712</td>
                    </tr>
                    <tr>
                        <td class="text-left">Social Media </td>
                        <td> : </td>
                        <td class="text-left">nabang97</td>
                    </tr>
                    <tr>
                        <td class="text-left">Alamat </td>
                        <td> : </td>
                        <td class="text-left">Sumatera Barat</td>
                    </tr>
                    <tr>
                        <td class="text-left">Keahlian </td>
                        <td> : </td>
                        <td class="text-left">blablabalabla</td>
                    </tr>
                </table>
            </div>
            
           </div>
            
          <!-- Deskripsi -->

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End modal -->

<!-- javascript -->
	<?php include '../../view/script.php'; ?>
<!-- javascript -->

</body>
</html>