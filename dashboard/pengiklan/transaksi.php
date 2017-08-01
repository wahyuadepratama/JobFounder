<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>

	<title> JobUs | Dashboard </title>
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