<?php 
include '../controller/koneksi.php';
global $pdo;
if(isset($_GET['term'])){
	$query = $pdo->prepare("select kategori from postingan");
	$query->execute();

	$result = $query->fetchAll();

	foreach ($result as $key => $serial) {
		$arr = unserialize($serial['kategori']);

		if(isset($source)){
			foreach ($arr as $kategori) {
				if(!in_array($kategori, $source)){
					array_push($source, $kategori);
				}
			}
		}else{
			$source = $arr;
		}		
	}

	foreach ($source as $key => $data) {
		if(stristr($data, $_GET['term'])){
			$data_set[]=$data;
		}
	}

	echo json_encode($data_set);

}
 ?>