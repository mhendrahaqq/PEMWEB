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
       <div id="kolom" class="container-fluid">
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

</div>
            </div>
            <footer>
        <div id="bawah" class="container-fluid">
            <div class="col-sm-4">
                 <h4><img src="png/001-school.png" width="10%">
                Jl. Pegangsaan timur no. 56, Jakarta.</h4>
                
              
            </div>
            <div class="col-sm-4">
                 <h4> <img src="png/002-technology.png" width="8%">
                
                (0989) 8888888</h4>
                       <h4><img src="png/whatsapp.png" width="8%"> 0988997765</h4>
              
            </div>
            <div class="col-sm-4">
                <p><img src="png/dribbble.png" width="4%"> www.smartbimbel.com</p>
                <p><img src="png/facebook.png" width="4%"> Smart Bimbel</p>
                <p><img src="png/google-plus.png" width="4%"> smartbimbel@gmail.com</p>
                <p><img src="png/instagram.png" width="4%"> Smart Bimbel</p>
                <p><img src="png/twitter.png" width="4%"> @smartbimbel</p>
            </div>
           <strong> <p id="copyright">PEMWEB | 2017</p></strong>
        </div>
    </footer>

</body>

</html>
