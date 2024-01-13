<?php
require 'koneksi.php';
$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM blogs WHERE id = $id");

echo "<script>
    alert('Berhasil hapus project');
    location.href = '../blogs.php';
</script>";
