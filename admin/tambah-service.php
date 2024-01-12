<?php
require 'functions/koneksi.php';
session_start();
$nama =  $_SESSION['nama'];
?>

<?php require 'partials/header.php' ?>
<div class="page-wrapper">

    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Service / Tambah Service
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <form action="functions/tambah-service.php" method="POST">
                <div class="mb-3">
                    <label for="" class="form-label">Nama Service</label>
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label"> Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control">
                </div>
                <button class="btn btn-primary" type="submit">
                    Save
                </button>
            </form>
        </div>

    </div>
</div>
<?php require 'partials/footer.php' ?>