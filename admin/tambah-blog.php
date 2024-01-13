<?php
session_start();
$nama =  $_SESSION['nama'];
?>
<?php require 'partials/header.php' ?>
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">
                    Blogs / Tambah Blog
                </h2>
                <a href="blogs.php" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>

<div class="page-body">
    <div class="container-xl">
        <form action="functions/tambah-blog.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="" class="form-label">Judul</label>
                <input type="text" class="form-control" name="judul" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" name="deskripsi" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Kategori</label>
                <select name="kategori" class="form-select" required>
                    <option value="">Pilih Kategori</option>
                    <option value="teknologi">Teknologi</option>
                    <option value="pengumuman">Pengumuman</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Gambar</label>
                <input type="file" name="gambar" class="form-control" required>
            </div>
            <button class="btn btn-primary" type="submit">Simpan</button>
        </form>
    </div>
</div>
<?php require 'partials/footer.php' ?>