<?php
  include 'koneksi.php';
  session_start();
  isset($_SESSION['username']);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Smart Bimbel</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-3.2.1.js"></script>
    <style>
        .kolom{
            margin-top: 5%;
        }

    </style>

</head>

<body>
  <?php
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "order"){
			echo "<script type='text/javascript'>alert('Data Berhasil Di Input');window.location='kelas.php'</script>";}}?>
    <nav id="navigator" class="navbar navbar-default navbar-fixed-top">
        <ul class="topnav">
            <li><a href="index.php">Home</a></li>
            <li><a href="kelas.php">Kelas</a></li>
            <li><a href="about.php">Tentang Kami</a></li>
            <div class="kanan">
            <?php
            if(isset($_SESSION['username'])){
            $nama = $_SESSION['username'];?>

                <li><a href="#"><?php echo $nama ?></a></li>
                <li><a href="profil.php">My Profile</a></li>
                <li><a href="logout.php">Logout</a></li>

            <?php
          }else{?>
              <li><a href="login.php">Login</a></li>
            <?php }
            ?>
            </div>
        </ul>
    </nav>
       <div class="kolom">
            <div class="col-sm-12">

                <div class="panel panel-default">
                    <div class="panel-body">
                      <?php
            					include "koneksi.php";

                      $batas = 100;
            					$query_mysql = mysqli_query($koneksi,"SELECT * FROM kelas LIMIT $batas");
            					while($data = mysqli_fetch_array($query_mysql)){
            					?>
                      <div style="display:inline-block; width:220px; border-width:2px;
                                  border-style:solid; margin-left:73px;
                                  margin-right:10px; margin-bottom : 30px; padding:5px;">
            					<form method="GET">

            					<tr>
                      </br></br></br></br></br>Mapel&emsp;&nbsp : <?php echo $data['mapel']; ?></br>
                        Ruang&emsp; : <?php echo $data['ruangan']; ?></br>
            						Pengajar : <?php echo $data['pengajar']; ?></br>
            						Hari &emsp;&emsp; : <?php echo $data['hari']; ?></br>
                        Waktu&emsp;&nbsp; : <?php echo $data['waktu']; ?></br>
                        Kuota&emsp;&nbsp;&nbsp; : <?php if ($data['kuota'] <= 0) {
                        echo 'Penuh';
                        } else {
                        echo $data['kuota'];
                        }
                         ?></br>

                  				<center><input type="button" value="Tambah" placeholder="Tambah" onclick="window.location.href='cek_kelas.php?mapel=<?php echo $data['mapel'] ?>'"></input></center>
                  			</br>
            					</tr>
                    </div>
            				</form>
                    <?php } ?>
                    </div>
                </div>

            </div'
            </div>

</body>

</html>
