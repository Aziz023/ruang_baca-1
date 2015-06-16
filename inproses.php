<?php
session_start();
include "classCrud.php";

$jalan = new crudQu;
$jalan->getDatabase();

$proses = "";

if(!isset($_POST['proses']) || $_POST['proses']=="") $proses = $_GET['proses'];
else $proses = $_POST['proses'];
switch($proses){
	case "tambah":
		$IDbuku	= $_POST['IDbuku'];
		$Judul	= $_POST['Judul'];
		$Penulis= $_POST['Penulis'];
		$Pengarang	= $_POST['Pengarang'];
		$Index	= $_POST['Index'];
		$Tahun	= $_POST['Tahun'];
		$Jumlah	= $_POST['Jumlah'];
		$Rak		= $_POST['Rak'];
		$kolom= "IDbuku, Judul, Penulis, Pengarang, Index, Tahun, Jumlah, Rak";
		$isi = "'$IDbuku','$Judul', '$Penulis', '$Pengarang', '$Index', '$Tahun', '$Jumlah', '$Rak'";
		//$jalan->insert("tbbuku",$kolom,$isi);
		//masukan ke database
		$cek = $jalan->insert ("tbbuku",$kolom,$isi);//mysql_query("INSERT INTO tbbuku VALUES ('$IDbuku','$Judul','$Penulis','$Pengarang','$Index','$Tahun','$Jumlah','$Rak')");
		//cek apa bisa dimasukan
		if ($cek == true) echo "<script>alert('TAMBAH BUKU SUKSES');</script>";
		else echo "<script>alert('Gagal');</script>";
	break;
}
?>
<meta http-equiv="refresh" content="1;URL=input.php" />