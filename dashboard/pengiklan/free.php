<?php  
  session_start();
  require_once '../../controller/koneksi.php';
  require_once '../../controller/class.session.php';
  require_once '../../controller/class.script.php';
  require_once '../../model/class.postingan.php';
  require_once '../../model/class.pengiklan.php';

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
	<?php include("../../view/head-user.php"); ?>
     <link rel="stylesheet" type="text/css" href="../../assets/css/style-user.css">
</head>
	
<body>
	<?php include('../../view/header-company.php') ?>

	<div class="container main-content" id="startchange">
   	  <div class="panel panel-default">
	  <div class="panel-body">
	  	<h4>Ketentuan :</h4><br>
	    <ul class="list-group">
		  <li class="list-group-item">1. Isilah lowongan yang sesuai dengan perusahaan, toko , ataupun perorangan yang membutuhkan pekerja</li>
		  <li class="list-group-item">2. Pastikan anda sudah melengkapi profile anda, agar pekerja tidak sulit menemukan anda nantinya</li>
		  <li class="list-group-item">3. Sampaikan deskripsi pekerjaan dengan jelas dan ringkas</li>
		  <li class="list-group-item">4. Iklan anda akan bertahan selama 1 minggu</li>
		</ul>
	  </div>
	</div>

	<form name='form1' method="post">
	<div class="form-group">
		  <label for="posisi">Judul Lowongan</label>
		  <input type="text" class="form-control" name="judul" placeholder="Lowongan Kerja PT Freeport / Dicari tukang kebun buah naga" required="">
	</div>
	<div class="form-group">
		  <label for="posisi">Deskripsi Pekerjaan (syarat dan ketentuan pekerja)</label>
		  <textarea class="form-control" rows="5" id="req" name="deskripsi" placeholder="ex: Saya membutuhkan 2 orang tukang kebun yang setidaknya berpengalaman dalam berkebun" required=""></textarea>
	</div>
	<div class="form-group">
		<label for="posisi">Kategori Pekerja (Bisa dipilih lebih dari 1)</label><br><br>
		<div class="container ju_category">
			<div class="col-sm-4">
				<input type="checkbox" name="kategori[]" value="administrasi"> Administrasi </input><br>
				<input type="checkbox" name="kategori[]" value="karyawan toko"> Karyawan Toko </input><br>
				<input type="checkbox" name="kategori[]" value="marketing dan sales"> Marketing & Sales </input><br>
				<input type="checkbox" name="kategori[]" value="SPG dan SPB"> SPG & SPB </input><br>
				<input type="checkbox" name="kategori[]" value="manajemen"> Manajemen </input><br>
				<input type="checkbox" name="kategori[]" value="fotograger"> Fotografer </input><br>
				<input type="checkbox" name="kategori[]" value="desain grafis dan multimedia"> Desain Grafis dan Multimedia </input><br>
				<input type="checkbox" name="kategori[]" value="penerjemah"> Penerjemah </input><br>
			</div>
			<div class="col-sm-4">
				<input type="checkbox" name="kategori[]" value="teknologi"> Teknologi </input><br>
				<input type="checkbox" name="kategori[]" value="teknik"> Teknik </input><br>
				<input type="checkbox" name="kategori[]" value="hukum"> Hukum </input><br>
				<input type="checkbox" name="kategori[]" value="akuntansi"> Akuntansi </input><br>
				<input type="checkbox" name="kategori[]" value="kesehatan"> Kesehatan </input><br>
				<input type="checkbox" name="kategori[]" value="akuntan"> Akuntan </input><br>
				<input type="checkbox" name="kategori[]" value="entri data"> Entry Data </input><br>
				<input type="checkbox" name="kategori[]" value="pengajar"> Pengajar / kursus </input><br>
			</div>
			<div class="col-sm-4">
				<input type="checkbox" name="kategori[]" value="peternakan dan pertanian"> Peternakan dan Pertanian </input><br>
				<input type="checkbox" name="kategori[]" value="pegawai negeri"> Pegawai Negeri </input><br>
				<input type="checkbox" name="kategori[]" value="website dan developer"> Website Design and Developper </input><br>
				<input type="checkbox" name="kategori[]" value="mobile developer"> Mobile Developer </input><br>
				<input type="checkbox" name="kategori[]" value="penulis lepas"> Penulis Lepas (content writer) </input><br>
				<input type="checkbox" name="kategori[]" value="pembantu dan baby sitter"> Pembantu dan Baby Sitter </input><br>
				<input type="checkbox" name="kategori[]" value="driver"> Driver </input><br>
				<input type="checkbox" name="kategori[]" value="lain-lain"> Lain - lain </input><br>
			</div>
		</div>
	</div>
	<div class="form-group">
		  <label for="posisi">Gaji</label>
		  <input type="text" class="form-control" name="gaji" placeholder="ex: Rp. 4.500.000  -  Rp. 9.000.000" required="">
	</div>
	<div class="form-group">
		  <label for="posisi">Keterangan Tambahan (jika dibutuhkan)</label>
		  <textarea class="form-control" rows="5" id="req" name="keterangan" placeholder="ex: Tukang kebun akan tinggal digubuk pada ladang saya, untuk biaya beli beras dan uang harian akan saya berikan" required=""></textarea>
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

   	<?php include('../../view/footer.php') ?>


<!-- =============================================================================================================================== -->


<div id="map" style="width: 700px; height: 600px;"></div>
  
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
</script>

</body>
</html>

<?php 
	if(isset($_POST['submit'])){		
		$postingan->set_all_property('free',3,'belum');
		$postingan->insert_data();
		$script->alert_redirect('Berhasil !','Iklan anda akan di posting setelah disetujui admin. Silahkan cek List Posting','new-posting');
	}
 ?>