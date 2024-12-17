<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>E-Sarinah</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="<?php echo e(asset('Arsha/assets/img/favicon.png')); ?>" rel="icon">
  <link href="<?php echo e(asset('Arsha/assets/img/favicon.png')); ?>" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo e(asset('Arsha/assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('Arsha/assets/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('Arsha/assets/vendor/aos/aos.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('Arsha/assets/vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('Arsha/assets/vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?php echo e(asset('Arsha/assets/css/main.css')); ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="<?php echo e(asset('Arsha/index.html')); ?>" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="<?php echo e(asset('Arsha/assets/img/logo.png')); ?>" alt=""> 
        <h1 class="sitename">E-Sarinah</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <!--<a class="btn-getstarted" href="#about">Get Started</a>-->

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1>Sistem Manajemen Inventaris Sekolah</h1>
            <p>Selamat datang di Portal Sistem Manajemen Inventaris SD Islam Tompokesan! <br> Pantau, catat, dan kelola aset & inventaris sekolah dengan sistem yang dirancang khusus untuk mendukung kebutuhan sekolah secara akurat dan efisien.</p>
            <div class="d-flex">
              <a href="<?php echo e(route('login')); ?>" class="btn-get-started">Login</a>
              <a href="https://youtu.be/eJpfV7IXA6Y?si=85CSH-si3yyBoTO6" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="<?php echo e(asset('Arsha/assets/img/skil.png')); ?>" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section light-background">

      <div class="container" data-aos="zoom-in">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 5,
                  "spaceBetween": 120
                },
                "1200": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          
          <div class="row justify-content-center text-center">
            <h2>Supported by :</h2>
          </div>
          <div class="swiper-wrapper align-items-center ">
            
            <div class="swiper-slide"><img src="<?php echo e(asset('Arsha/assets/img/clients/c1.png')); ?>" class="img-fluid" alt="sdi tompokersan"></div>
            <div class="swiper-slide"><img src="<?php echo e(asset('Arsha/assets/img/clients/c3.png')); ?>" class="img-fluid" alt="tutwuri handayani"></div>
            <div class="swiper-slide"><img src="<?php echo e(asset('Arsha/assets/img/clients/c4.png')); ?>" class="img-fluid" alt="dana bos"></div>
            <div class="swiper-slide"><img src="<?php echo e(asset('Arsha/assets/img/clients/c2.png')); ?>" class="img-fluid" alt="politeknik negeri malang"></div>
            <div class="swiper-slide"><img src="<?php echo e(asset('Arsha/assets/img/clients/c5.png')); ?>" class="img-fluid" alt="vokasi bisa"></div>
            <div class="swiper-slide"><img src="<?php echo e(asset('Arsha/assets/img/clients/client-6.png')); ?>" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo e(asset('Arsha/assets/img/clients/client-7.png')); ?>" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo e(asset('Arsha/assets/img/clients/client-8.png')); ?>" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>

    </section><!-- /Clients Section -->

     
  </main>

  <footer id="footer" class="footer">

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">E-Sarinah</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">ZaqiaFaizahPuput</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?php echo e(asset('Arsha/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('Arsha/assets/vendor/php-email-form/validate.js')); ?>"></script>
  <script src="<?php echo e(asset('Arsha/assets/vendor/aos/aos.js')); ?>"></script>
  <script src="<?php echo e(asset('Arsha/assets/vendor/glightbox/js/glightbox.min.js')); ?>"></script>
  <script src="<?php echo e(asset('Arsha/assets/vendor/swiper/swiper-bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('Arsha/assets/vendor/waypoints/noframework.waypoints.js')); ?>"></script>
  <script src="<?php echo e(asset('Arsha/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')); ?>"></script>
  <script src="<?php echo e(asset('Arsha/assets/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>

  <!-- Main JS File -->
  <script src="<?php echo e(asset('Arsha/assets/js/main.js')); ?>"></script>

</body>

</html><?php /**PATH C:\laragon\www\inventaris\resources\views/welcome.blade.php ENDPATH**/ ?>