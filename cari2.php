<?php session_start (); ?>
<?php
if(isset($_SESSION['nama'])) {
	include "includes/koneksi.php";
?>
<html>
<head>
<title>Pencarian</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body background="gambar/21.png">
	<table width="100%" height="100%">
			<tr>
				<td align="center" valign="middle">
					<h2 align="center">PENCARIAN</h2><a href="home.php">Home</a></h2>
					<?php include "includes/koneksi.php";?>
					<form method="POST" action="cariproses.php" enctype="multipart/form-data">
          <input type="hidden" name="proses" value="tambah"/>
		<table> 
		<tr>
              <td>Judul</td>
              <td> : </td>
              <td><input type="text" name="Judul"/></td>
              <td><input name="submit" type="submit" value="Upload" />
                &nbsp;</td>
        </tr>
			</table>
		<table class="table table-bordered" border="7" cellpadding="1" cellspacing="1" id="datatable_2">
        <thead>
			<tr></tr>
			<tr>
				<th>No.</th>
				<th>ID</th>
				<th>Judul</th>
				<th>Penulis</th>
				<th>Pengarang</th>	
				<th>Index</th>
				<th>Tahun</th>
				<th>Jumlah</th>
				<th>Rak</th>	
			</tr>
         </thead>
         <tbody>
			<?php
				$id = $_SESSION['id'];	
				$download=mysql_query("SELECT * FROM tbbuku");
				$jum = mysql_num_rows($download);
				$no=1;
				while($row=mysql_fetch_array($download)){					
					echo"<tr>";
					echo"<td>$no.</td>";
					echo"<td><b>$row[IDbuku]</b></td>";
					echo"<td><b>$row[Judul]</b></td>";
					echo"<td><b>$row[Penulis]</b></td>";
					echo"<td><b>$row[Pengarang]</b></td>";
					echo"<td><b>$row[Index]</b></td>";
					echo"<td><b>$row[Tahun]</b></td>";
					echo"<td><b>$row[Jumlah]</b></td>";
					echo"<td><b>$row[Rak]</b></td>";
					echo"</tr>";
					$no = $no + 1;
				}
			?>
            </tbody>
		</table>
		
		</div>
	</td>
	</tr>
		</form>
	</table>
	</body>
</html>
<?php
}else{
	echo "<meta http-equiv='refresh' content='0;URL=cari2.php' />";
}
?>