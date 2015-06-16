<?php
session_start();
include "includes/koneksi.php";
$Judul	= $_POST['Judul']; //get the nama value from form
$q = "SELECT * from tbbuku where Judul like '%$Judul%' "; //query to get the search result
$result = mysql_query($q); //execute the query $q
echo "<center>";
echo "<h2> Hasil Searching </h2>";
echo "<table border='1' cellpadding='5' cellspacing='8'>";
echo "
<tr bgcolor='white'>
<td>No.</td>
<td>ID</td>
<td>Judul</td>
<td>Penulis</td>
<td>Pengarang</td>	
<td>Index</td>
<td>Tahun</td>
<td>Jumlah</td>
<td>Rak</td>
</tr>";
$no=1;
while ($data = mysql_fetch_array($result)) {  //fetch the result from query into an array
echo"<tr>";
echo"<td>$no.</td>";
					echo"<td>$data[IDbuku]</td>";
					echo"<td>$data[Judul]</td>";
					echo"<td>$data[Penulis]</td>";
					echo"<td>$data[Pengarang]</td>";
					echo"<td>$data[Index]</td>";
					echo"<td>$data[Tahun]</td>";
					echo"<td>$data[Jumlah]</td>";
					echo"<td>$data[Rak]</td>";
echo"</tr>";
$no = $no + 1;
}
echo "</table>";
?>
<html>
<head>
<body>
<a href="home.php">Kembali</a></h2>
</body>
</head>
</body>
</html>