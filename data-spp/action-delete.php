
<?php
  include '../koneksi.php';
  $IdSpp =$_GET['id_spp'];
  $query_mysqli = mysqli_query($koneksi,"DELETE FROM spp WHERE id_spp=$IdSpp");

  if ($query_mysqli) {
    echo "<script>alert('Data Spp berhasil diHapus'); window.location.href='read.php'</script>";
    header("location:read.php");
  }else{
    echo "<script>alert('Data Spp gagal diHapus'); window.location.href='read.php'</script>";
  }
?>
