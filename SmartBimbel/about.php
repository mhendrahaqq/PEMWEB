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

                    </div>
                </div>

            </div>
            </div>

</body>

</html>
