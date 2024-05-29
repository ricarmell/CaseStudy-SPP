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
      <h1>Update Data Kelas</h1>
    </div>
    <div class="section-body">
      <div class="row d-flex justify-content-center">
        <div class="col-4">
          <div class="card w-auto">
            <div class="card-header">
              <p class="h3">Update Data Kelas</p>
            </div>
              <?php
              include"../koneksi.php";
              $IdPetugas= $_GET['id_petugas'];
              $query_mysql = mysqli_query($koneksi,"SELECT * FROM petugas WHERE id_petugas=$IdPetugas");
              $data= mysqli_fetch_array($query_mysql); ?>
              <form action="action-update.php" method="POST">
                <div class="card-body">
                    <div class="form-group">
                      <label for="id_petugas" class="from-label">ID Petugas</label> <br>
                      <input type="number" class="from-control w-75" id="id_petugas" name="id_petugas" value="<?php echo $data['id_petugas']; ?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="username" class="from-label">Username</label> <br>
                      <input type="email" class="from-control w-75" id="username" name="username" value="<?php echo $data['username']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="password" class="from-label">Password</label> <br>
                      <input type="password" class="from-control w-75" id="password" name="password" value="<?php echo $data['password']; ?>">
                    </div>
                    <div class="mb-3">
                      <label for="nama_petugas" class="from-label">Nama Petugas</label> <br>
                      <input type="text" class="from-control w-75" id="nama_petugas" name="nama_petugas" value="<?php echo $data['nama_petugas']; ?>">
                    </div>
                    <div class="mb-3">
                      <label for="level" class="from-label">Level</label> <br>
                      <select class="from-control w-75" aria-label="select" id="level" name="level">
                        <option selected value="<?php echo $data['level']; ?>">
                          <hr />
                        </option>
                        <option value="admin">Admin</option>
                        <option value="petugas">Petugas</option>
                      </select>
                    </div>
                    <button type="submit" name="Submit" class="btn btn-primary w-75">Submit</button>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php require('../template/footer.php');?>