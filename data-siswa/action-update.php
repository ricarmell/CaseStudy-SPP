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
    $result =mysqli_query($koneksi,"UPDATE siswa SET nisn='$Nisn',nis='$Nis',nama='$Nama',id_kelas='$IdKelas',alamat='$Alamat',no_telp='$NoTelp',id_spp='$IdSpp' where nisn='$ni'");

    if ($result) {
      echo "<script>alert('Data Siswa berhasil diUpdate'); window.location.href='read.php'</script>";
      header("location:read.php");
    } else{
      echo "<script>alert('Data Siswa gagal diUpdate'); window.location.href='read.php'</script>";
    }
  }
?>