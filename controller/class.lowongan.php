<?php 


class lowongan
 {

 	public $id_lowongan;
 	public $id_pekerja;
 	public $id_postingan;
 	public $tanggal;

 	function __construct(){}

 	// function insert(){
 	// 	global $pdo;
 	// 	$query = $pdo->prepare("
 	// 		INSERT INTO `lowongan` (
 	// 		`id_lowongan`, 
 	// 		`id_pekerja`, 
 	// 		`id_postingan`) 
 	// 		VALUES (NULL, ?, ?)");
		// $query->execute(array(
		// 	$this->id_pekerja,
		// 	$this->id_postingan
		// 	));
 	// }

	function apply($pekerja, $postingan, $username){
		global $pdo;
		date_default_timezone_set('Asia/Jakarta');
		$tgl = date('Y-m-d H:i:s', time());
 		$query = $pdo->prepare("INSERT INTO `lowongan` (`id_pekerja`, `id_postingan`, `tanggal`) VALUES (?,?,?)");
 		$query->execute(array($pekerja,$postingan,$tgl));	
	
 	}

 	function upload_cv($username){
 			$ekstensi_diperbolehkan	= array('doc','docx','png');
			$nama = $_FILES['cv']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$file_tmp = $_FILES['cv']['tmp_name'];	
 
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){	
				$tgl = date('Y-m-d H-i-s',time());
				move_uploaded_file($file_tmp, 'assets/docs/['.$tgl."]".$username.".".$ekstensi);
				return true;
			}else{
				return false;
			}
 	}

 	function get_data($query, $param){
			try{
				global $pdo;
				$req = $pdo->prepare($query);
				if($param == ''){
					$req->execute();
				}else{
					$req->execute($param);
				}

				$rows = $req->rowCount();
				$status = false;

				if($rows > 0){
					$status = true;
				}

				$data = $req->fetch(PDO::FETCH_NAMED);

				return array('status' => $status, 'rows' => $rows, 'data' => $data);
			}catch(PDOException $e){
				echo "Error! gagal mengambil data: ".$e->getMessage();
			}
	}

	function get_all_rows($query, $param){
			try{
				global $pdo;
				$req = $pdo->prepare($query);
				if($param == ''){
					$req->execute();
				}else{
					$req->execute($param);
				}

				if($req->rowCount() > 0){
					$result = $req->fetchAll();
					return $result;
				}

				
			}catch(PDOException $e){
				echo "Error! gagal mengambil data: ".$e->getMessage();
			}
	}

	function cek_apply($id_pekerja, $id_postingan){
			$query = "SELECT * FROM `lowongan` WHERE id_pekerja = ? and id_postingan = ?";
			$param = array($id_pekerja , $id_postingan);
			return $this->get_data($query, $param);
	}

	function select_by_postingan($id_postingan){
			$query = "SELECT * FROM `lowongan` WHERE id_postingan = ?";
			$param = array($id_postingan);
			return $this->get_all_rows($query, $param);
	}

 	function select(){
 		global $pdo;
 		$query = $pdo->prepare("SELECT * FROM `lowongan`");
 		$query->execute();
		if($query->rowCount() > 0 ){
			$i = 0;
			while ($r = $query->fetch()) {                                    
				$data[$i]['id_lowongan']=$r['id_lowongan'];
				$data[$i]['id_pekerja']=$r['id_pekerja'];
				$data[$i]['id_postingan']=$r['id_postingan'];
				$i++;								                            	
			}
		}
		return $data;
 	}

 	function update(){
 		global $pdo;
 		$query = $pdo->prepare("UPDATE `lowongan` SET 
 			`id_pekerja`	=?, 
 			`id_postingan`	=?
 			WHERE `lowongan`.`id_lowongan` = ?");
		$query->execute(array(
			$this->id_pekerja,
			$this->id_postingan,
			$this->id_lowongan,
			));
 	}

 	function delete(){
 		global $pdo;
 		$query = $pdo->prepare("DELETE FROM `lowongan` WHERE `lowongan`.`id_lowongan` = ?");
		$query->execute(array($this->id_lowongan));
 		}
 } 

 ?>