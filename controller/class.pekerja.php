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

			return $this->get_data($query, $param);
	}

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

 	function set_all_property($data_array){
 		$this->id_pekerja = $data_array['id_pekerja'];
 		$this->username = $data_array['username'];
 		$this->email = $data_array['email'];
 		$this->no_hp = $data_array['no_hp'];
 		$this->password = $data_array['password'];
 		$this->foto_profile = $data_array['foto_profile'];
 		$this->nama = $data_array['nama'];
 		$this->sosmed = $data_array['sosmed'];
 		$this->provinsi = $data_array['provinsi'];
 		$this->kota = $data_array['kota'];
 		$this->kecamatan = $data_array['kecamatan'];
 		$this->alamat = $data_array['alamat'];
 		$this->keahlian = $data_array['keahlian'];
 		$this->foto_pengenal = $data_array['foto_pengenal'];
 		$this->tanggal = $data_array['tanggal'];
 	}

 	function set_profile_updated(){
 		$this->foto_profile = $_POST['foto_profile'];
		$this->nama = $_POST['nama'];
		$this->email = $_POST['email'];
		$this->no_hp = $_POST['no_hp'];
		$this->sosmed = $_POST['sosmed'];
		$this->provinsi = $_POST['provinsi'];
		$this->kota = $_POST['kota'];
		$this->kecamatan = $_POST['kecamatan'];
		$this->alamat = $_POST['alamat'];
		$this->keahlian = $_POST['keahlian'];

		$this->update();
 	}

 	function select_profile($id){
			$query = "SELECT * FROM `pekerja` WHERE `pekerja`.`id_pekerja` = ?";
			$param = array($id);
			return $this->get_data($query, $param);
	}
 } 

 ?>