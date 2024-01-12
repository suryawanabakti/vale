<?php
require 'functions/koneksi.php';
session_start();
$nama =  $_SESSION['nama'];

if (empty($nama)) {
    header("Location: login.php");
}
$id = $_GET['id'];
$service = mysqli_query($conn, "SELECT * FROM services WHERE id = $id LIMIT 1");
$service = mysqli_fetch_assoc($service);
?>

<?php require 'partials/header.php' ?>
<div class="page-wrapper">
    <!-- Page body -->

    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col d-flex justify-content-between">
                    <h2 class="page-title">
                        Service / Edit Service
                    </h2>
                    <a href="services.php" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl d-flex flex-column justify-content-center">
            <form action="functions/update-service.php?id=<?= $id ?>" method="POST">
                <div class="mb-3">
                    <label for="" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" value="<?= $service['nama'] ?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi" value="<?= $service['deskripsi'] ?>">
                </div>
                <button class="btn btn-primary">Simpan Perubahan</button>
            </form>
        </div>
    </div>


</div>

<?php require 'partials/footer.php'; ?>