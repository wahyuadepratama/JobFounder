<?php 
include '../controller/koneksi.php';
global $pdo;
if(isset($_REQUEST['prov'])){
	$query = $pdo->prepare("select * from inf_lokasi where lokasi_kode like '".$_REQUEST['prov'].".%_%.00.0000' and lokasi_kabupatenkota != 0");	
	if(isset($_REQUEST['kab'])){
		$query = $pdo->prepare("select * from inf_lokasi where lokasi_kode like '".$_REQUEST['prov'].".".$_REQUEST['kab'].".%_%.0000' and lokasi_kecamatan != 0");	
	}
}	
else{
	$query = $pdo->prepare("select * from inf_lokasi where lokasi_kode like '%.00.00.0000'");
	
}
	$query ->execute();
	$result= $query->fetchAll();
	echo json_encode($result);

 ?>