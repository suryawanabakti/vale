<?php
session_start();
$nama =  $_SESSION['nama'];
if (empty($nama)) {
    header("Location: login.php");
}

require 'functions/koneksi.php';
$projects = mysqli_query($conn, "SELECT *,projects.id AS project_id,projects.deskripsi AS project_deskripsi FROM projects INNER JOIN services ON projects.service_id = services.id");
?>

<?php require 'partials/header.php' ?>
<div class="page-wrapper">
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col d-flex justify-content-between">
                    <h2 class="page-title">
                        Projects
                    </h2>
                    <a href="tambah-project.php" class="btn btn-primary">Tambah</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl d-flex flex-column justify-content-center">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Service</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($projects as $project) : ?>
                        <tr>
                            <td><?= $project['project_id'] ?></td>
                            <td><?= $project['nama'] ?></td>
                            <td><?= $project['judul'] ?></td>
                            <td><?= $project['project_deskripsi'] ?></td>
                            <td>
                                <img src="img/projects/<?= $project['gambar'] ?>" alt="Gambar" width="100">
                            </td>
                            <td class="text-nowrap">
                                <a href="edit-project.php?id=<?= $project['project_id'] ?>" class="btn btn-warning btn-icon btn-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                        <path d="M16 5l3 3" />
                                    </svg>
                                </a>
                                <a onclick="return confirm('Apakah anda yakin ?')" href="functions/hapus-project.php?id=<?= $project['project_id'] ?>" class="btn btn-danger btn-icon btn-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M4 7l16 0" />
                                        <path d="M10 11l0 6" />
                                        <path d="M14 11l0 6" />
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<?php require 'partials/footer.php'; ?>