<?php
	 	session_start();
		include "includes/koneksi.php";
        $nama = $_POST['nama'];
        $pass = $_POST['pass'];
       
        $login = mysql_query("SELECT * FROM tbpelanggan WHERE nama='$nama' AND password='$pass'");
        $hasil = mysql_num_rows($login);
        $r = mysql_fetch_array($login);
        if ($hasil > 0)
        {
			
          
          session_register("id");
          session_register("nama");
          session_register("password");
		  
		  $_SESSION[id]     = $r[id];
          $_SESSION[nama]     = $r[nama];
          $_SESSION[password]     = $r[password];
		  
          header('location:tes.php');
        }
        else{ echo "LOGIN GAGAL! <br> <a href='login.php'><< Kembali</a>"; }
?>