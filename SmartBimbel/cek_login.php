<?php
include "koneksi.php";

if(!empty($_POST)){
    $username =$_POST['username'];
    $pass     =$_POST['password'];

    $login = mysqli_query($koneksi,"SELECT * FROM siswa WHERE username='$username' AND password='$pass'");
    $ketemu=mysqli_num_rows($login);
    $r=mysqli_fetch_array($login);

    if ($ketemu > 0){
      session_start();

      $_SESSION['username']     = $r['username'];

      echo "<script type='text/javascript'>alert('Anda Login Sebagai $username');window.location='kelas.php'</script>";

    }
    else{
      echo "<script type='text/javascript'>alert('Username atau Password Salah!');window.location='login.php'</script>";
    }
  }
?>
