<?php
    session_start();
    if($_SESSION['level']==""){
        header("location:auth-login-petugas.php?pesan=gagal");
    }
?>

<?php require('../template/header.php');?>

<?php require('../template/nav.php');?>

<?php require('../template/sidebar.php');?>

<div class="main-content">
  <section class="section">
    <div class="section-header">
        <h1>Tambah Data Spp</h1>
    </div>
    <div class="section-body d-flex justify-content-center">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h1>Tambah Data Spp</h1>
            </div>
            <div class="card-body">
              <form action="action-create.php" method="POST" class="needs-validation" novalidate="" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="" for="id_spp">ID Spp</label>
                  <input id="id_spp" type="number" class="form-control" name="id_spp" tabindex="1" required autofocus>
                  <div class="invalid-feedback">
                    Please fill Id Spp
                  </div>
                </div>
                <div class="form-group">
                  <label class="" for="tahun">Tahun</label>
                  <input id="tahun" type="number" class="form-control" name="tahun" tabindex="2" required autofocus>
                  <div class="invalid-feedback">
                    Please fill Tahun
                  </div>
                </div>
                <div class="form-group">
                  <label class="" for="nominal">Nominal</label>
                  <input id="nominal" type="number" class="form-control" name="nominal" tabindex="2" required autofocus>
                  <div class="invalid-feedback">
                    Please fill Nominal
                  </div>
                </div>
                <div class="form-group">
                  <label class="" for="keterangan">Keterangan</label>
                  <input id="keterangan" type="text" class="form-control" name="keterangan" tabindex="2" textarea required autofocus>
                  <div class="invalid-feedback">
                    Please fill Keterangan
                  </div>
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