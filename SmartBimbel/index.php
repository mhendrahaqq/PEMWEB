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
        .jumbotron {
            width: 100%;
            height: 290px;
            margin-top: 45px;
            background-size: cover;
            background-image: url(gambar/banner.png);
            overflow: hidden;
            text-align: center;
        }
    </style>

</head>

<body>
    <nav id="navigator" class="navbar navbar-default navbar-fixed-top">
        <ul class="topnav">
            <li><a href="index.php">Home</a></li>
            <li><a href="kelas.php">Kelas</a></li>
            <li><a href="about.php">Tentang Kami</a></li>
            <div class="kanan">
                <?php
              if(isset($_SESSION['username'])){
              $nama = $_SESSION['username'];?>

                    <li>
                        <a href="#">
                            <?php echo $nama ?>
                        </a>
                    </li>
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

    <div class="jumbotron">
        <!--        <p><a class="btn btn-primary btn-md" href="tour.php" role="button">Daftar Paket Tour!</a></p>-->
    </div>

    <div class="container-fluid">
        <div class="col-sm-8">

            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-sm-4">
                        <img src="gambar/t1.png" width="100%" height="230px">
                    </div>
                    
                    <div class="col-sm-8">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <p>NAMA : ROMMEL YONATHANI </p>
                                <p>KELAS : XI IPA </p>
                                <p>SEKOLAH : SMA NEGERI 1 PANGKALPINANG </p>
                                <p>PERINGKAT : JUARA 2 UMUM</p>
                                <p>TESTIMONI : DI SMART BIMBEL TENTOR – TENTORNYA ASYIK ,DALAM PELAJARANNYA MUDAH DI PAHAMI DAN DI PELAJARI . POKOKNYA LES DI SMART BIMBEL ASYIKKK!</p>
                            </div>
                        </div>
                    </div>
                    
                     <div class="col-sm-4">
                        <img src="gambar/t2.png" width="100%" height="230px">
                    </div>
                    
                    <div class="col-sm-8">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <p>NAMA :EFRILYA </p>
                                <p>KELAS : XI IPS </p>
                                <p>SEKOLAH : SMA NEGERI 4 PANGKALPINANG </p>
                                <p>PERINGKAT : JUARA 1 KELAS</p>
                                <p>TESTIMONI : SEMENJAK LES DI SMART BIMBEL , PRESTASI SAYA SEMAKIN MENINGKAT , LES DI SMART BIMBEL JUGA SAYA SEMAKIN BANYAK TEMAN . SAYA SANGAT PUAS BERGABUNG DISMART BIMBEL </p>
                            </div>
                        </div>
                    </div>
                    
                      <div class="col-sm-4">
                        <img src="gambar/t3.png" width="100%" height="230px">
                    </div>
                    
                    <div class="col-sm-8">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <p>NAMA : DESY ELVIRA </p>
                                <p>KELAS : XI IPA </p>
                                <p>SEKOLAH : SMA NEGERI 1 PANGKALPINANG </p>
                                <p>PERINGKAT : JUARA 1 UMUM</p>
                                <p>TESTIMONI : SELAMA LES DI SMART BIMBEL , NILAI SAYA TAMBAH MENINGKAT , TERIMA KASIH SMART BIMBEL                    SALAM OLAHRAGA !!!!
                                
                                :D
                                :D
                                 </p>
                            </div>
                        </div>
                    </div>
                    
                      <div class="col-sm-4">
                        <img src="gambar/t4.png" width="100%" height="230px">
                    </div>
                    
                    <div class="col-sm-8">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <p>NAMA : FAHRINA </p>
                                <p>KELAS : XII IPA </p>
                                <p>SEKOLAH : SMA NEGERI 2 PANGKALPINANG </p>
                                <p>PERINGKAT : JUARA 1 UMUM</p>
                                <p>TESTIMONI : SELAMA SAYA LES DI SMART BIMBEL , SAYA MENDAPAT TEMAN – TEMAN BARU , BISA BERTANYA TENTANG PELAJAAN YANG SAYA TIDAK MENGERTI , TEMPAT DAN FASILITAS YANG OKE .          </p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class="col-sm-4">

            <div class="panel panel-default">
                <div class="panel-body">

                </div>
            </div>
        </div>
    </div>

    <footer>
        <div id="bawah" class="container-fluid">
            <div class="col-sm-4">
                <h4><img src="png/001-school.png" width="10%"> Jl. Pegangsaan timur no. 56, Jakarta.</h4>


            </div>
            <div class="col-sm-4">
                <h4> <img src="png/002-technology.png" width="8%"> (0989) 8888888</h4>
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