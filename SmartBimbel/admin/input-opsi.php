<?php
include 'koneksi.php';
$mapel = $_POST['mapel'];
$ruangan = $_POST['ruangan'];
$pengajar = $_POST['pengajar'];
$hari = $_POST['hari'];
$waktu = $_POST['waktu'];
$kuota = $_POST['kuota'];

mysqli_query($koneksi,"INSERT INTO kelas VALUES('$mapel','$ruangan','$pengajar','$hari','$waktu','$kuota')");

header("location:lihat_kelas.php?pesan=input");
?>
