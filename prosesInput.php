<?php 
	include "classCrud.php";
	$exe = new crudQu;
	$exe->getDatabase();
	
	$IDbuku		= $_POST['IDbuku'];
	$Judul		= $_POST['Judul'];
	$Penulis	= $_POST['Penulis'];
	$Pengarang	= $_POST['Pengarang'];
	$Index		= $_POST['Index'];
	$Tahun		= $_POST['Tahun'];
	$Jumlah		= $_POST['Jumlah'];
	$Rak		= $_POST['Rak'];
	
	$colom = "IDbuku, Judul, Penulis, Pengarang, Index_buku, Tahun, Jumlah, Rak";
	$values = "'$IDbuku', '$Judul', '$Penulis','$Pengarang', '$Index', '$Tahun', '$Jumlah', '$Rak'";
	
	/* 
		$colom = "IDbuku, Judul, Penulis, Pengarang, Index, Tahun, Jumlah, Rak";
		$values = "'$IDbuku', '$Judul', '$Penulis', '$Pengarang', '$Index', '$Tahun', '$Jumlah', '$Rak'";
	*/
	
	$exe->insert("tbbuku",$colom,$values);
	
?>