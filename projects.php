<?php require 'partials/header.php' ?>
<?php
require 'koneksi.php';
$services = mysqli_query($conn, "SELECT * FROM services");

$projects = mysqli_query($conn, "SELECT *,services.nama AS nama_service FROM projects INNER JOIN services ON projects.service_id = services.id");

?>
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Projects</h2>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Projects</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Our Projects Section ======= -->
  <section id="projects" class="projects">
    <div class="container" data-aos="fade-up">

      <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

        <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <?php foreach ($services as $service) : ?>
            <li data-filter=".filter-<?= $service['id'] ?>"><?= $service['nama'] ?></li>
          <?php endforeach; ?>
        </ul><!-- End Projects Filters -->

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <?php foreach ($projects as $project) : ?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="admin/img/projects/<?= $project['gambar'] ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><?= $project['nama_service'] ?></h4>
                  <p><?= $project['judul'] ?></p>
                  <a href="assets/img/projects/remodeling-1.jpg" title="Remodeling 1" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->
          <?php endforeach ?>


        </div><!-- End Projects Container -->

      </div>

    </div>
  </section><!-- End Our Projects Section -->

</main><!-- End #main -->
<?php require 'partials/footer.php' ?>