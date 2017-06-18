<?php
session_start();
	if(empty($_SESSION['username'])){
		echo "<script type='text/javascript'>alert('Anda Harus Login!');window.location = 'index.php';</script>";
	}
?>

<?php
include 'koneksi.php';
  $mapel = $_GET['mapel'];
  $nama = $_SESSION['username'];
  $sql = mysqli_query($koneksi,"SELECT mapel FROM siswa_pesan where mapel = '$mapel' AND username='$nama'");
  $ketemu1=mysqli_num_rows($sql);
  $r=mysqli_fetch_array($sql);
  if ($ketemu1 == 0){
  echo "<script type='text/javascript'>window.location.href='order.php?mapel=$mapel'</script>";
  }else{
  echo "<script type='text/javascript'>alert('Anda Telah Memesan Kelas $mapel');window.location='kelas.php'</script>";
  }
?>
