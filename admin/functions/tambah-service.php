<?php
require 'koneksi.php';
$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];

mysqli_query($conn, "INSERT INTO services (nama,deskripsi) VALUES ('$nama', '$deskripsi')");

echo "<script>
    alert('Berhasil tambah service');
    location.href  = '../services.php';
</script>";
