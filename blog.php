<?php require 'partials/header.php' ?>
<?php
require 'koneksi.php';

$blogs = mysqli_query($conn, "SELECT * FROM blogs");

?>
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Blog</h2>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Blog</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Blog Section ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4 posts-list">
        <?php foreach ($blogs as $blog) : ?>
          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="admin/img/blogs/<?= $blog['gambar'] ?>" class="img-fluid" alt="">
                <span class="post-date">December 12</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title"><?= $blog['judul'] ?></h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">John Doe</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2"><?= $blog['kategori'] ?></span>
                  </div>
                </div>

                <p>
                  <?php $blog['deskripsi'] ?>
                </p>

                <hr>

                <a href="/blog-details.php?id=<?= $blog['id'] ?>" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div>
        <?php endforeach; ?>

      </div><!-- End blog posts list -->



    </div>
  </section><!-- End Blog Section -->

</main><!-- End #main -->

<?php require 'partials/footer.php' ?>