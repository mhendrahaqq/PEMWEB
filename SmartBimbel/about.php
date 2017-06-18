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
        <div class="col-sm-12">

            <div class="panel panel-default">
                <div class="panel-body">
                    <p><strong>PROFIL :</strong></p>
                    <p>Kepedulian dan kecintaaan pada pendidikan khususnya pengajaran pada siswa-i mendorong lahirnya bimbingan belajar SMART BIMBEL. Brand SMART BIMBEL berawal dari Salemba Study Group (SSMART BIMBEL) didirikan sejak tahun 1979 di Salemba-Jakarta dengan pimpinan Bapak Ir. Ihsan Mahyudin (mantan ketua ILUNI FTUI), kemudian berubah menjadi Salemba Group. Seiring dengan terus perkembangan dan sambutan para siswa maka terbentuklah brand SMART BIMBEL. Bimbingan belajar SMART BIMBEL secara resmi mulai membuka cabang pada bulan Oktober tahun 2003 dengan inisiator Ace (Alumni Teknik Gas Petrokimia FTUI), dan Asep Sudrajat (Alumni Teknik Industri FTUI). Bimbingan Belajar SMART BIMBEL mempunyai pengajar yang professional, ramah dan memiliki kompetensi. Program bimbingan yang dilaksanakan SD, SMP, SMA dan KELAS UI.</p>
                    <p><strong>VISI :</strong></p>
                    <p>Dengan Rahmat Allah Yang Maha Kuasa bertekad menjadi lembaga pendidikan yang terbaik, terunggul dan terbesar di Indonesia dan menjangkau mancanegara.</p>
                    <p><strong>MISI :</strong></p>
                    <ul>
                        <li> Meningkatkan motivasi dan budaya belajar para siswa</li>
                        <li> Menjadi mitra strategis yang konstruktif dengan orang tua, siswa, sekolah, guru, perguruan tinggi dan masyarakat dalam mencerdaskan anak bangsa</li>
                        <li> Sebagai wadah pengkajian dan pengembangan ilmu pengetahuan dasar (basic science) dengan komitmen total kepada inovasi dan kreativitas, dengan pengembangan metode yang unik dan unggul (great solution method) untuk menguasai ilmu pengetahuan dasar (basic science)</li>
                        <li> Bersama-sama mewujudkan kesejahteraan bersama, dan kebahagiaan dunia dan akhirat</li>
                    </ul>

                    <p><strong>VAKUE DAN MOTTO:</strong></p>
                    <ul>
                        <li> Hasrat untuk menjadikan Lembaga sebagai wadah kepedulian alumni pada adik-adiknya</li>
                        <li>Didukung oleh tim yang memiliki integritas, komitmen dan akuntabilitas yang akan membawa lembaga pada visi dan misinya</li>
                        <li>Strategi pelayanan total dan harga terjangkau adalah komitmen lembaga, pendidikan adalah hak dasar setiap manusia</li>
                        <li> Dari Value Lembaga tersebut maka lembaga bermotto : “Dare To Be A Great”(Beranilah Menjadi Unggul) , motto ini di ambil agar para siswa optimis sebagai insan unggul dan cerdas untuk meraih cita-cita tinggi, di samping itu juga berdasar cita-cita para pendiri, pengajar dan segenap manajemen untuk untuk mewujudkan visi dan misi lembaga</li>
                        <li> Motivasi untuk terus berkarya :“Kami yakin dengan tekad kuat dan benar,usaha yang sungguh-sungguh serta doa yang tulus, sukses sebuah keniscayaan”.</li>
                    </ul>

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