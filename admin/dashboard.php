<?php
session_start();
$nama =  $_SESSION['nama'];

if (empty($nama)) {
    header("Location: login.php");
}
?>

<?php require 'partials/header.php' ?>
<div class="page-wrapper">
    <!-- Page body -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Dashboard
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl d-flex flex-column justify-content-center">
            <h1>Ini adalah Dashboard</h1>
        </div>
    </div>


</div>

<?php require 'partials/footer.php'; ?>