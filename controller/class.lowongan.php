<?php 


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