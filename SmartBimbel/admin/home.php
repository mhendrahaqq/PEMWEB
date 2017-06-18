<?php
session_start();
	if(empty($_SESSION['namauser'])){
		echo "<script type='text/javascript'>alert('Anda Harus Login!');window.location = 'index.php';</script>";
	}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div id="container">
      <nav>
        <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="#">Siswa</a>
         <ul>
           <li><a href="lihat_siswa.php">Lihat Siswa</a></li>
           <li><a href="tambah_siswa.php">Tambah Siswa</a></li>
         </ul>
         <li><a href="#">Kelas</a>
          <ul>
            <li><a href="lihat_kelas.php">Lihat Kelas</a></li>
            <li><a href="tambah_kelas.php">Tambah Kelas</a></li>
          </ul>
        <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>
      <div id="isi">
      </br></br><center><h2>Selamat Datang</h2></center>
      <p>Anda telah memasuki Halaman Administrator.</p>
      <p>Admin dapat melakukan :</p>
      <p>1. Menambah Siswa</p>
      <p>2. Melihat Siswa</p>
      <p>3. Menambah Kelas</p>
      <p>4. Melihat Kelas</p>
      <p>5. Mengedit Kelas</p>
      <p>6. Menghapus Kelas</p>
      </div>
    </div>
  </body>
</html>
