<?php 


class pekerja
 {

 	public $id_pekerja;
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
 	public $keahlian;
 	public $foto_pengenal;
 	public $tanggal;

 	function __construct(){}

 	function select_one_data($query, $param){
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

 	function insert_data(){
 		global $pdo;
 		$query = $pdo->prepare("
 			INSERT INTO `pekerja` (`id_pekerja`, `username`, `email`, `no_hp`, `password`, `tanggal`) 
 			VALUES (NULL, ?, ?, ?, ?, CURRENT_TIMESTAMP)");
		$query->execute(array($this->username,$this->email,$this->no_hp,$this->password));
 	}

 	function cek_login($data_array){
			$query = "SELECT * FROM pekerja WHERE username=:lusername AND password=:lpassword";
			$param = array(
					':lusername' => strtoupper($data_array['lusername']),
					':lpassword' => md5($data_array['lpassword'])
				);

			return $this->select_one_data($query, $param);
	}

 	// function select(){
 	// 	global $pdo;
 	// 	$query = $pdo->prepare("SELECT * FROM `pekerja`");
 	// 	$query->execute();
		// if($query->rowCount() > 0 ){
		// 	$i = 0;
		// 	while ($r = $query->fetch()) {                                    
		// 		$data[$i]['id_pekerja']=$r['id_pekerja'];
		// 		$data[$i]['username']=$r['username'];
		// 		$data[$i]['email']=$r['email'];
		// 		$data[$i]['no_hp']=$r['no_hp'];
		// 		$data[$i]['password']=$r['password'];
		// 		$data[$i]['foto_profile']=$r['foto_profile'];
		// 		$data[$i]['nama']=$r['nama'];
		// 		$data[$i]['sosmed']=$r['sosmed'];
		// 		$data[$i]['provinsi']=$r['provinsi'];
		// 		$data[$i]['kota']=$r['kota'];
		// 		$data[$i]['kecamatan']=$r['kecamatan'];
		// 		$data[$i]['alamat']=$r['alamat'];
		// 		$data[$i]['keahlian']=$r['keahlian'];
		// 		$data[$i]['foto_pengenal']=$r['foto_pengenal'];
		// 		$data[$i]['tanggal']=$r['tanggal'];
		// 		$i++;								                            	
		// 	}
		// }
		// return $data;
 	// }

 	function update(){
 		global $pdo;
 		$query = $pdo->prepare("UPDATE `pekerja` SET 
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
 			`keahlian` 		= ?,
 			`foto_pengenal` = ?
 			WHERE `pekerja`.`id_pekerja` = ?");
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
			$this->keahlian,
			$this->foto_pengenal,
			$this->id_pekerja
			));
 	}

 	function delete(){
 		global $pdo;
 		$query = $pdo->prepare("DELETE FROM `pekerja` WHERE `pekerja`.`id_pekerja` = ?");
		$query->execute(array($this->id_pekerja));
 		}
 } 

 ?>