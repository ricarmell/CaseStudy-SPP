<?php
  if (isset($_POST['Submit'])) {
    $IdSpp =$_POST['id_spp'];
    $Tahun =$_POST['tahun'];
    $Nominal =$_POST['nominal'];
    $Keterangan =$_POST['keterangan'];

    include("../koneksi.php");
    $result =mysqli_query($koneksi,"INSERT INTO spp(id_spp,tahun,nominal,keterangan) VALUES('$IdSpp','$Tahun','$Nominal','$Keterangan')");

    if ($result) {
      echo "<script>alert('Data SPP berhasil ditambahkan'); window.location.href='read.php'</script>";
      header("location:read.php");
    } else{
      echo "<script>alert('Data SPP gagal ditambahkan'); window.location.href='read.php'</script>";
    }
  }
?>