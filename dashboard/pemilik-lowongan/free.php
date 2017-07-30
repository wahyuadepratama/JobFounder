<?php  
  session_start();
  require_once '../../controller/koneksi.php';
  require_once '../../controller/class.session.php';
  require_once '../../controller/class.script.php';
  require_once '../../controller/class.postingan.php';
  require_once '../../controller/class.pengiklan.php';

  $session = new function_session();
  $pengiklan = new pengiklan();
  $postingan = new postingan();
  $script = new function_script();

  $session->pengiklan();
	
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<title> Dashboard | Free </title>
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

<!-- Menu -->
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
      <a class="navbar-brand"><img class="img-responsive" src="../../assets/images/coin-small.png"></a><a class="coin"><?php echo $pengiklan->get_koin($_SESSION['user']['id_pengiklan']) ?></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         
      <ul class="nav navbar-nav navbar-right" id="menu">
        <li role="presentation" class="active"><a href="new-posting.php">New Posting</a></li>
        <li role="presentation"  class="noac"><a href="list-posting.php">List Posting</a></li>
        <li role="presentation" class="noac"><a href="profile.php">Profile</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
<!-- end Menu -->
<!-- Dashboard -->
<br>
<div class="container">
	<div class="panel panel-default">
	  <div class="panel-body">
	  	<h4>Ketentuan :</h4><br>
	    <ul class="list-group">
		  <li class="list-group-item">1. Pastikan anda sudah melengkapi profile anda, agar pekerja tidak sulit menemukan anda nantinya</li>
		  <li class="list-group-item">2. Isilah lowongan yang sesuai dengan kebutuhan anda</li>
		  <li class="list-group-item">3. Sampaikan deskripsi pekerjaan dengan jelas dan ringkas</li>
		  <li class="list-group-item">4. Setelah di submit, iklan akan diposting setelah disetujui admin (paling lama 1 jam)</li>		  
		  <li class="list-group-item">5. Iklan anda akan bertahan selama 1 minggu</li>
		</ul>
	  </div>
	</div>
</div>
<br>
<div class="container">

