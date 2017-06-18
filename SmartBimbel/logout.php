<?php
session_start();
if(empty($_SESSION['username'])){
  header('location:index.php');
}

session_unset();
session_destroy();
echo "<script type='text/javascript'>alert('Anda Telah Logout!');window.location = 'index.php';</script>";
 ?>
