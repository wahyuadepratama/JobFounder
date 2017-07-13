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
				$data[$i]['email']=$r['email'];
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

 	function insert(){
 		global $pdo;
 		$query = $pdo->prepare("
 			INSERT INTO `pekerja` (`id_pekerja`, `username`, `email`, `no_hp`, `password`, `tanggal`) 
 			VALUES (NULL, ?, ?, ?, ?, CURRENT_TIMESTAMP)");
		$query->execute(array($this->username,$this->email,$this->no_hp,$this->password));
 	}

 	function select(){
 		global $pdo;
 		$query = $pdo->prepare("SELECT * FROM `pekerja`");
 		$query->execute();
		if($query->rowCount() > 0 ){
			$i = 0;
			while ($r = $query->fetch()) {                                    
				$data[$i]['id_pekerja']=$r['id_pekerja'];
				$data[$i]['username']=$r['username'];
				$data[$i]['email']=$r['email'];
				$data[$i]['no_hp']=$r['no_hp'];
				$data[$i]['password']=$r['password'];
				$data[$i]['foto_profile']=$r['foto_profile'];
				$data[$i]['nama']=$r['nama'];
				$data[$i]['sosmed']=$r['sosmed'];
				$data[$i]['provinsi']=$r['provinsi'];
				$data[$i]['kota']=$r['kota'];
				$data[$i]['kecamatan']=$r['kecamatan'];
				$data[$i]['alamat']=$r['alamat'];
				$data[$i]['keahlian']=$r['keahlian'];
				$data[$i]['foto_pengenal']=$r['foto_pengenal'];
				$data[$i]['tanggal']=$r['tanggal'];
				$i++;								                            	
			}
		}
		return $data;
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
 } 

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

 	function insert(){
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

 	function select(){
 		global $pdo;
 		$query = $pdo->prepare("SELECT * FROM `postingan`");
 		$query->execute();
		if($query->rowCount() > 0 ){
			$i = 0;
			while ($r = $query->fetch()) {                                    
				$data[$i]['id_postingan']=$r['id_postingan'];
				$data[$i]['id_pengiklan']=$r['id_pengiklan'];
				$data[$i]['judul']=$r['judul'];
				$data[$i]['deskripsi']=$r['deskripsi'];
				$data[$i]['kategori']=$r['kategori'];
				$data[$i]['gaji']=$r['gaji'];
				$data[$i]['keterangan']=$r['keterangan'];
				$data[$i]['tipe']=$r['tipe'];
				$data[$i]['pamflet']=$r['pamflet'];
				$data[$i]['durasi']=$r['durasi'];
				$data[$i]['status']=$r['status'];
				$data[$i]['tanggal']=$r['tanggal'];
				$i++;								                            	
			}
		}
		return $data;
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
 } 

class transaksi
 {

 	public $id_transaksi;
 	public $id_pengiklan;
 	public $tanggal;
 	public $no_rekening;
 	public $jumlah_uang;
 	public $jumlah_koin; 

 	function __construct(){}

 	function insert(){
 		global $pdo;
 		$query = $pdo->prepare("
 			INSERT INTO `transaksi` (
 			`id_transaksi`, 
 			`id_pengiklan`, 
 			`tanggal`, 
 			`no_rekening`, 
 			`jumlah_uang`, 
 			`jumlah_koin`) 
 			VALUES (NULL, ?, ?, ?, ?, ?)");
		$query->execute(array(
			$this->id_pengiklan,
			$this->tanggal,
			$this->no_rekening,
			$this->jumlah_uang,
			$this->jumlah_koin
			));
 	}

 	function select(){
 		global $pdo;
 		$query = $pdo->prepare("SELECT * FROM `transaksi`");
 		$query->execute();
		if($query->rowCount() > 0 ){
			$i = 0;
			while ($r = $query->fetch()) {                                    
				$data[$i]['id_transaksi']=$r['id_transaksi'];
				$data[$i]['id_pengiklan']=$r['id_pengiklan'];
				$data[$i]['tanggal']=$r['tanggal'];
				$data[$i]['no_rekening']=$r['no_rekening'];
				$data[$i]['jumlah_uang']=$r['jumlah_uang'];
				$data[$i]['jumlah_koin']=$r['jumlah_koin'];
				$i++;								                            	
			}
		}
		return $data;
 	}

 	function update(){
 		global $pdo;
 		$query = $pdo->prepare("UPDATE `transaksi` SET 
 			`id_pengiklan`	=?, 
 			`tanggal`		=?, 
 			`no_rekening`	=?, 
 			`jumlah_uang`	=?, 
 			`jumlah_koin`	=?
 			WHERE `transaksi`.`id_transaksi` = ?");
		$query->execute(array(
			$this->id_pengiklan,
			$this->tanggal,
			$this->no_rekening,
			$this->jumlah_koin,
			$this->jumlah_uang,
			$this->id_transaksi
			));
 	}

 	function delete(){
 		global $pdo;
 		$query = $pdo->prepare("DELETE FROM `transaksi` WHERE `transaksi`.`id_transaksi` = ?");
		$query->execute(array($this->id_transaksi));
 		}
 } 

class lowongan
 {

 	public $id_lowongan;
 	public $id_pekerja;
 	public $id_postingan; 

 	function __construct(){}

 	function insert(){
 		global $pdo;
 		$query = $pdo->prepare("
 			INSERT INTO `lowongan` (
 			`id_lowongan`, 
 			`id_pekerja`, 
 			`id_postingan`) 
 			VALUES (NULL, ?, ?)");
		$query->execute(array(
			$this->id_pekerja,
			$this->id_postingan
			));
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



