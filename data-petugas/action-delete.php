<?php
  if (isset($_GET["id_petugas"])) {
    $IdPetugas =$_GET['id_petugas'];

    include("../koneksi.php");
    $result = mysqli_query($koneksi, "DELETE FROM petugas WHERE id_petugas = $IdPetugas");

    if ($result) {
     echo "<script>alert('Data Kelas berhasil dihapus'); window.location.href='read.php'</script>";
    }
  }
?>