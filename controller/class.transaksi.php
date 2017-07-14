<?php 

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


 ?>