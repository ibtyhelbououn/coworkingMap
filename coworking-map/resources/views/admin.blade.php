<!DOCTYPE html>
<html lang="en">

<head>

 
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FlexStart Bootstrap Template - Index</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/css/uikit.min.css" />
<link rel="stylesheet" href="bootstrap.min.css">

<script src="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/js/uikit-icons.min.js"></script>

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
          <li><a class="nav-link scrollto active" href="/admin">Managing Workspaces</a></li>
          <li><a class="nav-link scrollto" href="/admin-consultation">Consultation requests</a></li>
         
          <li><a class="nav-link scrollto" href="/bookings">Booking</a></li>
          <li><a class="getstarted scrollto" href="login">Log Out </a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Admin</h2>
          <p>Managing Work Spaces</p>
        </header>

        <div class="row gy-4 d-flex justify-content-center">

          <div class="uk-container">
              <table class="uk-table uk-table-divider uk-table-hover uk-table-middle ">
                <thead>
                    <tr>
                      <th >ID</th>
                      <th >Image</th>
                      <th >Name</th>
                      <th >Address</th>
                      <th >phone number</th>
                      <th >description</th>
                      <th >type</th>
                      <th >options</th>
                      <th >
                        <ul class="uk-iconnav uk-float-right">
                        <li><a href="/add-coworking-space" uk-icon="icon: plus">&#160 &#160 </a></li>
                        </ul>
                      </th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($coworkingSpaces as $coworkingSpace)
                <tr>
                  <td class="uk-text-muted" > {{$coworkingSpace->id}} </th>
                  <td><img src="/image/{{ $coworkingSpace->image }}" width="100px"> </td>
                  <td>{{$coworkingSpace->name}} </td>
                  <td>{{$coworkingSpace->address}} </td>
                  <td>{{$coworkingSpace->phoneNumber}} </td>
                  <td class="uk-text-truncate">{{$coworkingSpace->description}} </td>
                  <td>{{$coworkingSpace->type}} </td>
                  <td> @foreach($coworkingSpace->options as $value)
                    {{$value}} /
                    @endforeach </td>
                  
                  <td >
                    <div>
                      <div class="uk-button-group uk-float-right"> 
                      <form method="get" action="{{url('/edit-coworking-space/'.$coworkingSpace->id)}}">
                        <button type="submit" class="uk-button uk-button-success" >Edit</button>
                      </form>
                    &nbsp 
                  
                        <form method="post" action="{{url('/delete-coworking-space/'.$coworkingSpace->id)}}">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                          <button type="submit" class="uk-button uk-button-danger"  onclick="UIkit.notification({message: 'Coworking Space Deleted!'})">Delete</button>
                        </form>
                      <div>
                      </div>
                  </td>
                </tr>
                    @endforeach
              </tbody>
              </table>
              </div>

        

      </div>


       
      </div>

    </section><!-- End Contact Section -->

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