<?php
  if (isset($_GET["id_kelas"])) {
    $IdKelas =$_GET['id_kelas'];

    include("../koneksi.php");
    $result = mysqli_query($koneksi, "DELETE FROM kelas WHERE id_kelas = $IdKelas");
    if ($result) {
     echo "<script>alert('Data Kelas berhasil dihapus'); window.location.href='read.php'</script>";
    }
  }
?>