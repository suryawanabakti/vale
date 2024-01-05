<?php
require 'koneksi.php';
session_start();
$email = $_POST['email'];
$password = $_POST['password'];

$email = mysqli_real_escape_string($conn, $_POST['email']);

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['nama'] = $row['nama'];
    header("Location: ../dashboard.php");
    exit();
} else {
    echo "
    <script>alert('Email atau password Anda salah. Silakan coba lagi!');
    location.href = '../login.php';
    </script>";
}
