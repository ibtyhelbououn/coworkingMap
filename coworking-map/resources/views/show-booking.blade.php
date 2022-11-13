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

  <style>

    .btn-get-started {
  font-size: 16px;
  font-weight: 400;
  display: inline-block;
  padding: 10px 28px;
  border-radius: 4px;
  transition: 0.5s;
  color: white;
  background: #5850ec;
  font-family: 'Poppins', sans-serif;
  border-color: #5850ec;
  
}
.btn-get-started:hover {
  background: rgba(var(--color-primary-rgb), 0.8);
}
    </style>

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
        <img src="../assets/img/logo.png" alt="">
        <span>CoworkingMap</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/admin">Managing Workspaces</a></li>
          <li><a class="nav-link scrollto" href="/admin-consultation">Consultation Requests</a></li>
         
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
          <h2>admin</h2>
          <p>Booking</p>
        </header>

 
        <div class="uk-panel uk-card uk-card-default uk-card-body">
          
            
            <p> <b> Name:</b> {{ $booking->name }}</p>
            <p> <b> E-mail:</b> {{ $booking->email }}</p>
            <p> <b> Phone Number:</b> {{ $booking->phoneNumber }}</p>
            <p> <b> Workspace:</b> {{$booking->coworkingSpace->name}}</p>
            <p> <b> Date:</b> {{ $booking->date }}</p>
            <p> <b> Number of seats::</b> {{ $booking->spots }}</p>

            <div>
                <div class="uk-button-group uk-float-right"> 
                    <button class="uk-button uk-button-default">Decline</button>
                    <form>
                    

                    <button class="uk-button uk-button-primary">Send Email</button>
                    </form>
                </div>
            </div>
        </div>

  


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