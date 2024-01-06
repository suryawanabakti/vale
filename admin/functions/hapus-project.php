<?php
require 'koneksi.php';
$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM projects WHERE id = $id");

echo "<script>
    alert('Berhasil hapus project');
    location.href = '../projects.php';
</script>";
