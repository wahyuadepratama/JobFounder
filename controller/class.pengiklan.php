<?php 

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
 	public $deskripsi;

 	function __construct(){}

 	function set_all_property($data_array){
 		$this->id_pengiklan = $data_array['id_pengiklan'];
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
 		$this->lokasi = $data_array['lokasi'];
 		$this->koin = $data_array['koin'];
 		$this->tanggal = $data_array['tanggal'];
 		$this->deskripsi = $data_array['deskripsi'];
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

 	function insert_data(){
 		global $pdo;
 		$query = $pdo->prepare("
 			INSERT INTO `pengiklan` (`id_pengiklan`, `username`, `email`, `no_hp`, `password`, `koin`, `tanggal`, `deskripsi`) 
 			VALUES (NULL, ?, ?, ?, ?, '0', CURRENT_TIMESTAMP , NULL)");
		$query->execute(array($this->username,$this->email,$this->no_hp,$this->password));
 	}

 	function cek_login($data_array){
			$query = "SELECT * FROM pengiklan WHERE username=:lusername AND password=:lpassword";
			$param = array(
					':lusername' => strtoupper($data_array['lusername']),
					':lpassword' => md5($data_array['lpassword'])
				);

			return $this->get_data($query, $param);
	}

 	function update_data(){
 		global $pdo;
 		$query = $pdo->prepare("UPDATE `pengiklan` SET 
 			`foto_profile` 	= ?,
 			`nama` 			= ?,
 			`deskripsi`		= ?,
 			`sosmed` 		= ?,
 			`provinsi` 		= ?,
 			`kota` 			= ?,
 			`kecamatan` 	= ?,
 			`alamat` 		= ?,
 			`lokasi` 		= ?,
 			`koin` 			= ?
 			WHERE `pengiklan`.`id_pengiklan` = ?");
		$query->execute(array(
			$this->foto_profile,
			$this->nama,
			$this->deskripsi,
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

 	function set_profile_updated(){
 		$this->foto_profile = $_POST['foto_profile'];
		$this->nama = $_POST['nama'];
		$this->deskripsi = $_POST['deskripsi'];
		$this->email = $_POST['email'];
		$this->no_hp = $_POST['no_hp'];
		$this->sosmed = $_POST['sosmed'];
		$this->provinsi = $_POST['provinsi'];
		$this->kota = $_POST['kota'];
		$this->kecamatan = $_POST['kecamatan'];
		$this->alamat = $_POST['alamat'];
		$this->lokasi = $_POST['lokasi'];

		$this->update_data();
 	}

  	function select_profile($id){
			$query = "SELECT * FROM `pengiklan` WHERE `pengiklan`.`id_pengiklan` = ?";
			$param = array($id);
			return $this->get_data($query, $param);
	}
 }

 ?>