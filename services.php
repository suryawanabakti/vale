<?php require 'partials/header.php' ?>
<?php

require 'koneksi.php';
$services = mysqli_query($conn, "SELECT * FROM services");

?>
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Services</h2>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Services</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4">

        <?php foreach ($services as $service) : ?>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fa-solid fa-mountain-city"></i>
              </div>
              <h3><?= $service['nama'] ?></h3>
              <p><?= $service['deskripsi'] ?></p>
              <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        <?php endforeach; ?>

      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Servie Cards Section ======= -->
  <section id="services-cards" class="services-cards">
    <div class="container" data-aos="fade-up">



    </div>
  </section><!-- End Servie Cards Section -->


</main><!-- End #main -->

<?php require 'partials/footer.php' ?>