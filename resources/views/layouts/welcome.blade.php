<!DOCTYPE html>
{{-- <html lang="en"> --}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>K.M.A.X</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

@include('styles.style')
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

      <h1 class="logo"><a href="/">K.M.A.X</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      {{-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> --}}
@include('layouts.navbar')
      <!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="hero route bg-image" style="background-image: url(images/bg-title-01.jpg)">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <p class="display-6 color-d">Hello, world!</p>
          <h1 class="hero-title mb-4">I am Kemo Audrey Xaviera</h1>
          <p class="hero-subtitle"><span class="typed" data-typed-items="Designer, Developer, Freelancer"></span></p>
          <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p>
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    @include('layouts.about')
  <!-- End About Section -->

    <!-- ======= Services Section ======= -->
    @include('layouts.services')
    <!-- End Services Section -->

    <!-- ======= Counter Section ======= -->
    @include('layouts.counter')
   <!-- End Counter Section -->

    <!-- ======= Portfolio Section ======= -->
    @include('layouts.portfolio')
    <!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    {{-- @include('layouts.testimonials') --}}
   <!-- End Testimonials Section -->

    <!-- ======= Blog Section ======= -->
    {{-- @include('layouts.blog') --}}
   <!-- End Blog Section -->

    <!-- ======= Contact Section ======= -->
    @include('layouts.contact')
   <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('layouts.footer')
 <!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
@include('scripts.script')
</body>

</html>