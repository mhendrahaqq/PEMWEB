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
      </br></br>
      	<h3>Input data baru</h3>
      	<form action="input-opsi.php" method="post">
      		<table>
            <tr>
      				<td>Mapel</td>
      				<td><input type="text" name="mapel" required=""></td>
      			</tr>
      			<tr>
      				<td>Ruangan</td>
      				<td><input type="text" name="ruangan" required=""></td>
      			</tr>
      			<tr>
      				<td>Pengajar</td>
      				<td><input type="text" name="pengajar" required=""></td>
      			</tr>
            <tr>
      				<td>Hari</td>
      				<td><input type="text" name="hari" required=""></td>
      			</tr>
            <tr>
      				<td>Waktu</td>
      				<td><input type="text" name="waktu" required=""></td>
      			</tr>
            <tr>
      				<td>Kuota</td>
      				<td><input type="number" name="kuota" min="0" max="30" required=""></td>
      			</tr>
      			<tr>
      				<td></td>
      				<td><input type="submit" value="Simpan"></td>
      			</tr>
      		</table>
      	</form>
      </div>
    </div>
  </body>
</html>
