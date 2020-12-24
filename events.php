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

  <!-- =======================================================
  * Template Name: Flattern - v2.1.0
  * Template URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    <style>
    .services .event {
        /* line-height: 24px; */
        font-size: 14px;
        height: 500px;
    }
    .services .description {
        font-size: 14px;
        height: 180px;
        overflow: scroll;
        word-wrap: break-word;
        
    }
    .description::-webkit-scrollbar {
        width: 10px;               /* width of the entire scrollbar */
    }
    .description::-webkit-scrollbar-track {
        background: #fff;        /* color of the tracking area */
    }
    .description::-webkit-scrollbar-thumb {
        background-color: grey;    /* color of the scroll thumb */
        /* border-radius: 20px;   */
       
        border-left: 5px solid white;     /* roundness of the scroll thumb */
    }
    </style>
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <!-- <section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i><a href="mailto:admin@shubchintaktrust.com">admin@shubchintaktrust.com</a>
        <i class="icofont-phone"></i> +91-7385509098
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="https://www.facebook.com/ShubhchintakFoundationTrust" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="https://instagram.com/shubhchintaktrust?igshid=rll00qby0r91" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
      </div>
    </div>
  </section> -->

  <!-- Big Logo -->
  <!-- <div id="logo">
    <center>
      <a href="/index.php"><img src="logo.jpeg" alt="SHUBCHINTAK-Logo" style="height: 7rem; width: 7rem;"></a>
    </center>
  </div> -->

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto"><a class="logo-link" href="index.php">
        <div style="display: flex;">
          <img id="smaller-log" class="mr-2 small-log" style="height: 5em; width: 5em;" src="logo.jpeg" alt="SHUBCHINTAK-Logo">
          <p id="logo-text" class="pl-2 mr-5 logo-title" style="display: flex;align-items: center ;">SHUBHCHINTAK FOUNDATION TRUST</p>
        </div>
      </a>
    
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li class="active"><a href="events.php">Events</a></li>
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
          <li><a href="contact.html">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Events</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Events</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Check out our <strong>events</strong></h2>
        </div>

        <div class="row">
          
          <?php
                    function ListFiles2($dir) {
                      if (is_dir($dir))
                      {
                      if($dh = opendir($dir)) {

                    $files = Array();
                    $inner_files = Array();
                    while($file = readdir($dh)) {
                        if($file != "." && $file != ".." && $file[0] != '.') {
                            if(is_dir($dir . "/" . $file)) {
                                $inner_files = ListFiles($dir . "/" . $file);


                                if(is_array($inner_files)) $files = array_merge($files, $inner_files);
                          }else {
                                array_push($files, $dir . "/" . $file);
                            }
                        }
                    }
                  }
                  closedir($dh);
                  return $files;
                }
            }


// Open a directory, and read its content     
foreach (ListFiles2("events/events-img") as $key=>$file)
{
  
  $file_display = [ 'jpg', 'jpeg', 'png', 'gif' ];
  $file_type = pathinfo($file, PATHINFO_EXTENSION);
  if (in_array($file_type, $file_display) == true )
   {

  $fname=basename($file);
  $finalname=substr($fname,0,strpos($fname,"."));
   echo "<div class=\"col-lg-4 col-md-6 cards\">";
   echo "<div class=\"event\" data-aos=\"zoom-in\">";
   echo "<h4 style=\"cursor: text;\" class=\"title btn btn-dark btn-block\">".substr($fname,0,strpos($fname,"."))."</h4>";
   echo "<div class=\"event-img\"><a href=\"$file\" data-gall='portfolioimages' class=\"venobox preview-link\" title='Click to expand'><img style='height:250px;width:600px' class='img-fluid'  src=\"$file\"/></a> </div>";
        
    $directory = "events/events-description/";
    $dir = opendir($directory);
     if(is_dir($directory))
    {
        
     while (($files = readdir($dir)) !== false) 
     {
        $file_display = [ 'txt' ];
        $file_type = pathinfo($files, PATHINFO_EXTENSION);
        if (in_array($file_type, $file_display) == true )
        {
     $filenames = $directory . $files;
    $type = filetype($filenames);
     if($type !== 'file') continue;
     $ffname=$filenames;
     $anothername=substr(basename($file),0,strpos(basename($file),"."));
     $ffname=substr(basename($filenames),0,strpos(basename($filenames),"."));
   
     if($anothername==$ffname)
     {
     $aa = fopen($filenames,'r');
    if(filesize($filenames)>0)
      $read=fread($aa,filesize($filenames));
      echo "<div class=\"description\"><p>".$read."</p></div>";
      }
        }

       }
        }
       echo " </div>";
       echo " </div>";
 
    }
      

 
}
// End of Texting images

          

          ?>      
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Features Section ======= -->
    <!-- <section id="features" class="features">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Some <strong>Features</strong> we do provide</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-right">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                  <h4>Modi sit est</h4>
                  <p>Quis excepturi porro totam sint earum quo nulla perspiciatis eius.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-2">
                  <h4>Unde praesentium sed</h4>
                  <p>Voluptas vel esse repudiandae quo excepturi.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-3">
                  <h4>Pariatur explicabo vel</h4>
                  <p>Velit veniam ipsa sit nihil blanditiis mollitia natus.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-4">
                  <h4>Nostrum qui quasi</h4>
                  <p>Ratione hic sapiente nostrum doloremque illum nulla praesentium id</p>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-7 ml-auto" data-aos="fade-left" data-aos-delay="100">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <figure>
                  <img src="assets/img/features-1.png" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-2">
                <figure>
                  <img src="assets/img/features-2.png" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-3">
                <figure>
                  <img src="assets/img/features-3.png" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-4">
                <figure>
                  <img src="assets/img/features-4.png" alt="" class="img-fluid">
                </figure>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>--> <!--End Features Section -->

  </main><!-- End #main -->

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
              <input type="email" name="email"><input type="submit" value="Subscribe">
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