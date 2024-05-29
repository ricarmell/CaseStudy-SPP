<?php
  if (count($_POST) > 0) {
    $IdPetugas =$_POST['id_petugas'];
    $Username =$_POST['username'];
    $Password =md5($_POST['password']);
    $NamaPetugas =$_POST['nama_petugas'];
    $Level =$_POST['level'];


    include("../koneksi.php");
    $result =mysqli_query($koneksi,"INSERT INTO petugas(id_petugas,username,password,nama_petugas,level) VALUES('$IdPetugas','$Username','$Password','$NamaPetugas','$Level')");

    if ($result) {
      echo "<script>alert('Data petugas berhasil ditambahkan'); window.location.href='read.php'</script>";
      header("location:read.php");
    } else{
      echo "<script>alert('Data Kelas petugas ditambahkan'); window.location.href='read.php'</script>";
    }
  }
?>