<?php
include "koneksi.php";
// function antiinjection($data){
//   $filter_sql = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
//   return $filter_sql;
// }

if(!empty($_POST)){
    $username =$_POST['username'];
    $pass     =$_POST['password'];

    $login = mysqli_query($koneksi,"SELECT * FROM admin WHERE username='$username' AND password='$pass'");
    $ketemu=mysqli_num_rows($login);
    $r=mysqli_fetch_array($login);

    // Apabila username dan password ditemukan
    if ($ketemu > 0){
      session_start();
      //session_register("username");
      //session_register("namalengkap");
      //session_register("passuser");
      //session_register("leveluser");

      $_SESSION['namauser']     = $r['username'];

      echo "<script type='text/javascript'>alert('Anda Login Sebagai Adminstrator');window.location='home.php'</script>";
      // header('location:media.php?module=home');
    }
    else{
      echo "<script type='text/javascript'>alert('Username atau Password Salah!');window.location='index.php'</script>";
    }
  }
?>
