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
            height:50%;
            background-size: cover;
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

    <div class="jumbotron">

        <h3><i>Start your journey with us!</i></h3>
        <br>
        <p><a class="btn btn-primary btn-md" href="tour.php" role="button">Daftar Paket Tour!</a></p>
    </div>


            <div class="col-sm-8">

                <div class="panel panel-default">
                    <div class="panel-body">
                    </div>
                </div>

            </div>
            <div class="col-sm-4">

                <div class="panel panel-default">
                    <div class="panel-body">

                    </div>
                </div>
            </div>

</body>

</html>
