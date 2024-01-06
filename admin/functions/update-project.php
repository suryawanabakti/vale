<?php

require 'koneksi.php';

$id = $_GET['id'];
$service_id = $_POST['service_id'];
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];

mysqli_query($conn, "UPDATE projects SET judul='$judul', deskripsi='$deskripsi', service_id='$service_id' WHERE id = $id");
if ($_FILES['gambar']['name'] !== "") {
    $ekstensi_diperbolehkan    = array('png', 'jpg');
    $namaGambar = $_FILES['gambar']['name'];
    $x = explode('.', $namaGambar);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['gambar']['size'];
    $file_tmp = $_FILES['gambar']['tmp_name'];

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 1044070) {
            move_uploaded_file($file_tmp, '../img/projects/' . $namaGambar);
            $query = mysqli_query($conn, "UPDATE projects SET gambar='$namaGambar' WHERE id = $id");
        } else {
            echo 'UKURAN FILE TERLALU BESAR';
        }
    } else {
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
    }
}

echo "<script>
alert('Berhasil update project');
location.href = '../projects.php';
</script>";
