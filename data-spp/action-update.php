<?php
  if (isset($_POST['Submit'])) {
    $IdSpp =$_POST['id_spp'];
    $Tahun =$_POST['tahun'];
    $Nominal =$_POST['nominal'];
    $Keterangan =$_POST['keterangan'];

    include("../koneksi.php");
    $result =mysqli_query($koneksi,"UPDATE spp SET tahun='$Tahun',nominal='$Nominal',keterangan='$Keterangan' WHERE id_spp='$IdSpp'");

    if ($result) {
      echo "<script>alert('Data Spp berhasil diUpdate'); window.location.href='read.php'</script>";
    
    } else{
      echo "<script>alert('Data Spp gagal diUpdate'); window.location.href='read.php'</script>";
    }
  }
?>