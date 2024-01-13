<?php
session_start();
require 'koneksi.php';
$author = $_SESSION['id'];

$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$kategori = $_POST['kategori'];

$ekstensi_diperbolehkan    = array('png', 'jpg');
$namaGambar = $_FILES['gambar']['name'];
$x = explode('.', $namaGambar);
$ekstensi = strtolower(end($x));
$ukuran    = $_FILES['gambar']['size'];
$file_tmp = $_FILES['gambar']['tmp_name'];

if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
    if ($ukuran < 1044070) {
        move_uploaded_file($file_tmp, '../img/blogs/' . $namaGambar);

        $query = mysqli_query($conn, "INSERT INTO blogs (judul,deskripsi,author,kategori, gambar) VALUES('$judul','$deskripsi', '$author','$kategori', '$namaGambar')");

        if ($query) {
            echo "<script>
                alert('Berhasil tambah blog');
                location.href = '../blogs.php';
            </script>";
        } else {
            echo "<script>
            alert('Gagal tambah blog');
            location.reload();
        </script>";
        }
    } else {
        echo 'UKURAN FILE TERLALU BESAR';
    }
} else {
    echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
}
