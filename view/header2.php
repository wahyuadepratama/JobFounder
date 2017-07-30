
<!-- header -->
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
		          <li><a href="home.php">Home</a></li>
		          <li><a href="lowongan.php">Lowongan</a></li>
		          <?php 
									
										if(isset($_SESSION['pekerja'])){
											echo "<li><a href='dashboard/pekerja/profile.php'>Dashboard</a></li>";	
										}elseif(isset($_SESSION['pengiklan'])){
											echo "<li><a href='dashboard/pemilik-lowongan/profile.php'>Dashboard</a></li>";
										}elseif(isset($_SESSION['admin'])){
											echo "<li><a href='admin/dashboard.php'>Dashboard</a></li>";
										}else{
											echo "<li><a href='daftar.php'>Daftar</a></li>";
										} 
					?>
		          <li><a href="about.php">About Us</a></li>

		          <!-- <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Section 4 <span class="caret"></span></a>
		            <ul class="dropdown-menu">
		              <li><a href="#section41">Section 4-1</a></li>
		              <li><a href="#section42">Section 4-2</a></li>
		            </ul>
		          </li> -->
		        </ul>
		      </div>
		    </div>
		  </div>
		</nav>
</div>
