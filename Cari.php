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

<body background="gambar/1.6.jpg">
	<table width="100%" height="100%">
			<tr>
				<td align="center" valign="middle">
					<h2 align="center">PENCARIAN</h2><a href="home.php">			Home</a></h2>
					<form method="POST" action="cariproses2.php" enctype="multipart/form-data">
          <input type="hidden" name="proses" value="tambah"/>
		<table> 
		<tr>
              <td>Judul</td>
              <td> : </td>
              <td><input type="text" name="Judul"/></td>
              <td><input name="submit" type="submit" value="Cari" />
                &nbsp;</td>
        </tr>
			</table>
		<table class="table table-bordered" border="1" cellpadding="1" cellspacing="1" id="datatable_2">
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
					echo"<td>$row[IDbuku]</td>";
					echo"<td>$row[Judul]</td>";
					echo"<td>$row[Penulis]</td>";
					echo"<td>$row[Pengarang]</td>";
					echo"<td>$row[Index]</td>";
					echo"<td>$row[Tahun]</td>";
					echo"<td>$row[Jumlah]</td>";
					echo"<td>$row[Rak]</td>";
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
	echo "<meta http-equiv='refresh' content='0;URL=index.php' />";
}
?>