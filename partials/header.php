<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PT. Vale</title <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/assets/img/vale-logo.png" rel="icon">
    <link href="/assets/img/vale-logo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: PT.BUJAYA KARYA MAKMUR
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/PT.BUJAYA KARYA MAKMUR-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="assets/img/vale-logo.png" alt="">
                <h1>PT.Vale<span>.</span></h1>
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>

                    <li><a href="/index.php" class="<?= $_SERVER['REQUEST_URI'] == '/index.php' ? 'active' : '' ?>">Beranda</a></li>
                    <li><a href="/about.php" class="<?= $_SERVER['REQUEST_URI'] == '/about.php' ? 'active' : '' ?>">Tentang</a></li>
                    <li><a href="/services.php" class="<?= $_SERVER['REQUEST_URI'] == '/services.php' ? 'active' : '' ?>">Services</a></li>
                    <li><a href="/projects.php" class="<?= $_SERVER['REQUEST_URI'] == '/projects.php' ? 'active' : '' ?>">Projects</a></li>
                    <li><a href="/blog.php" class="<?= $_SERVER['REQUEST_URI'] == '/blog.php' ? 'active' : '' ?>">Blogs</a></li>

                    <li><a href="/contact.php">Contact</a></li>
                </ul>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->