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
        <h1>Tambah Data Petugas</h1>
    </div>
    <div class="section-body d-flex justify-content-center">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h1>Tambah Data Petugas</h1>
            </div>
            <div class="card-body">
              <form action="action-create.php" method="POST" class="needs-validation" novalidate="" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="" for="id_petugas">ID Petugas</label>
                  <input id="id_petugas" type="number" class="form-control" name="id_petugas" tabindex="1" required autofocus>
                  <div class="invalid-feedback">
                    Please fill Id Petugas
                  </div>
                </div>
                <div class="form-group">
                  <label class="" for="username">Username</label>
                  <input id="username" type="email" class="form-control" name="username" tabindex="1" required autofocus>
                  <div class="invalid-feedback">
                    Please fill your username
                  </div>
                </div>
                <div class="form-group">
                  <label class="" for="password">Password</label>
                  <input id="username" type="password" class="form-control" name="username" tabindex="1" required autofocus>
                  <div class="invalid-feedback">
                    Please fill your username
                  </div>
                </div>
                <div class="form-group">
                  <label class="" for="nama_petugas">Nama Petugas</label>
                  <input id="nama_petugas" type="text" class="form-control" name="nama_petugas" tabindex="2" required autofocus>
                  <div class="invalid-feedback">
                    Please fill Nama Petugas
                  </div>
                </div>
                <div class="form-group">
                  <label class="" for="level">Level Petugas</label> <br>
                      <select class="form-select w-100" style="height: 40px;" name="level" id="level" tabindex="3" required>
                        <option selected>Level</option>
                        <option value="admin">Admin</option>
                        <option value="petugas">Petugas</option>
                      </select>
                    </div>
                <div class="form-group">
                    <button type="submit" value="submit" name="Submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      SUBMIT
                    </button>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  
</div>
  
  
  <?php require('../template/footer.php');?>