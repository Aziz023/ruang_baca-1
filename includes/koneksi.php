<?php
//mengkoneksi ke database
mysql_connect("localhost", "root", "") or die (mysql_error());

//pilih database
mysql_select_db("buku") or die ("database belum ada");

?>