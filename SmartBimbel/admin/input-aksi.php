<?php
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$nama_lengkap = $_POST['nama'];


mysqli_query($koneksi,"INSERT INTO siswa VALUES('$username','$password','$nama_lengkap')");

header("location:lihat_siswa.php?pesan=input");
?>
'