<form name='form1' method="post">
	<div class="form-group">
		  <label for="posisi">Judul Lowongan</label>
		  <input type="text" class="form-control" name="judul" placeholder="ex: Dicari tukang kebun buah naga" required="">
	</div>
	<div class="form-group">
		  <label for="posisi">Deskripsi Pekerjaan (syarat dan ketentuan pekerja)</label>
		  <textarea class="form-control" rows="5" id="req" name="deskripsi" placeholder="ex: Saya membutuhkan 2 orang tukang kebun yang setidaknya berpengalaman dalam berkebun. Jam kerja pagi - sore. Lokasi kebun di lb alung." required=""></textarea>
	</div>
	<div class="form-group">
		<label for="posisi">Kategori Pekerja (pilihlah agar para pekerja lebih mudah menemukan anda)</label><br><br>
		<div class="container">
			<div class="col-sm-4">
				<input type="checkbox" name="kategori[]" value="Pelayan Resto (waiters)"> Pelayan Resto (waiters) </input><br>
				<input type="checkbox" name="kategori[]" value="Pelayan Toko (pramuniaga)"> Pelayan Toko (pramuniaga)</input><br>
				<input type="checkbox" name="kategori[]" value="Delivery Makanan"> Delivery Makanan </input><br>
				<input type="checkbox" name="kategori[]" value="Marketing dan Sales"> Marketing & Sales </input><br>
				<input type="checkbox" name="kategori[]" value="SPG dan SPB"> SPG & SPB </input><br> 
				<input type="checkbox" name="kategori[]" value="Administrator"> Administrator </input><br>
				
				<input type="checkbox" name="kategori[]" value="Petani dan Peternak"> Petani dan Peternak </input><br>
				<input type="checkbox" name="kategori[]" value="Fotografer"> Fotografer </input><br>
				<input type="checkbox" name="kategori[]" value="Wartawan"> Wartawan </input><br>
				<input type="checkbox" name="kategori[]" value="Penyiar Radio"> Penyiar Radio</input><br>
				<input type="checkbox" name="kategori[]" value="Penulis (content writer)"> Penulis (content writer) </input><br>
				<input type="checkbox" name="kategori[]" value="Penerjemah"> Penerjemah </input><br>
			</div>
			<div class="col-sm-4">
				<input type="checkbox" name="kategori[]" value="Supir (driver)"> Supir (driver) </input><br>
				<input type="checkbox" name="kategori[]" value="Driver Ojek"> Driver Ojek </input><br>
				<input type="checkbox" name="kategori[]" value="Pengajar"> Pengajar / Kursus </input><br>	
				<input type="checkbox" name="kategori[]" value="jasa perawatan hewan"> Jasa Perawatan Hewan </input><br>
				<input type="checkbox" name="kategori[]" value="Pembantu"> Pembantu </input><br>
				<input type="checkbox" name="kategori[]" value="Baby Sitter"> Baby Sitter</input><br>

				<input type="checkbox" name="kategori[]" value="Teknisi mesin"> Teknisi Mesin </input><br>
				<input type="checkbox" name="kategori[]" value="Event Organizer"> Event Organizer </input><br>
				<input type="checkbox" name="kategori[]" value="Tour Guide"> Tour Guide </input><br>
				<input type="checkbox" name="kategori[]" value="Entri data"> Entry Data </input><br>
				<input type="checkbox" name="kategori[]" value="Operator"> Operator </input><br>
				<input type="checkbox" name="kategori[]" value="Jasa Mengetik (type writer)"> Jasa Mengetik (type writer) </input><br>

			</div>
			<div class="col-sm-4">
				<input type="checkbox" name="kategori[]" value="Kesehatan"> Kesehatan </input><br>
				<input type="checkbox" name="kategori[]" value="Hukum"> Hukum </input><br>
				<input type="checkbox" name="kategori[]" value="Pelatih"> Pelatih </input><br>
				<input type="checkbox" name="kategori[]" value="Olahraga"> Olahraga </input><br>
				<input type="checkbox" name="kategori[]" value="Musik"> Musik </input><br>
				<input type="checkbox" name="kategori[]" value="Konsultan"> Konsultan </input><br>

				<input type="checkbox" name="kategori[]" value="Website Designer"> Website Designer </input><br>
				<input type="checkbox" name="kategori[]" value="Website Developer"> Website Developer </input><br>
				<input type="checkbox" name="kategori[]" value="Mobile Developer"> Mobile Developer </input><br>
				<input type="checkbox" name="kategori[]" value="Desain Grafis"> Desain Grafis </input><br>
				<input type="checkbox" name="kategori[]" value="Video Editing dan Multimedia"> Video Editing dan Multimedia </input><br>
				<input type="checkbox" name="kategori[]" value="Service Hardware and Software"> Service Hardware and Software</input><br>

				<input type="checkbox" name="kategori[]" value="Non Kategori"> Lain - lain </input><br>
			</div>
		</div>
	</div>
	<div class="form-group">
		  <label for="posisi">Gaji</label>
		  <input type="text" class="form-control" name="gaji" placeholder="ex: Rp. 1.500.000  nego" required="">
	</div>
	<div class="form-group">
		  <label for="posisi">Keterangan Tambahan (jika dibutuhkan)</label>
		  <textarea class="form-control" rows="5" id="req" name="keterangan" placeholder="ex: Tukang kebun akan tinggal digubuk pada ladang saya, untuk biaya beli beras dan uang harian akan saya berikan" ></textarea>
	</div>
	<div class="form-group">
		  <label for="posisi">Tipe</label>
		  <select class="form-control" id="sel2" required="" name="tipe">
		    <option value="kontrak">Pilih Tipe</option>
		    <option value="kontrak">Freelance / Kontrak</option>
		    <option value="karyawan">Karyawan / Kerja Tetap</option>
		  </select>
	</div>
	<div class="form-group">
		<input type="hidden" id="lat" name="lat" value="">
		<input type="hidden" id="lang" name="lang" value="">
	</div>
	<center><button type="submit" class="btn btn-default" name="submit">Submit</button></center><br>
</form>
</div>

<!-- <div id="map" class="form-group"></div>
  
    <script>

      	function initMap() {
	        var map = new google.maps.Map(document.getElementById('map'), {
	          center: {lat: -34.397, lng: 150.644},
	          zoom: 14
	        });  
	 		var contentString = "<b>Ini akan menjadi lokasi pekerjaan yang kamu posting";
	 		var infowindow = new google.maps.InfoWindow({
			    content: contentString
			  });

	        // Try HTML5 geolocation.
	        if (navigator.geolocation) {
		          navigator.geolocation.getCurrentPosition(function(position) {
		            var pos = {
		              lat: position.coords.latitude,
		              lng: position.coords.longitude
		            };

		            map.setCenter(pos);

		                var marker = new google.maps.Marker({
				          position: pos,
				          map: map,
					    });
					    marker.addListener('click', function() {
					      infowindow.open(map, marker);					      
						});
						document.form1.lat.value = pos.lat;
						document.form1.lang.value = pos.lng;
		          }, function() {
		            handleLocationError(true, infowindow, map.getCenter());
		          });
	        } else {
		          // Browser doesn't support Geolocation
		          handleLocationError(false, infowindow, map.getCenter());
	        }
      	}

      	function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        	infowindow.setPosition(pos);
        	infowindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
      	}

</script>
<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBG9-ODGhtoOPdAjjMKVMRwPOeQD3HFEi4&callback=initMap">
</script> -->

<!-- FOOTER -->
	<?php include '../../view/footer2.php'; ?>
<!-- //FOOTER -->
 
<!-- javascript -->
	<?php include '../../view/script.php'; ?>
<!-- javascript -->

</body>
</html>

<?php 
	if(isset($_POST['submit'])){		
		$postingan->set_all_property('free',7,'belum');
		$postingan->insert_data();
		$script->alert_redirect('Berhasil !','Iklan anda akan di posting setelah disetujui admin. Silahkan cek List Posting','new-posting');
	}
 ?>