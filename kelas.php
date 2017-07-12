<?php 
include 'koneksi.php';

class admin
 {

 	public $id_admin;
 	public $username;
 	public $password;


 	function __construct(){}

 	function insert(){
 		global $pdo;
 		$query = $pdo->prepare("INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES (NULL, ?, ?)");
		$query->execute(array($this->username,$this->password));
 	}

 	function select(){
 		global $pdo;
 		$query = $pdo->prepare("SELECT * FROM `admin`");
 		$query->execute();
		if($query->rowCount() > 0 ){
			$i = 0;
			while ($r = $query->fetch()) {                                    
				$data[$i]['id_admin']=$r['id_admin'];
				$data[$i]['username']=$r['username'];
				$data[$i]['password']=$r['password'];
				$i++;								                            	
			}
		}
		return $data;
 	}

 	function update(){
 		global $pdo;
 		$query = $pdo->prepare("UPDATE `admin` SET `username` = ?, `password` = ? WHERE `admin`.`id_admin` = ?");
		$query->execute(array($this->username,$this->password,$this->id_admin));
 	}

 	function delete(){
 		global $pdo;
 		$query = $pdo->prepare("DELETE FROM `admin` WHERE `admin`.`id_admin` = ?");
		$query->execute(array($this->id_admin));
 	}

 }

class pengiklan
 {

 	public $id_pengiklan;
 	public $username;
 	public $email;
 	public $no_hp;
 	public $password;
 	public $foto_profile;
 	public $nama;
 	public $sosmed;
 	public $provinsi;
 	public $kota;
 	public $kecamatan;
 	public $alamat;
 	public $lokasi;
 	public $koin;
 	public $tanggal;

 	function __construct(){}

 	function insert(){
 		global $pdo;
 		$query = $pdo->prepare("
 			INSERT INTO `pengiklan` (`id_pengiklan`, `username`, `email`, `no_hp`, `password`, `koin`, `tanggal`) 
 			VALUES (NULL, ?, ?, ?, ?, '0', CURRENT_TIMESTAMP)");
		$query->execute(array($this->username,$this->email,$this->no_hp,$this->password));
 	}

 	function select(){
 		global $pdo;
 		$query = $pdo->prepare("SELECT * FROM `pengiklan`");
 		$query->execute();
		if($query->rowCount() > 0 ){
			$i = 0;
			while ($r = $query->fetch()) {                                    
				$data[$i]['id_pengiklan']=$r['id_pengiklan'];
				$data[$i]['username']=$r['username'];
				$data[$i]['email']=$r['password'];
				$data[$i]['no_hp']=$r['no_hp'];
				$data[$i]['password']=$r['password'];
				$data[$i]['foto_profile']=$r['foto_profile'];
				$data[$i]['nama']=$r['nama'];
				$data[$i]['sosmed']=$r['sosmed'];
				$data[$i]['provinsi']=$r['provinsi'];
				$data[$i]['kota']=$r['kota'];
				$data[$i]['kecamatan']=$r['kecamatan'];
				$data[$i]['alamat']=$r['alamat'];
				$data[$i]['lokasi']=$r['lokasi'];
				$data[$i]['koin']=$r['koin'];
				$data[$i]['tanggal']=$r['tanggal'];
				$i++;								                            	
			}
		}
		return $data;
 	}

 	function update(){
 		global $pdo;
 		$query = $pdo->prepare("UPDATE `pengiklan` SET 
 			`username` 		= ?, 
 			`email` 		= ?,
 			`no_hp` 		= ?,
 			`password` 		= ?,
 			`foto_profile` 	= ?,
 			`nama` 			= ?,
 			`sosmed` 		= ?,
 			`provinsi` 		= ?,
 			`kota` 			= ?,
 			`kecamatan` 	= ?,
 			`alamat` 		= ?,
 			`lokasi` 		= ?,
 			`koin` 			= ?
 			WHERE `pengiklan`.`id_pengiklan` = ?");
		$query->execute(array(
			$this->username,
			$this->email,
			$this->no_hp,
			$this->password,
			$this->foto_profile,
			$this->nama,
			$this->sosmed,
			$this->provinsi,
			$this->kota,
			$this->kecamatan,
			$this->alamat,
			$this->lokasi,
			$this->koin,
			$this->id_pengiklan
			));
 	}

 	function delete(){
 		global $pdo;
 		$query = $pdo->prepare("DELETE FROM `pengiklan` WHERE `pengiklan`.`id_pengiklan` = ?");
		$query->execute(array($this->id_pengiklan));
 	}
 }

?>



