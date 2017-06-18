<?php
include 'koneksi.php';
$mapel = $_GET['mapel'];
mysqli_query($koneksi, "DELETE FROM kelas WHERE mapel='$mapel'");
header("location:lihat_kelas.php?pesan=update");
?>
