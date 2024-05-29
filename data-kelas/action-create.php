<?php
  if (count($_POST) > 0) {
    $IdKelas =$_POST['id_kelas'];
    $NamaKelas =$_POST['nama_kelas'];
    $KompetensiKeahlian =$_POST['kompetensi_keahlian'];

    include("../koneksi.php");
    $result =mysqli_query($koneksi,"INSERT INTO kelas(id_kelas,nama_kelas,kompetensi_keahlian) VALUES('$IdKelas','$NamaKelas','$KompetensiKeahlian')");

    if ($result) {
      echo "<script>alert('Data Kelas berhasil ditambahkan'); window.location.href='read.php'</script>";
      header("location:read.php");
    } else{
      echo "<script>alert('Data Kelas gagal ditambahkan'); window.location.href='read.php'</script>";
    }
  }
?>