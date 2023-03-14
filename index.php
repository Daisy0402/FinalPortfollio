<!DOCTYPE html>
<html lang="en">


<!--head section -->
<?php include "head.php" ?>
<!-- End head section -->

<body>

  <!-- ======= Header ======= -->
  <?php include "header.php" ?>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="hero route bg-image" style="background-image: url(assets/img/fond.webp)">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="hero-title mb-4">DAISY TACITA</h1>
          <p class="hero-subtitle"><span class="typed" data-typed-items="Developpeuse WEB"></span></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <?php include "about.php" ?>
    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <?php //include "services.php" ?>
    <!-- End Services Section -->

    <!-- ======= Counter Section ======= -->
    <?php include "counter.php" ?>
    <!-- End Counter Section -->

    <!-- ======= Portfolio Section ======= -->
    <?php include "projet.php" ?>
    <!-- End Portfolio Section -->

    
    <!-- ======= Contact Section ======= -->
    <?php include "ContactMe.php" ?>
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include "footer.php" ?>
  <!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>