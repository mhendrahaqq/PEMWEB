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
      	<form action="input-aksi.php" method="post">
      		<table>
      			<tr>
      				<td>Username</td>
      				<td><input type="text" name="username" required=""></td>
      			</tr>
      			<tr>
      				<td>Password</td>
      				<td><input type="text" name="password" required=""></td>
      			</tr>
            <tr>
      				<td>Nama Lengkap</td>
      				<td><input type="text" name="nama" required=""></td>
      			</tr>
      			<tr>
      				<td><input type="submit" value="Simpan"></td>
      			</tr>
      		</table>
      	</form>
      </div>
    </div>
  </body>
</html>
