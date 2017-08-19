<?php session_start(); 
require_once '../../controller/class.session.php';

$session= new function_session();
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<title> JobUs | Dashboard </title>
	<?php include("../../view/head-user.php"); ?>
     <link rel="stylesheet" type="text/css" href="../../assets/css/style-user.css">

</head>
	
<body>
<?php include('../../view/header-company.php') ?>

<div class="container main-content" id="startchange">
   	 
            <div class="container ju_category">
               <div class="panel panel-default">
                 <div class="panel-body">
                  <h1 class="text-center"><img src="../../assets/images/coin.png"> JobUs Koin </h1><br>
                   <ul class="list-group">
                 <li class="list-group-item">
                   <div class="container ju_category">
                     <div class="col-sm-6 text-center">
                        <p class="">200</span><img src="../../assets/images/coin.png"></p>
                     </div>
                     
                     <div class="col-sm-6 text-center">
                           <button class="btn btn-default" data-toggle="collapse" data-target="#satu">Rp 10,000,-</button>
                      </div>
                   </div>
                  
                 </li>
                 <li class="list-group-item">
                  <div class="container ju_category">
                     <div class="col-sm-6 text-center">
                        <p class="">1100</span><img src="../../assets/images/coin.png"></p>
                     </div>
                     
                     <div class="col-sm-6 text-center">
                           <button class="btn btn-default" data-toggle="collapse" data-target="#satu">Rp 50,000,-</button>
                      </div>
                   </div>
                 </li>
               </ul>
                 </div>
               </div>
            </div>
       

      <div class="container ju_category panel panel-default collapse" id="satu">
        <br>
        <p class="text-center">DISINI TRANSAKSI PEMBAYARAN KOIN JOBUS</p>
        <br>
      </div>

   </div>

   	<?php include('../../view/footer.php') ?>
<!-- ======================================================================================================================== -->

</body>
</html>