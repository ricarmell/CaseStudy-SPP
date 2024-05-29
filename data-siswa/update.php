<?php
  session_start();
  if ($_SESSION['level']=="") {
    header("location:../auth-login-petugas.php?pesan=gagal");
  }
?>

<?php require('../template/header.php');?>

<?php require('../template/nav.php');?>

<?php require('../template/sidebar.php');?>

<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Update Data Siswa</h1>
    </div>
    <div class="section-body">
      <div class="row d-flex justify-content-center">
        <div class="col-4">
          <div class="card">
            <div class="card-header">
              <p class="h3">Update Data Siswa</p>
            </div>
              <?php
              include"../koneksi.php";
              $Nisn= $_GET['nisn'];
              $query_mysql = mysqli_query($koneksi,"SELECT * FROM siswa WHERE nisn=$Nisn");
              $data= mysqli_fetch_array($query_mysql); ?>
              <form action="action-update.php" method="POST">
                <div class="card-body">
                    <div class="mb-3">
                      <label for="nisn" class="from-label">NISN</label>
                      <input type="number" class="from-control" id="nisn" name="nisn" value="<?php echo $data['nisn']; ?>" readonly> 
                    </div>
                    <div class="mb-3">
                      <label for="nis" class="from-label">NIS</label>
                      <input type="text" class="from-control" id="nis" name="nis" value="<?php echo $data['nis']; ?>">
                    </div>
                    <div class="mb-3">
                      <label for="nama" class="from-label">Nama Siswa</label>
                      <input type="text" class="from-control" id="nama" name="nama" value="<?php echo $data['nama']; ?>">
                    </div>
                    <div class="mb-3">
                      <label for="id_kelas" class="from-label">Id Kelas</label>
                      <select class="from-control" aria-label="select" id="id_kelas" name="id_kelas">
                        <option selected value="<?php echo $data['id_kelas']; ?>">
                          <hr />
                        </option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="no_telp" class="from-label">Nomor Telepon</label>
                      <input type="number" class="from-control" id="no_telp" name="no_telp" value="<?php echo $data['no_telp']; ?>">
                    </div>
                    <div class="mb-3">
                      <label for="alamat" class="from-label">Alamat</label>
                      <input type="text" class="from-control" id="alamat" name="alamat" value="<?php echo $data['alamat']; ?>">
                    </div>
                    <div class="mb-3">
                      <label for="id_spp" class="from-label">Id Spp</label>
                      <select class="from-control" aria-label="select" id="id_spp" name="id_spp">
                        <option selected value="<?php echo $data['id_spp']; ?>">
                          <hr />
                        </option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                      </select>
                    </div>
                    <button type="submit" name="Submit" class="btn btn-primary w-100">Submit</button>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php require('../template/footer.php');?>