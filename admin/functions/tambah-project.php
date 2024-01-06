<?php
require 'koneksi.php';
$service_id = $_POST['service_id'];
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];

$ekstensi_diperbolehkan    = array('png', 'jpg');
$namaGambar = $_FILES['gambar']['name'];
$x = explode('.', $namaGambar);
$ekstensi = strtolower(end($x));
$ukuran    = $_FILES['gambar']['size'];
$file_tmp = $_FILES['gambar']['tmp_name'];

if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
    if ($ukuran < 1044070) {
        move_uploaded_file($file_tmp, '../img/projects/' . $namaGambar);
        $query = mysqli_query($conn, "INSERT INTO projects (service_id,judul,deskripsi,gambar) VALUES('$service_id','$judul', '$deskripsi', '$namaGambar')");
        if ($query) {
            echo "<script>
                alert('Berhasil tambah project');
                location.href = '../projects.php';
            </script>";
        } else {
            echo "<script>
            alert('Gagal tambah project');
            location.reload();
        </script>";
        }
    } else {
        echo 'UKURAN FILE TERLALU BESAR';
    }
} else {
    echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
}
