<!DOCTYPE html>
<html lang="en">
<head>

	<title> JobUs | Dashboard </title>
	<?php include 'view/source.php'; ?>

</head>
	
<body>
<!-- banner -->
	<div class="banner1">
		<div class="container">
			
			<?php include 'view/header.php'; ?>

		</div>
	</div>
<!-- banner -->

<!-- dashboard -->
<br>
<?php include 'view/menu.php'; ?>
<!-- //dashboard -->
<br><br>

<div class="container">
	<form>
	  	<div class="form-group">
	    	<label for="nama_usaha">Nama Usaha</label>
	    	<input type="text" class="form-control" id="nama_usaha" placeholder="ex : Toko Baju Sejahtera">
	  	</div>
	  	<div class="form-group">
		  	<label for="exampleInputEmail1">Deskripsi Usaha</label>
	    	<textarea class="form-control" rows="4" id="deskripsi" placeholder="ex : Kami menjual berbagai macam baju sesuai kebutuhan. Kami juga menerima pesanan. Toko kami memiliki 3 cabang di kota Padang. dst"></textarea>
	  	</div>
	  	<div class="form-group">
	  		<label for="#">Lokasi</label>
		  	<select class="form-control">
		  		<option>Pilih Kota</option>
			  	<option>Kota Padang</option>
			  	<option>Kota Bukittinggi</option>
			  	<option>Kota Padang Panjang</option>
			  	<option>Kota Payakumbuh</option>
			  	<option>Kabupaten Pariaman</option>
			</select>
		</div>
	  	<div class="form-group">
	    	<label for="alamat_usaha">Alamat Usaha</label>
	    	<input type="text" class="form-control" id="alamat_usaha" placeholder="ex : Jln Khatib Sulaiman no 36 | Jln siteba no 119c | nb: pisahkan dengan tanda '|' jika terdapat lebih dari 1 alamat">
	  	</div>
	  	<div class="form-group">
	    	<label for="nama_pemilik">Nama Pemilik</label>
	    	<input type="text" class="form-control" id="nama_pemilik" placeholder="Bpk Waluyo">
	  	</div>
	  	<div class="form-group">
	    	<label for="kategori">Apa yang menjadi masalah pada unit usaha anda sekarang ?</label>
	    	<div class="checkbox">
			  	<label>
			    	<input type="checkbox" id="blankCheckbox" value="opsi" aria-label="...">Butuh Pekerja
			  	</label><br>
			  	<label>
			    	<input type="checkbox" id="blankCheckbox" value="opsi" aria-label="...">Masalah Tempat Usaha
			  	</label><br>
			  	<label>
			    	<input type="checkbox" id="blankCheckbox" value="opsi" aria-label="...">Masalah Distribusi Barang / Jasa
			  	</label><br>
			  	<label>
			    	<input type="checkbox" id="blankCheckbox" value="opsi" aria-label="...">Lainnya
			  	</label>
			</div>
	  	</div>
	  	<div class="form-group">
		  	<label for="kebutuhan">Jelaskan Spesifikasi Kebutuhan</label>
	    	<textarea class="form-control" rows="5" id="deskripsi" placeholder="ex : Kami membutuhkan 3 orang pekerja. Syarat dan ketentuan sudah kami lampirkan pada pamflet."></textarea>
	  	</div>
	  	<div class="form-group">
		    <label for="exampleInputFile">Upload Pamflet / Brosur (optional)</label><br><br>
		    <input type="file" id="pamflet">
		    <p class="help-block">nb : ekstensi yang diterima hanya berupa jpg/ jpeg/ png</p>
	  	</div>
	  	
	  	<button type="submit" class="btn btn-default">Submit</button>

	</form>
	<br><br>
</div>
<!-- javascript -->
	<?php include 'view/script.php'; ?>
<!-- javascript -->

</body>
</html>