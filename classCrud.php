<?php 
	include "classDB.php";
	
	class crudQu extends connectCrud{
		public $command;
		
		public function insert($tabel, $col, $values){
			$this->command= "INSERT INTO ".$tabel." (".$col.") VALUES (".$values.")";
			$query = mysql_query($this->command);
			if(!$query){
				echo"<script>alert('Insert GAGAL');history.back()</script>>";
				exit();
			}else {
				echo"<script>alert('Berhasil');history.back()</script>>";
				exit();
			}
		}
	}
?>