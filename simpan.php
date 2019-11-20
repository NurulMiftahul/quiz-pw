<?php
  include "koneksi.php";
  $nim  = $_REQUEST['nim'];
  $nama  = $_REQUEST['nama'];
  $mysqli  = "INSERT INTO user (nim, nama) VALUES ('$nim', '$nama)";
  $result  = mysqli_query($conn, $mysqli);
  if ($result) {
    echo "Input berhasil";
  } else {
    echo "Input gagal";
  }
  mysqli_close($conn);
?>