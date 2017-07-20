<?php 

class postingan
 {

 	public $id_postingan;
 	public $id_pengiklan;
 	public $judul;
 	public $deskripsi;
 	public $kategori;
 	public $gaji;
 	public $keterangan;
 	public $tipe;
 	public $pamflet;
 	public $durasi;
 	public $status;
 	public $tanggal;

 	function __construct(){}

 	function insert_data(){
 		global $pdo;
 		$query = $pdo->prepare("
 			INSERT INTO `postingan` (
 			`id_postingan`, 
 			`id_pengiklan`, 
 			`judul`, 
 			`deskripsi`, 
 			`kategori`, 
 			`gaji`, 
 			`keterangan`, 
 			`tipe`, 
 			`pamflet`, 
 			`durasi`, 
 			`status`, 
 			`tanggal`) 
 			VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, CURRENT_TIMESTAMP)");
		$query->execute(array(
			$this->id_pengiklan,
			$this->judul,
			$this->deskripsi,
			$this->kategori,
			$this->gaji,
			$this->keterangan,
			$this->tipe,
			$this->pamflet,
			$this->durasi,
			$this->status,

			));
 	}

 	function set_all_property($status,$durasi){

 		$kategori = serialize($_POST['kategori']);

		$this->id_pengiklan = $_SESSION['user']['id_pengiklan'];
		$this->judul = $_POST['judul'];
		$this->deskripsi = $_POST['deskripsi'];
		$this->gaji = $_POST['gaji'];
		$this->keterangan = $_POST['keterangan'];
		$this->tipe = $_POST['tipe'];
		$this->kategori = $kategori;
		$this->durasi = $durasi;
		$this->status = $status;

		if($status=='pro'){
			$this->pamflet = $_POST['pamflet'];
		}
 	}

 	function update(){
 		global $pdo;
 		$query = $pdo->prepare("UPDATE `postingan` SET 
 			`judul`			=?, 
 			`deskripsi`		=?, 
 			`kategori`		=?, 
 			`gaji`			=?, 
 			`keterangan`	=?, 
 			`tipe`			=?, 
 			`pamflet`		=?, 
 			`durasi`		=? 
 			WHERE `postingan`.`id_postingan` = ?");
		$query->execute(array(
			$this->judul,
			$this->deskripsi,
			$this->kategori,
			$this->gaji,
			$this->keterangan,
			$this->tipe,
			$this->pamflet,
			$this->durasi,
			$this->id_postingan
			));
 	}

 	function delete(){
 		global $pdo;
 		$query = $pdo->prepare("DELETE FROM `postingan` WHERE `postingan`.`id_postingan` = ?");
		$query->execute(array($this->id_postingan));
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

  	function select_postingan($id){
		$query = "SELECT * FROM `postingan` WHERE `postingan`.`id_postingan` = ?";
		$param = array($id);
		return $this->get_data($query, $param);
	}

	function select_all_kategori($id){
		$result = $this->select_postingan($id);
		$hasil = unserialize($result['data']['kategori']);

		foreach ($hasil as $key) {
			echo '<li>'.$key.'</li>';
		}
	}

	function select_by_pengiklan(){
		$query = "SELECT * FROM `postingan` WHERE `postingan`.`id_pengiklan` = ?";
		$param = array($_SESSION['user']['id_pengiklan']);
		return $this->get_all_rows($query, $param);
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

	function select_active(){
		$query = "select * from postingan where datediff(current_date(),postingan.tanggal) < postingan.durasi";
		return $this->get_all_rows($query, '');
	}	

	function select_tipe_active($tipe){
		$query = "SELECT * FROM `postingan` WHERE `postingan`.`tipe` = ? and datediff(current_date(),postingan.tanggal) < postingan.durasi";
		$param = array($tipe);
		return $this->get_all_rows($query, $param);
	}


 } 

 ?>