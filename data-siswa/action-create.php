<?php
  if (isset($_POST['Submit'])) {
    $Nisn =$_POST['nisn'];
    $Nis =$_POST['nis'];
    $Nama =$_POST['nama'];
    $IdKelas =$_POST['id_kelas'];
    $Alamat =$_POST['alamat'];
    $NoTelp =$_POST['no_telp'];
    $IdSpp =$_POST['id_spp'];

    include("../koneksi.php");
    $result =mysqli_query($koneksi,"INSERT INTO siswa(nisn,nis,nama,id_kelas,alamat,no_telp,id_spp) VALUES('$Nisn','$Nis','$Nama','$IdKelas','$Alamat','$NoTelp','$IdSpp')");

    if ($result) {
      echo "<script>alert('Data Kelas berhasil ditambahkan'); window.location.href='read.php'</script>";
      header("location:read.php");
    } else{
      echo "<script>alert('Data Kelas gagal ditambahkan'); window.location.href='read.php'</script>";
    }
  }
?>