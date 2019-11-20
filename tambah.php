<?php 
include 'koneksi.php';
$username = $_POST['nim'];
$nama = $_POST['nama'];
 
mysql_query("INSERT INTO mahasiswa VALUES('','$nim','$nama')");
 
header("location:input.php?pesan=input");
?>