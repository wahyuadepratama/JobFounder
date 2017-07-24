
<!-- header -->
			<div class="w3_agileits_banner_main_grid">
				<div class="w3_agile_logo">
					<img src="../assets/images/logofix.png" width="70">
				</div>

				<div class="agileits_w3layouts_menu">
					<div class="shy-menu">
						<a class="shy-menu-hamburger">
							<span class="layer top"></span>
							<span class="layer mid"></span>
							<span class="layer btm"></span>
						</a>
						<div class="shy-menu-panel">
							<nav class="menu menu--horatio link-effect-8" id="link-effect-8">
								<ul class="w3layouts_menu__list">
									<li class="active"><a href="../home.php">Home</a></li>
									<li><a href="../lowongan.php">Lowongan</a></li> 
									<?php if(isset($_SESSION['pekerja'])){
											echo "<li><a href='../dashboard/pekerja/profile.php'>Dashboard</a></li>";	
										}elseif(isset($_SESSION['pengiklan'])){
											echo "<li><a href='../dashboard/pemilik-lowongan/profile.php'>Dashboard</a></li>";
										}else{
											echo "<li><a href='../daftar.php'>Daftar</a></li>";
											} ?>
									<li><a href="../about.php">About Us</a></li> 
								</ul>
							</nav>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
<!-- //header -->
