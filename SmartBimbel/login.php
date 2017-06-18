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
        #login{
            margin-top: 20%;
            text-align: center;
        }
        .wrapper{
            margin-top: 2%;
        }
        #password{
             width: 30%;
        }
        #username{
           width: 30%;
        }
        #submit{
            margin-bottom: 30%;
        }
    </style>

</head>

<body>
    <nav id="navigator" class="navbar navbar-default navbar-fixed-top">
        <ul class="topnav">
            <li><a href="index.php">Home</a></li>
            <li><a href="paket.php">Paket Belajar</a></li>
            <li><a href="kelas.php">Kelas</a></li>
            <li><a href="about.php">Tentang Kami</a></li>
            <div class="kanan">
                <li><a href="login.php">Login</a></li>
            </div>
        </ul>
    </nav>
       <div class="kolom">
            <div class="col-sm-6">

                <div class="panel panel-default">
                    <div class="panel-body">
                    <img src="gambar/dummy.jpg" width="100%" height="10%">
                    </div>
                </div>

            </div>
            <div class="col-sm-6">

                <div class="panel panel-default">
                    <div id="login" class="panel-body">
                       <h2>LOGIN</h2>
                        <div>
                            <form method="POST" action="cek_login.php">
                                <div class="wrapper">
                                    <input id="username" placeholder="Username" type="text" name="username" required/>
                                </div>
                                <div class="wrapper">
                                <input id="password" placeholder="Password" type="password" name="password" required/>
                                </div>
                                <div class="wrapper">
                                <input id="submit" type="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div></div>

</body>

</html>
