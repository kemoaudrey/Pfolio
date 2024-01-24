<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
   <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
   <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
 
   <!-- Vendor CSS Files -->
   <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
   <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
   <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
   <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
 
   <!-- Template Main CSS File -->
   <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
 
  <!-- =======================================================
  * Template Name: DevFolio
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">K.M.A.X</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      {{-- @include('layouts.navbar') --}}
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#work">Work</a></li>
          {{-- <li><a class="nav-link scrollto " href="#blog">Blog</a></li> --}}
          {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> --}}
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a href="/home"><svg width="33" height="32" viewBox="0 0 88 99.998" xmlns="http://www.w3.org/2000/svg">
            <path fill="#F1C40E" d="M4 39.997h80a4 4 0 0 1 4 4v52a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4v-52a4 4 0 0 1 4-4z"/>
            <path fill="#FFF55C" d="M4 35.997h80a4 4 0 0 1 4 4v5a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4v-5a4 4 0 0 1 4-4z"/>
            <path fill="#364B5E" d="M73 38.997c-4.418 0-8 1.567-8 3.5c0 1.934 3.582 3.5 8 3.5s8-1.567 8-3.5s-3.582-3.5-8-3.5zm-58 0c-4.418 0-8 1.567-8 3.5c0 1.934 3.582 3.5 8 3.5s8-1.567 8-3.5s-3.582-3.5-8-3.5z"/>
            <path fill="#EBEDEE" d="M44 0C24.701 0 9 14.709 9 34.019v7.978c0 .553 2.687 2 6 2s6-1.447 6-2l-.021-.071v-7.907c0-12.701 10.327-22.034 23.021-22.034c12.693 0 23.021 9.333 23.021 22.034v7.907l-.021.071c0 .553 2.688 2 6 2s6-1.447 6-2v-7.978C79 14.709 63.299 0 44 0z"/>
            <path fill="#BDC3C7" d="M44 5.999c-15.99 0-29 13.091-29 29.183v8.815c3.313 0 6-1.447 6-2l-.021-.071v-7.907c0-12.701 10.327-22.034 23.021-22.034c12.693 0 23.021 9.333 23.021 22.034v7.907l-.021.071c0 .553 2.688 2 6 2v-8.815C73 19.091 59.99 5.999 44 5.999z"/>
            <path fill="#D8B00C" d="M0 95.998a4 4 0 0 0 4 4h80a4 4 0 0 0 4-4v-3H0v3z"/>
            <path fill="#E5BA0D" d="M4 48.997a3.99 3.99 0 0 1-3.858-3H0v50a4 4 0 0 0 4 4h40v-51H4z"/>
            <path fill="#CDA70C" d="M0 92.998v3a4 4 0 0 0 4 4h40v-7H0z"/>
        </svg></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
     <!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <div class="hero hero-single route bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <h2 class="hero-title mb-4">Portfolio Details</h2>
          <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
              <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item active">Portfolio Details</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <main id="main">

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="{{ asset('images/TiktakToeImg.png') }}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{ asset('images/TiktakToeImg.png') }}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{ asset('images/TiktakToeImg.png') }}" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: Web design</li>
                <li><strong>Client</strong>: ASU Company</li>
                <li><strong>Project date</strong>: 01 March, 2020</li>
                <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>This is an example of portfolio detail</h2>
              <p>
                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong>DevFolio</strong>. All Rights Reserved</p>
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
            -->
              {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/typed.js/typed.umd.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>