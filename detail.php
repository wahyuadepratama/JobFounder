<?php 
	session_start();
	include 'controller/koneksi.php';
	include 'model/class.postingan.php';
	include 'model/class.pengiklan.php';
	include 'model/class.lowongan.php';
	include 'controller/class.script.php';

	$script = new function_script();
	$lowongan = new lowongan();
	$post = new postingan();
	$pengiklan = new pengiklan();

	$id_postingan = $post->decode($_REQUEST['id']);
	$postingan = $post->select_postingan($id_postingan);
	$data = $pengiklan->get_profile_id($postingan['data']['id_pengiklan']);
	$jumlah = $lowongan->count_apply($id_postingan);

	if($data['rows']==0){
		$script->redirect('lowongan');
	}
 ?>

<!DOCTYPE html>
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

			<span class="pull-left submitted">
			<?php echo $jumlah;?>
			<i>People has applied</i></span>
			<br>
		</div>
	<!--End judul  -->
		<div class="panel panel-default">
			<div class="panel-body">
				<p>Deskripsi : <?php echo $postingan['data']['deskripsi']; ?></p>

				<p>Jenis Kategori :</p>
					<ol type="A" style="margin-bottom:0px;">
						<ol>
							<?php $post->select_all_kategori($id_postingan); ?>		
						</ol>
					</ol>
				<p>Gaji 		: <?php echo $postingan['data']['gaji'] ?>		</p>
				<p>Keterangan 	: <?php echo $postingan['data']['keterangan'] ?></p>
				<p>Tipe 		: <?php echo $postingan['data']['tipe'] ?>		</p>

			    <div class="pull-right">
			    	<form method='post' enctype="multipart/form-data">		    
			    	<?php include 'controller/include.detail.form.php'; ?>		    		
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
			    <span class="title">Nama Pemilik</span> <br>
			      <p> <?php echo $data['data']['nama'] ?> </p>
			    <span class="title">Tentang  </span><br>
					<p><?php echo $data['data']['deskripsi'] ?> </p>
					<span class="title">Alamat</span>	<br>
					<p><?php echo $data['data']['alamat'] ?></p>
					<span class="title">Telephone/Fax</span>
					<p><?php echo $data['data']['no_hp'] ?> </p>
			  </div>
	<!-- End Profile -->
		</div>
	</div>
</div>
<!-- END MAIN CONTENT -->

<!-- javascript -->
	<?php include 'view/script2.php'; ?>

</body>
</html>

<?php include 'controller/include.detail.post.php'; ?>