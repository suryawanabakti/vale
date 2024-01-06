<?php
require 'functions/koneksi.php';
session_start();
$nama =  $_SESSION['nama'];

if (empty($nama)) {
    header("Location: login.php");
}

$services = mysqli_query($conn, "SELECT * FROM services");
?>

<?php require 'partials/header.php' ?>
<div class="page-wrapper">
    <!-- Page body -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Project / Tambah Project
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl d-flex flex-column justify-content-center">
            <form action="functions/tambah-project.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="" class="form-label">Service</label>
                    <select name="service_id" id="" class="form-select">
                        <?php foreach ($services as $service) : ?>
                            <option value="<?= $service['id'] ?>"><?= $service['nama'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Judul</label>
                    <input type="text" class="form-control" name="judul">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Gambar</label>
                    <input type="file" class="form-control" name="gambar">
                </div>
                <button class="btn btn-primary" type="submit">Simpan</button>
            </form>
        </div>
    </div>


</div>

<?php require 'partials/footer.php'; ?>