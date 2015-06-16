<?php session_start (); ?>
<?php
if(isset($_SESSION['nama'])) {
	include "classCrud.php";
	$exe = new crudQu;
	$exe->getDatabase();
?>
<html>
<head>
<title>Toko Buku</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body background="gambar/5.png">
<table width="100%" height="100%">
<tr>
  <td align="center" valign="middle"><table width="100%" height="100%">
    <tr>
      <td align="center" valign="middle"><h2 align="center"><a href="home.php">Home</a></h2>
        <?php 
			$exe->getDatabase();
		?>
        <form method="POST" action="prosesInput.php" enctype="multipart/form-data" style="border:4px solid grey; width:500px; -moz-border-radius:30px; padding-top:20px; padding-bottom:30px">
          <input type="hidden" name="proses" value="tambah"/>
          <table class="datatable" align="center">
           <tr>
              <td>ID</td>
              <td> : </td>
              <td><input type="text" name="IDbuku"/></td>
            </tr> <tr>
              <td>Judul</td>
              <td> : </td>
              <td><input type="text" name="Judul"/></td>
            </tr> 
			<tr>
              <td>Penulis</td>
              <td> : </td>
              <td><input type="text" name="Penulis"/></td>
            </tr> 
			<tr>
              <td>Pengarang</td>
              <td> : </td>
              <td><input type="text" name="Pengarang"/></td>
            </tr> 
			<tr>
              <td>Index</td>
              <td> : </td>
              <td><input type="text" name="Index"/></td>
            </tr> 
			<tr>
              <td>Tahun</td>
              <td> : </td>
              <td><input type="text" name="Tahun"/></td>
            </tr> 
			<tr>
              <td>Jumlah</td>
              <td> : </td>
              <td><input type="text" name="Jumlah"/></td>
            </tr> 
			<tr>
              <td>Rak</td>
              <td> : </td>
              <td><input type="text" name="Rak"/></td>
            </tr> 
			
            <tr>
              <td>&nbsp;</td>
              <td colspan="3"><input name="submit" type="submit" value="Upload" />
                &nbsp;</td>
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

