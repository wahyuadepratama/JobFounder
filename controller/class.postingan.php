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
 	public $lat;
 	public $lang;
 	public $approved;
 	public $tgl_approved;

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
 			`tanggal`,
 			`lat`,
 			`lang`,
 			`approved`) 
 			VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, CURRENT_TIMESTAMP, ?, ?, ?)");
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
			$this->lat,
			$this->lang,
			$this->approved

			));
 	}

 	function set_all_property($status,$durasi,$approved){

 		$kategori = serialize($_POST['kategori']);

		$this->id_pengiklan = $_SESSION['user']['id_pengiklan'];
		$this->judul 		= $_POST['judul'];
		$this->deskripsi 	= $_POST['deskripsi'];
		$this->gaji 		= $_POST['gaji'];
		$this->keterangan 	= $_POST['keterangan'];
		$this->tipe 		= $_POST['tipe'];
		$this->kategori 	= $kategori;
		$this->durasi 		= $durasi;
		$this->status 		= $status;
		$this->lat 			= $_POST['lat'];
		$this->lang 		= $_POST['lang'];
		$this->approved		= $approved;

		if($status=='pro'){
			$this->pamflet = $_POST['pamflet'];
		}
 	}

 	function approved($approved,$id){
 		global $pdo;
 		$query = $pdo->prepare("UPDATE `postingan` SET 
 			`approved`		=? 
 			WHERE `postingan`.`id_postingan` = ?");
		$query->execute(array(
			$approved,
			$id
			));
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
		$query = "select * from postingan where datediff(current_date(),postingan.tgl_approved) < postingan.durasi";
		return $this->get_all_rows($query, '');
	}	

	function select_tipe_active($tipe){
		$query = "SELECT * FROM `postingan` WHERE `postingan`.`tipe` = ? and datediff(current_date(),postingan.tgl_approved) < postingan.durasi";
		$param = array($tipe);
		return $this->get_all_rows($query, $param);
	}

	function select_all_postingan(){
		$query = "select * from postingan";
		return $this->get_all_rows($query, '');
	}

 	function delete_by_id($id){
 		global $pdo;
 		$query = $pdo->prepare("DELETE FROM `postingan` WHERE `postingan`.`id_postingan` = ?");
		$query->execute(array($id));
 	}

 	function approve($id){
 		global $pdo;
 		$query = $pdo->prepare("UPDATE `postingan` SET `approved` = 'sudah', `tgl_approved` = current_date() WHERE `postingan`.`id_postingan` = ?;");
		$query->execute(array($id));	
 	}

 	function select_by_kategori($arraydata,$tipe){
 		if($tipe==''){
 			$query = "SELECT * FROM `postingan` WHERE datediff(current_date(),postingan.tgl_approved) < postingan.durasi and ("; 			

 		}else{
 			$query = "SELECT * FROM `postingan` WHERE tipe='".$tipe."' and datediff(current_date(),postingan.tgl_approved) < postingan.durasi and ("; 
 			
 		}
 		
 		foreach ($arraydata as $key => $value) {
 			if($key > 0){
 				$query=$query." or ";
 			}
 			$query=$query."kategori like '%".$value."%'";
 		}
 		$query=$query.")";
		return $this->get_all_rows($query, '');	
 	}

 } 

 ?>