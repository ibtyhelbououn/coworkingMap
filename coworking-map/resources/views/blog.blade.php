<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blog - FlexStart Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.9.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
  
        <a href="home" class="logo d-flex align-items-center">
          <img src="assets/img/logo.png" alt="">
          <span>CoworkingMap</span>
        </a>
  
        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="#services">Services</a></li>
           
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            <li><a class="getstarted scrollto" href="login">Log In </a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
  
      </div>
    </header><!-- End Header -->
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Working Spaces</li>
        </ol>
        <h2>Working Spaces</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">
            @foreach($coworkingSpaces as $coworkingSpace)
            <article class="entry">

              <div class="entry-img">
                <img src="/image/{{ $coworkingSpace->image }}" width="900">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">{{$coworkingSpace->name}}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-geo-alt"></i> {{ $coworkingSpace->address }}</li>
                  <li class="d-flex align-items-center"><i class="bi bi-telephone"></i> {{ $coworkingSpace->phoneNumber }}</li>
                  @if( $coworkingSpace->type=='office')
                  <li class="d-flex align-items-center"><i class="bi bi-building"></i> Office</li>
                  @else
                  <li class="d-flex align-items-center"><i class="bi bi-building"></i> Dedicated Desk</li>
                  @endif
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  {{$coworkingSpace->description}}
                </p>
                <div class="read-more">
                  <a href="{{url('/details/'.$coworkingSpace->id)}}">Read More</a>
                  
                </div>
              </div>

            </article><!-- End blog entry -->
            @endforeach
            
            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div>

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form method="get" action="{{url('/search')}}">
                  {{ csrf_field() }}
                  <input type="text" name="query" placeholder="Search WorkSpace">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

             

              <h3 class="sidebar-title">Category</h3>
              <div class="sidebar-item categories">
                <form method="get" action="{{url('/filter')}}">
                  {{ csrf_field() }}
                  <div class="uk-form-controls">
                    <select name="type"class="form-select" aria-label="Default select example" onchange="this.form.submit()" id="type">
                      <option selected>select category</option>
                      <option value="office">Office</option>
                      <option value="dedicateddesk">Dedicated Desk</option>
      
                   </select>
                   
                   
                   
                </form>
              </div><!-- End sidebar categories-->


            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>