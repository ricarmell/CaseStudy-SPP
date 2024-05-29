<?php
    session_start();
    if($_SESSION['level']==""){
        header("location:auth-login-petugas.php?pesan=gagal");
    }
?>

<?php require('../template/header.php'); ?>

<?php require('../template/nav.php'); ?>

<?php require('../template/sidebar.php'); ?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Update Data Kelas </h1>
        </div>
        
        <div class="section-body">
            <div class="row d-flex justify-content-center">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <p class="h3">Update Data Kelas</p>
                        </div>
                        <?php
                        include "../koneksi.php";
                        $IdKelas = $_GET['id_kelas'];
                        $query_mysql = mysqli_query($koneksi, "SELECT * FROM kelas WHERE id_kelas=$IdKelas");
                        $data = mysqli_fetch_array($query_mysql); { ?>
                        <form action="action-update.php" method="POST">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="IdKelas" class="form-label">ID Kelas</label>
                                    <input type="text" class="form-control" id="IdKelas" name="IdKelas"
                                        value="<?php echo $data['id_kelas']; ?>" readonly>
                                </div>
                            
                                <div class="mb-3">
                                    <label for="NamaKelas" class="form-label">Nama Kelas</label>
                                    <input type="text" class="form-control" id="NamaKelas" name="NamaKelas"
                                        value="<?php echo $data['nama_kelas']; ?>">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="KompetensiKeahlian" class="form-label">Kompetensi Keahlian</label>
                                    <select class="form-control" aria-label="select" name="KompetensiKeahlian"
                                        id="KompetensiKeahlian">
                                        <option selected value="<?php echo $data['kompetensi_keahlian']; ?>">
                                            <?php echo $data['kompetensi_keahlian']; ?>
                                        </option>
                                        <option value="RPL">RPL</option>
                                        <option value="TAV">TAV</option>
                                        <option value="DPIB">DPIB</option>
                                        <option value="TKR">TKR</option>
                                        <option value="TSM">TSM</option>
                                    </select>
                                </div> 
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">Update</button>
                            </div>
                            <?php } ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>