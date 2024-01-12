<?php
require 'koneksi.php';
$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM services WHERE id = $id");

echo "<script>
    alert('Berhasil hapus service');
    location.href = '../services.php';
</script>";
