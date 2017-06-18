<?php
include 'koneksi.php';
$mapel = $_POST['mapel'];
$ruangan = $_POST['ruangan'];
$pengajar = $_POST['pengajar'];
$hari = $_POST['hari'];
$waktu = $_POST['waktu'];
$kuota = $_POST['kuota'];

mysqli_query($koneksi,"UPDATE kelas SET ruangan = '$ruangan', pengajar = '$pengajar',
             hari = '$hari', waktu = '$waktu', kuota = '$kuota' WHERE mapel = '$mapel'");

header("location:lihat_kelas.php?pesan=update");
?>
