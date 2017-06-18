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

        <?php
        	include "koneksi.php";
        	$mapel = $_GET['mapel'];
        	$query_mysql = mysqli_query($koneksi,"SELECT * FROM kelas WHERE mapel='$mapel'");
        	while($data = mysqli_fetch_array($query_mysql)){
        ?>

      	<form action="update.php" method="post">
      		<table>
            <tr>
      				<td>Mapel</td>
      				<td><input type="text" name="mapel" required="" value="<?php echo $data['mapel'] ?>"></td>
      			</tr>
      			<tr>
      				<td>Ruangan</td>
      				<td><input type="text" name="ruangan" required="" value="<?php echo $data['ruangan'] ?>"></td>
      			</tr>
      			<tr>
      				<td>Pengajar</td>
      				<td><input type="text" name="pengajar" required="" value="<?php echo $data['pengajar'] ?>"></td>
      			</tr>
            <tr>
      				<td>Hari</td>
      				<td><input type="text" name="hari" required="" value="<?php echo $data['hari'] ?>"></td>
      			</tr>
            <tr>
      				<td>Waktu</td>
      				<td><input type="text" name="waktu" required="" value="<?php echo $data['waktu'] ?>"></td>
      			</tr>
            <tr>
      				<td>Kuota</td>
      				<td><input type="number" name="kuota" min="0" max="30" required="" value="<?php echo $data['kuota'] ?>"></td>
      			</tr>
      			<tr>
      				<td></td>
      				<td><input type="submit" value="Simpan"></td>
      			</tr>
      		</table>
      	</form>
      </div>
    </div>
    <?php
    }
    ?>
  </body>
</html>
