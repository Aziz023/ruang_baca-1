<?php session_start (); ?>
<?php
if(isset($_SESSION['nama'])) {
	include "includes/koneksi.php";
?>
<html>
<head>
<title>Toko Buku</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body background="gambar/1.1.jpg">
<table width="100%" height="100%">
<tr>
  <td align="center" valign="middle"><table width="100%" height="100%">
    <tr>
      <td align="center" valign="middle"><h2 align="center">Selamat Datang, <?php echo $_SESSION['nama']; ?></h2>
        <?php include "includes/koneksi.php";?>
        <form method="POST" action="uploadproses.php" enctype="multipart/form-data" style="border:4px solid black; width:500px; -moz-border-radius:20px; padding-top:20px; padding-bottom:30px">
          <input type="hidden" name="proses" value="tambah"/>
          <table class="datatable" align="center">
            
            <tr>
              <td colspan="3" align="center" valign="middle"><h2>SILAHKAN</h2></td>
            </tr>
			<tr>
              <td align="center" valign="middle"><a href="input.php"><h4>Input Data<br>BUKU<h4></a></td>
              <td> </td>
              <td align="center" valign="middle"><a href="Cari.php"><h4>Stok Pencarian<br>BUKU<h4></a></td>
            </tr> 
            <tr>
				<td></td>
				<td></td>
              <td align="center" valign="middle"><a href="logout.php"><h4>Logout<h4></a></td>
            </tr>
          </table>
        </form></td>
    </tr>
  </table>    <h2 align="center">&nbsp;</h2></td>
</tr>
</table>
<li></li>
</body>
</html>
<?php
}else{
	echo "<meta http-equiv='refresh' content='0;URL=index.php' />";
}
?>

