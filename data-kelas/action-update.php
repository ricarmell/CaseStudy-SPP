<?php
 if(isset($_POST)) {
   $Idkelas =$_POST['IdKelas'];
   $NamaKelas =$_POST['NamaKelas']; 
   $KompetensiKeahlian =$_POST['KompetensiKeahlian'];  

   include("../koneksi.php");
   $result = mysqli_query($koneksi, "UPDATE kelas SET nama_kelas='$NamaKelas',kompetensi_keahlian='$KompetensiKeahlian' WHERE id_kelas=$Idkelas ");

   if ($result) {
    echo "<script>alert('Data Kelas berhasil diupdate'); window.location.href='read.php'</script>";
   }else{
    echo "<script>alert('Data Kelas gagal diupdate'); window.location.href='read.php'</script>";
   }
  }else{
    header("location:update.php");
  }
?>  