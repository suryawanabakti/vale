<?php require 'partials/header.php' ?>
<?php
require 'koneksi.php';
$id = $_GET['id'];
$blog = mysqli_query($conn, "SELECT * FROM blogs INNER JOIN users ON users.id = blogs.author WHERE blogs.id = $id");
$blog = mysqli_fetch_assoc($blog);

?>
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Blog Details</h2>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Blog Details</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Blog Details Section ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row g-5">

        <div class="col-lg-8">

          <article class="blog-details">

            <div class="post-img">
              <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
            </div>

            <h2 class="title"><?= $blog['judul'] ?></h2>

            <div class="content">
              <?= $blog['deskripsi'] ?>
            </div>

          </article><!-- End blog post -->

          <div class="post-author d-flex align-items-center">
            <img src="assets/img/blog/blog-author.jpg" class="rounded-circle flex-shrink-0" alt="">
            <div>
              <h4><?= $blog['nama'] ?></h4>
            </div>
          </div><!-- End post author -->
        </div>

        <div class="col-lg-4">

          <div class="sidebar">


            <div class="sidebar-item categories">
              <h3 class="sidebar-title">Categories</h3>
              <ul class="mt-3">
                <li><a href="#">General <span>(25)</span></a></li>

              </ul>
            </div><!-- End sidebar categories-->



          </div><!-- End Blog Sidebar -->

        </div>
      </div>

    </div>
  </section><!-- End Blog Details Section -->

</main><!-- End #main -->

<?php require 'partials/footer.php' ?>