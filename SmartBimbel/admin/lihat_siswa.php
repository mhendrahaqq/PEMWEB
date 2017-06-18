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

	<?php
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "<script type='text/javascript'>alert('Data Berhasil Di Input');window.location='lihat_siswa.php'</script>";
		}else if($pesan == "update"){
			echo "Data berhasil di update";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus";
		}
	}
	?>

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
		<h3>Data Siswa</h3>
		<table border="1" class="table">
			<tr>
				<th>No</th>
				<th>Username</th>
				<th>Password</th>
				<th>Nama</th>

			</tr>
					<?php
					include "koneksi.php";
					$query_mysql = mysqli_query($koneksi,"SELECT * FROM siswa");
					$nomor = 1;
					while($data = mysqli_fetch_array($query_mysql)){
					?>
					<tr>
						<td><?php echo $nomor++; ?></td>
						<td><?php echo $data['username']; ?></td>
						<td><?php echo $data['password']; ?></td>
						<td><?php echo $data['nama']; ?></td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</body>
</html>
