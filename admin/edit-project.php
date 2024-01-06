<?php
require 'functions/koneksi.php';
session_start();
$nama =  $_SESSION['nama'];

if (empty($nama)) {
    header("Location: login.php");
}
$services = mysqli_query($conn, "SELECT * FROM services");
$id = $_GET['id'];
$project = mysqli_query($conn, "SELECT * FROM projects WHERE id = $id LIMIT 1");
$project = mysqli_fetch_assoc($project);

?>

<?php require 'partials/header.php' ?>
<div class="page-wrapper">
    <!-- Page body -->

    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col d-flex justify-content-between">
                    <h2 class="page-title">
                        Project / Edit Project
                    </h2>
                    <a href="projects.php" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl d-flex flex-column justify-content-center">
            <form action="functions/update-project.php?id=<?= $id ?>" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="" class="form-label">Service</label>
                    <select name="service_id" id="" class="form-select">
                        <option value="">Pilih Service</option>
                        <?php foreach ($services as $service) : ?>
                            <option <?= $service['id'] == $project['service_id'] ? 'selected' : '' ?> value="<?= $service['id'] ?>"><?= $service['nama'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Judul</label>
                    <input type="text" class="form-control" name="judul" value="<?= $project['judul'] ?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi" value="<?= $project['deskripsi'] ?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Gambar</label>
                    <input type="file" class="form-control" name="gambar">
                    <img src="img/projects/<?= $project['gambar'] ?>" alt="" width="100">
                </div>
                <button class="btn btn-primary" type="submit">Simpan</button>
            </form>
        </div>
    </div>


</div>

<?php require 'partials/footer.php'; ?>