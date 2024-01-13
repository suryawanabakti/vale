<?php
require 'functions/koneksi.php';
session_start();
$nama =  $_SESSION['nama'];

if (empty($nama)) {
    header("Location: login.php");
}

$blogs = mysqli_query($conn, "SELECT * FROM blogs");

?>

<?php require 'partials/header.php' ?>
<div class="page-wrapper">
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Blogs
                    </h2>
                    <a href="tambah-blog.php" class="btn btn-primary">Tambah Blog</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl d-flex flex-column justify-content-center">
            <table class="table  table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Kategori</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($blogs as $blog) : ?>
                        <tr>
                            <td><?= $blog['id'] ?></td>
                            <td><?= $blog['judul'] ?></td>
                            <td><?= $blog['deskripsi'] ?></td>
                            <th><?= $blog['kategori'] ?></th>
                            <td>
                                <img src="img/blogs/<?= $blog['gambar'] ?>" alt="" width="100">
                            </td>
                            <td>
                                <a onclick="return confirm('apakah anda yakin?')" href="functions/hapus-blog.php?id=<?= $blog['id'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php require 'partials/footer.php'; ?>