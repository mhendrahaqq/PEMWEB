<?php
session_start();
if(empty($_SESSION['namauser'])){
  header('location:index.php');
}
session_destroy();
echo "<script type='text/javascript'>alert('Anda Telah Logout!');window.location = 'index.php';</script>";
 ?>
