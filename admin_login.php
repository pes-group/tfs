<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Shubhchintak Foundation Trust</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="http://shubhchintaktrust.com/assets/img/logo/icon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
 <link rel="icon" href="adminfavicon.png">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/init-tinymce.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


</head>
<body>
<button type="button" class="mobile-nav-toggle d-lg-none"><i class="icofont-navigation-menu"></i></button>
<header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto"><a class="logo-link" style="text-decoration: none;" href="index.php">
        <div style="display: flex;">
          <img id="smaller-log" class="mr-2 small-log" style="height: 5em; width: 5em;" src="logo.jpeg" alt="SHUBCHINTAK-Logo">
          <p id="logo-text" class="pl-2 mr-5 logo-title" style="display: flex;align-items: center ;">SHUBHCHINTAK FOUNDATION TRUST</p>
        </div>
      </a>
    
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="events.php">Events</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <!-- <li><a href="testimonials.html">Testimonials</a></li> -->
          <!-- <li><a href="pricing.html">Pricing</a></li> -->
          <!-- <li><a href="blog.html">Blog</a></li> -->
          <!-- <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li> -->
          <li><a href="about.html">About</a></li>
          <li class="active"><a href="admin.php">Admin</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2 style="color: red;" >Admin</h2>
          <ol>
            <li><a href="index.php" style="text-decoration: none;">Home</a></li>
            <li>Admin</li>
          </ol>
        </div>

      </div>
    </section>
    
  <!--Login-->
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Admin Log In</h5>
            <form class="form-signin" name="myForm" action="" method="POST">
              <div class="form-label-group">
                 
                <input type="text" name="username" id="inputText" class="form-control" placeholder="Username" required autofocus>
                <label for="inputText" class="text"></label>
              </div>

              <div class="form-label-group">
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <label for="inputPassword" class="text"></label>
              </div>
                
              <div class="mb-3">

              <?php

                if(isset($_POST['submit'])) {
                    $user = $_POST['username'];
                    $pass = $_POST['password'];

                    if($user == "admin" && $pass == "admin"){
                        $_SESSION['name1']= 'Admin';
                        ?>
                        <script>
                            Swal.fire({
                            icon: 'success',
                            title: 'Login Successfull!',
                            showConfirmButton: false,
                            });
                            location.replace("admin.php"); 
                            

                        </script>
                        <?php
                    }else {
                            $_SESSION["error"] = "Incorrect Username/Password";
                            ?>
                            <script>Swal.fire({
                              title: "Incorrect Password!",
                              text: "Failed to login",
                              icon: "error",
                              button: "Retry",
                            })</script>
                            <?php
                            echo('<p class="incorrect" style="color:red">'.$_SESSION["error"]."</p>\n");
                            unset($_SESSION["error"]);
                        }

                }


              ?>
              <a class="forgot-pass" onclick="alertFunc();" href="#">Forgot password?</a>
              </div>
              <input type="submit" name="submit" class="btn btn-lg btn-primary btn-block text-uppercase" value="Log In">
              <!--<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Log in</button>-->
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div> 

<script>
function alertFunc() {
    alert('Contact administrator at \n\n admin@shubhchintaktrust.com');
    window.location.href="admin_login.php";
}

    history.pushState(null, null, null);
    window.addEventListener('popstate', function () {
    history.pushState(null, null, null);
    });

</script>

  <!-- ======= Footer ======= -->
  <footer id="footer"> 

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Shubchintak</h3>
            <h3>Foundation Trust</h3>
            <p>
              <!-- H-210 Daffodils, <br>
              Magarpatta City,<br> -->
              Pune - 411013 <br>
              India <br><br>
              <strong>Phone:</strong> +91-7385509098<br>
              <strong>Email:</strong>  admin@shubhchintaktrust.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <!-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> -->

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="text" name="text" style="border: none;" placeholder="Name">
              <!-- <input type="email" name="email" placeholder="Email">
              <input type="text" name="city" placeholder="City">
              <input type="tel" name="tel" placeholder="Phone No."><br> -->
              <input type="submit" value="Join Now">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>SHUBHCHINTAK FOUNDATION TRUST</span></strong>. All Rights Reserved
        </div>
        <div class="credits" style="color :#3b312f;">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/ -->
          Designed by <a style="color :#3b312f;" href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> -->
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Sticky Social -->

  <div id="social-icons" class="icon-bar">
    <a href="#" class="facebook-icon"><i class="bx bxl-facebook"></i></a> 
    <a href="#" class="twitter-icon"><i class="bx bxl-twitter"></i></a> 
    <a href="#" class="google-icon"><i class="bx bxl-google"></i></a> 
    <a href="#" class="linkedin-icon"><i class="bx bxl-linkedin"></i></a>
    <a href="#" class="youtube-icon"><i class="bx bxl-youtube"></i></a> 
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>
