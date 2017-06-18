<?php
  include 'koneksi.php';
  session_start();
  if(empty($_SESSION['namauser'])){
    echo "<script type='text/javascript'>alert('Anda Harus Login!'); window.location = 'index.php';</script>";
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
			echo "<script type='text/javascript'>alert('Data Berhasil Di Input');window.location='lihat_kelas.php'</script>";
		}else if($pesan == "update"){
			echo "<script type='text/javascript'>alert('Data Berhasil Di Update');window.location='lihat_kelas.php'</script>";
		}else if($pesan == "hapus"){
			echo "<script type='text/javascript'>alert('Data Berhasil Di Hapus');window.location='lihat_kelas.php'</script>";
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
				<th>ID</th>
        <th>Kelas</th>
				<th>Ruangan</th>
				<th>Pengajar</th>
				<th>Hari</th>
				<th>Waktu</th>
        <th>Kuota</th>
        <th>Aksi</th>
			</tr>
					<?php
					include "koneksi.php";
					$query_mysql = mysqli_query($koneksi,"SELECT * FROM kelas");
					$nomor = 1;
					while($data = mysqli_fetch_array($query_mysql)){
					?>
					<form method="GET">
					<tr>
						<td><?php echo $nomor++; ?></td>
            <td><?php echo $data['mapel']; ?></td>
						<td><?php echo $data['ruangan']; ?></td>
						<td><?php echo $data['pengajar']; ?></td>
						<td><?php echo $data['hari']; ?></td>
            <td><?php echo $data['waktu']; ?></td>
            <td><?php echo $data['kuota']; ?></td>
            <td>
      				<a class="edit" href="edit.php?mapel=<?php echo $data['mapel']; ?>">Edit</a> |
      				<a class="hapus" href="hapus.php?mapel=<?php echo $data['mapel']; ?>">Hapus</a>
      			</td>
					</tr>
				</form>
					<?php } ?>
				</table>
			</div>
		</div>
	</body>
</html>
