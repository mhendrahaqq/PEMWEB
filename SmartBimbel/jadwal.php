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
        .kolom {
            margin-top: 5%;
        }
        
        #fotoprofil {
            margin-left: 40%;
        }
        #samping a{
            text-decoration: none;
            list-style: none;
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
    <div id="kolom" class="container-fluid">
      
       <div id="samping" class="col-sm-2">
            <div class="panel panel-default">
                <div class="panel-body">
                   <ul>
                       <li><a href="editprofil.php">Edit Profil</a></li>
                       <li><a href="jadwal.php">Jadwal Saya</a></li>
                       <li><a href="editakun.php">Setting Akun</a></li>
                   </ul>
                </div>
            </div>
        </div>
        
        <div class="col-sm-10">
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