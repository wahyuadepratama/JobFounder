<!DOCTYPE html>
<?php 
	session_start();
	include 'controller/class.postingan.php';
	include 'controller/class.pengiklan.php';
	include 'controller/class.lowongan.php';
	include 'controller/class.script.php';
	include 'controller/koneksi.php';

	$script = new function_script();
	$lowongan = new lowongan();

	$id_postingan = $_REQUEST['id'];

	$post = new postingan();
	$postingan = $post->select_postingan($id_postingan);

	$pengiklan = new pengiklan();
	$data = $pengiklan->get_profile_id($postingan['data']['id_pengiklan']);
 ?>
<html lang="en">
<head>

	<title> JobUs | Lowongan Pekerjaan </title>
	<?php include 'view/source2.php'; ?>

</head>
	
<body>
<!-- banner -->
	<div class="banner1">
		<div class="container">
			
			<?php include 'view/header2.php'; ?>

		</div>
	</div>
<!-- banner -->


<br>

<!-- MAIN CONTENT -->
<div class="container">
	<!-- Detail/Gmabaran Lowongan Pekerjaan -->
	<div class="col-md-8">
	<!-- Judul lowongan -->
		<div>
			<h2><?php echo $postingan['data']['judul']; ?> </h2>
			<span class="pull-right submitted"><i>Submitted at</i> <?php echo date('d F Y, h:m:s', strtotime($postingan['data']['tanggal'])); ?> </span>
			<br>
		</div>
	<!--End judul  -->
		<div class="panel panel-default">
		  <div class="panel-body">
		  <p><?php echo $postingan['data']['deskripsi']; ?></p>
		   
		    <!-- <p>
		    Sehubungan Dengan Recruitment Calon Pengawai Non PNS RS.AWAL BROS Tahun 2017. Untuk Penempatan Wilayah Kerja Meliputi Diberbagai Propinsi Di Indonesia. <br>
            Termasuk Pulau Jawa,Pulau Sumatera,Pulau Sulawesi,Pulau Kalimantan,Nusa Tenggara,Maluku dan Papua.</p>

<p>Lowongan Kerja RS.AWAL BROS 2017 
Menerima Karyawan Baru Pria dan Wanita.</p> -->

<p>


Posisi yang dibutuhkan :<br>
<ol type="A" style="margin-bottom:0px;">
	<ol>
		<?php $post->select_all_kategori($id_postingan); ?>		
	</ol>
<!-- <li> Tenaga Medis </li>
   <ol>
		<li>Radiografer </li>
		<li>Perawat </li>
		<li>Laboratory Analyst </li> 
		<li>Apoteker/ S1 Farmasi/ Kimia/ Biologi </li>
		<li>Dokter (Semua Jurusan) </li>
		<li>Kesehatan Masyarakat </li>
		<li>Kebidanan </li>
		<li>Ahli Gizi </li>
	</ol>

<li> Tenaga Non Medis </li>
  <ol>
	 <li>HRD Staff/Staff Personalia </li>
	 <li>Finance & Accounting (Manager,Supervisor and Staff) </li>
	<li>Corporate Accountant </li>
	<li>Secretary to Director </li>
	<li>Customer Service </li>
	 <li>Purchasing </li>
	 <li>Project Architect / Project Manager </li>
	 <li>Engineering – Site, Civil, ME, Architect </li>
	</ol>
</ol>
<p>Persyaratan Umum :<br>
<ol style="margin-bottom:0px">
<li>Warga Negara Indonesia</li>
<li>Pria / Wanita </li>
<li>Lulusan SMA/SMK/D1/ D2 / D3 / S1 / S2 </li>
<li>Sehat Jasmani Rohani </li>
<li>Bisa bekerja dengan TIM/KELOMPOK </li>
<li>Bersedia ditempatkan di Seluruh wilayah Nusantara </li>  -->
</ol>

<p>Persyaratan Berkas / Dokumen :<br>
<ol style="margin-bottom:0px">
<li>Surat Lamaran </li>
<li>Daftar Riwayat Hidup (CV) </li> 
<li>Kartu Identitas (KTP/SIM) </li>
<li>Foto Ukuran 4×6 (Berwarna) </li>
<li>Email & No. Telp/HP </li>
</ol>

<p>Silahkan kirim Lamaran dan data Lengkap Anda ke email:
career-awalbros@doctor.com <br>

RS.AWAL BROS hanya mengundang pelamar terbaik untuk mengikuti seleksi. 
Keputusan untuk memanggil pelamar dan penentuan hasil seleksi merupakan hak dari RS.AWAL BROS serta tidak dapat diganggu gugat.</p>
		    </p>
		    <div class="pull-right">
		    	<form method='post'>		    
		    	<?php 	
		    		if(isset($_SESSION['pekerja'])){
		    			$cek =$lowongan->cek_apply($_SESSION['user']['id_pekerja'],$_REQUEST['id']);
		    			if($cek['status']){
		    				echo "<button type='submit' class='btn btn-primary' name='apply' disabled='true'>Apply</button>";
		    			}else{
		    				echo "<button type='submit' class='btn btn-primary' name='apply'>Apply</button>";
		    			}
		    		}else{
		    			echo "<button type='submit' class='btn btn-primary' name='apply'>Apply</button>";
		    		}
		    	 ?>		    		
		    	</form>		    	
		    </div>
		  </div>
		</div>
	</div>
	<!-- end detail -->
	<!-- Profile Perusahaan -->
		<div class="col-md-4">
		<div class="panel panel-default">
		  <div class="panel-heading text-center"><h4>Dipost oleh</h4></div>
		  <div class="panel-body">
		    <span class="title">Nama Perusahaan</span> <br>
		      <p> <?php echo $data['data']['nama'] ?> </p>
		    <span class="title">Tentang  </span><br>
				<p><?php echo $data['data']['deskripsi'] ?> </p>
				<span class="title">Alamat</span>	<br>
				<p><?php echo $data['data']['alamat'] ?></p>
				<span class="title">Telephone/Fax</span>
				<p><?php echo $data['data']['no_hp'] ?> </p>
		  </div>
		</div>
			<div>
				
			</div>
		</div>
	<!-- End Profile -->
</div>
<!-- END MAIN CONTENT -->
<!-- javascript -->
	<?php include 'view/script2.php'; ?>
<!-- javascript -->
</body>
<?php 

	if(isset($_POST['apply'])){
		if($_SESSION==NULL){
			$script->redirect('daftar');
		}else{
			if($_SESSION['admin']){
				$script->redirect('admin/dashboard');
			}elseif($_SESSION['pengiklan']){
				$script->redirect('dashboard/pemilik-lowongan/profile');
			}elseif($_SESSION['pekerja']){
				$lowongan->apply($_SESSION['user']['id_pekerja'],$_REQUEST['id']);
				$script->redirect('lowongan');
			}
		}
	}
?>
</html>''