<?php 
	class connectCrud {
		public $host;
		public $user;
		public $pass;
		public $cmd;
		public $db;
		public $koneksi;
		
		public function getDatabase(){
			$this->host="localhost";
			$this->user="root";
			$this->pass="";
			$this->koneksi=mysql_connect($this->host, $this->user, $this->pass);
			if(!$this->koneksi){
				echo"Koneksi GAGAL";
				exit();
			}
			$this->db="buku";
			$selectDB = mysql_select_db($this->db, $this->koneksi);
			if(!$selectDB){
				echo"Database tidak ada";
			}
		}
		
		public function closeDB(){
			$this->cmd=mysql_close($this->koneksi);
			return $this->cmd;	
		}
		
	}
?>