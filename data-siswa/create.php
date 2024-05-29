
<?php require('../template/header.php');?>

<?php require('../template/nav.php');?>

<?php require('../template/sidebar.php');?>

<div class="main-content">
  <section class="section">
    <div class="section-header">
        <h1>Tambah Data Siswa</h1>
    </div>
    <div class="section-body d-flex justify-content-center">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h1>Tambah Data Siswa</h1>
            </div>
            <div class="card-body">
              <form action="action-create.php" method="POST" class="needs-validation" novalidate="" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="" for="nisn">NISN</label>
                  <input id="nisn" type="number" class="form-control" name="nisn" tabindex="1" required autofocus>
                  <div class="invalid-feedback">
                    Please fill your NISN
                  </div>
                </div>
                <div class="form-group">
                  <label class="" for="nis">NIS</label>
                  <input id="nis" type="text" class="form-control" name="nis" tabindex="1" required autofocus>
                  <div class="invalid-feedback">
                    Please fill your NIS
                  </div>
                </div>
                <div class="form-group">
                  <label class="" for="nama">Nama Siswa</label>
                  <input id="nama" type="text" class="form-control" name="nama" tabindex="2" required autofocus>
                  <div class="invalid-feedback">
                    Please fill Nama Siswa
                  </div>
                </div>
                <div class="form-group">
                  <label class="" for="id_kelas">Id Kelas</label>
                  <div class="row">
                    <div class="col">
                      <select class="form-select" name="id_kelas" id="id_kelas" tabindex="3" required>
                        <option selected>Id Kelas</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="" for="alamat">Alamat</label>
                  <input id="alamat" type="text" class="form-control" name="alamat" tabindex="2" required autofocus>
                  <div class="invalid-feedback">
                    Please fill your Address
                  </div>
                </div>
                <div class="form-group">
                  <label class="" for="no_telp">Nomor Telepon</label>
                  <input id="no_telp" type="number" class="form-control" name="no_telp" tabindex="2" required autofocus>
                  <div class="invalid-feedback">
                    Please fill your Telephone Number
                  </div>
                </div>
                <div class="form-group">
                  <label class="" for="id_spp">Id Spp</label>
                  <div class="row">
                    <div class="col">
                      <select class="form-select" name="id_spp" id="id_spp" tabindex="3" required>
                        <option selected>Id Spp</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                      </select>
                    </div>
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
