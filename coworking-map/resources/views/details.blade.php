<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blog Single - FlexStart Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <style>
    .sidenav {
  width: 300px;
  position: fixed;
  z-index: 1;
  top: 20px;
  left: 950px;
  background: #eee;
  overflow-x: hidden;
  padding: 8px 0;
}
  </style>

  <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.14.1/dist/css/uikit.min.css" />

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.14.1/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.14.1/dist/js/uikit-icons.min.js"></script>

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">


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

      <a href="/home" class="logo d-flex align-items-center">
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
          <li><a href="blog.html">Working Spaces</a></li>
          
            @if( $coworkingSpace->type=='office')
            <li>Office</li>
            @else
            <li>Dedicated Desk</li>
            @endif
          
        </ol>
        <h2>{{ $coworkingSpace->name }}</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

                <div class="entry-img">
                    <img src="/image/{{ $coworkingSpace->image }}" width="900">
                  </div>

              <h2 class="entry-title">
                <a href="blog-single.html">{{ $coworkingSpace->name }}</a>
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
                    {{ $coworkingSpace->description }}
                </p>

              </div>

              <div class="entry-footer">
                @foreach($coworkingSpace->options as $value)
                    @if($value=='wifi')
                <i class="bi bi-wifi"></i>
                <ul class="cats">                  
                  <li><a href="#">Wi-Fi</a></li>                   
                </ul>
                    @endif
                    @if($value=='food')
                    <i class="bi bi-cup-straw"></i>
                    <ul class="cats">                  
                      <li><a href="#">Food Hall</a></li>                   
                    </ul>
                    @endif
                    
                        @if($value=='printers')
                        <i class="bi bi-printer"></i>
                        <ul class="cats">                  
                          <li><a href="#">Printers</a></li>                   
                        </ul>
                            @endif
                   
                    @if($value=='wellness')
                    <i class="bi bi-flower2"></i>
                    <ul class="cats">                  
                      <li><a href="#">Wellness Room</a></li>                   
                    </ul>
                  

                        @endif
                    @if($value=='parking')
                    <i class="bi bi-distribute-horizontal"></i>
                    <ul class="cats">                  
                      <li><a href="#">Parking</a></li>                   
                    </ul>
                        @endif

                @endforeach
              </div>

              <div class="entry-content">
                
                <div class="read-more">
                  
        
                  
                </div>
              </div>

            </article><!-- End blog entry -->

            </div><!-- End blog author bio -->

           
          </div><!-- End blog entries list -->

          
        </div>

      </div>
    </section><!-- End Blog Single Section -->

    

<div id="modal-overflow" uk-modal>
    <div class="uk-modal-dialog">
      <form method="post" class="uk-form-stacked" action="{{url('/details/'.$coworkingSpace->id)}}">

        {{ csrf_field() }}




        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="uk-modal-header">
            <h2 class="uk-modal-title">Book Now</h2>
        </div>


        <div class="uk-modal-body" uk-overflow-auto>
          
          
          
            <div class="uk-margin">
              <label for="name" class="uk-form-label">Name</label>
              <div class="uk-form-controls">
              <input type="text" name="name"class="uk-input" id="name" placeholder="Your Name">
              </div>
            </div>
            
            <div class="uk-margin">
              <label for="email" class="uk-form-label">Email</label>
              <div class="uk-form-controls">
              <input type="text" name="email" class="uk-input" id="address" placeholder="Your Email">
              </div>
            </div>
            <div class="uk-margin">
              <label for="phoneNumber" class="uk-form-label">Phone Number</label>
              <div class="uk-form-controls">
              <input type="text" name="phoneNumber" class="uk-input" id="phoneNumber" placeholder="Your Phone Number">
              </div>
            </div>
            
            <div class="uk-margin">
              <label for="spots" class="uk-form-label"> Number of seats</label>
              <div class="uk-form-controls">
              <input type="date" class="uk-input" name="date" placeholder="Date" required>
              </div>
            </div>
            <div class="uk-margin">
              <label for="spots" class="uk-form-label"> Number of seats</label>
              <div class="uk-form-controls">
              <input type="text" name="spots" class="uk-input" id="spots" placeholder="">
              </div>
            </div>
            
            <div class="uk-margin">
              <label for="spaceID" class="uk-form-label"> Work Space ID</label>
              <div class="uk-form-controls">
              <input type="text" name="spaceID" class="uk-input" id="spaceID" value="{{ $coworkingSpace->id }}" placeholder="">
              </div>
            </div>            
            
          
            
          
          

        </div>

        <div class="uk-modal-footer uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
            <button class="uk-button uk-button-primary" type="submit">Send</button>
        </div>
      </form>

    </div>
</div>



  </main><!-- End #main -->

  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>



