<?php
require 'koneksi.php';
$id = $_GET['id'];
$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];

mysqli_query($conn, "UPDATE services SET nama = '$nama', deskripsi = '$deskripsi' WHERE id = $id");

echo "<script>
    alert('berhasil ubah service');
    location.href = '../services.php';
</script>";
