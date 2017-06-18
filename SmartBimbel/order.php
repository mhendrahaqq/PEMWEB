<?php
  include 'koneksi.php';
  session_start();
  if(empty($_SESSION['username'])){
    echo "<script type='text/javascript'>alert('Anda Harus Login!'); window.location = 'login.php';</script>";
  }
?>

  <?php
    $mapel = $_GET['mapel'];
    $username = $_SESSION['username'];

    $query = mysqli_query($koneksi,"SELECT kuota FROM kelas WHERE mapel='$mapel'");
    $data = mysqli_fetch_array($query);
    $kuota = $data['kuota'];

    if($kuota <= 0 ){
      echo "<script type='text/javascript'>alert('Kuota Sudah Penuh!');window.location = 'kelas.php'</script>";
    }else{
        $sql = mysqli_query($koneksi,"SELECT mapel FROM kelas WHERE mapel='$mapel'");
        $ketemu = mysqli_num_rows($sql);
    		if ($ada==0){
          mysqli_query($koneksi,"INSERT INTO pesan(no,mapel,qty) VALUES('','$mapel',1)");
          header("location:kelas.php?pesan=order");
      }
       $mysql = mysqli_query($koneksi,"SELECT username FROM siswa WHERE username = '$username'");
       $found = mysqli_num_rows($mysql);
       if($available == 0){
         mysqli_query($koneksi,"INSERT INTO siswa_pesan(id,username,mapel) VALUES('','$username','$mapel')");
     }
      //    $query = mysqli_query($koneksi,"SELECT mapel FROM siswa_pesan WHERE mapel='$mapel'");
      //    $enek=mysqli_num_rows($query);
      //    if ($ono == 0){
      //      echo "<script type='text/javascript'>alert('Anda Telah Memesan Kelas $mapel');window.location='kelas.php'</script>";
      //  }
  }
?>
