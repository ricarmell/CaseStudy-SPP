<?php
  if (isset($_POST['Submit'])) {
    $IdPetugas =$_POST['id_petugas'];
    $Username =$_POST['username'];
    $Password = md5($_POST['password']);
    $NamaPetugas =$_POST['nama_petugas'];
    $Level =$_POST['level'];

    include("../koneksi.php");
    $result =mysqli_query($koneksi,"UPDATE petugas SET username='$Username', password='$Password', nama_petugas='$NamaPetugas', level='$Level' WHERE id_petugas='$IdPetugas'");

    if ($result) {
      echo "<script>alert('Data Petugas berhasil diUpdate'); window.location.href='read.php'</script>";
      
    } else{
      echo "<script>alert('Data Petugas gagal diUpdate'); window.location.href='read.php'</script>";
    }
  }
?>