<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SHUBHCHINTAK FOUNDATION TRUST</title>
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
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i><a href="mailto:admin@shubchintaktrust.com">admin@shubchintaktrust.com</a>
        <i class="icofont-phone"></i> +91-9370582686
      </div>
      <div class="social-links">
        <!-- <a href="#" class="twitter"><i class="icofont-twitter"></i></a> -->
        <a href="https://www.facebook.com/ShubhchintakFoundationTrust" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="https://instagram.com/shubhchintaktrust?igshid=rll00qby0r91" class="instagram"><i class="icofont-instagram"></i></a>
        <!-- <a href="#" class="skype"><i class="icofont-skype"></i></a> -->
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto"><a href="index.html">
        <div style="display: flex;">
        <img class="mr-2" src="logo.jpeg" alt="SHUBCHINTAK-Logo" class="img-fluid">
        <p class="text-light pl-2 mr-5 logo-title" style="display: flex;align-items: center ;">SHUBHCHINTAK FOUNDATION TRUST</a></p></div>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="services.html">Events</a></li>
          <li class="active"><a href="portfolio.php">Portfolio</a></li>
          <!-- <li><a href="testimonials.html">Testimonials</a></li> -->
          <!-- <li><a href="pricing.html">Pricing</a></li> -->
          <li><a href="blog.html">Blog</a></li>
          
          <li class="drop-down"><a href="">Drop Down</a>
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
          </li>
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
          <h2>Portfolio</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Portfolio</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
  
 
      <div class="container">

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            
            <?php 
            $dir = "images/";

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($filed = readdir($dh)) !== false)
    {
      $file_display1 = ['html', 'css', 'doc', 'htm','xhtml','jsp','js','php','xml','svg','jpg', 'jpeg', 'png', 'gif'];
      $file_type1 = pathinfo($filed, PATHINFO_EXTENSION);
      if (in_array($file_type1, $file_display1) ==false)
      {
      if($filed != "." && $filed != ".." && $filed[0] != '.' && $filed!='description' ) {
            ?>
              <li data-filter=".<?php echo $filed;?>"><?php echo $filed;?></li>
            <?php


      }

    }
      }
      }
      }
        ?>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">

         
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

$dir = "images/";

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($filed = readdir($dh)) !== false)
    {
      $file_display1 = ['html', 'css', 'doc', 'htm','xhtml','jsp','js','php','xml','svg','jpg', 'jpeg', 'png', 'gif'];
      $file_type1 = pathinfo($filed, PATHINFO_EXTENSION);
      if (in_array($file_type1, $file_display1) ==false)
      {
      if($filed != "." && $filed != ".." && $filed[0] != '.' && $filed!='description') {

      echo "filename:" . $filed . "<br>";
     
foreach (ListFiles2("images/$filed") as $key=>$file)
{
  $file_display = [ 'jpg', 'jpeg', 'png', 'gif' ];
  $file_type = pathinfo($file, PATHINFO_EXTENSION);
  if (in_array($file_type, $file_display) == true)
   {
     
  $fname=basename($file);
  $finalname=substr($fname,0,strpos($fname,"."));
  echo "<div class=\"col-lg-4 col-md-6 portfolio-item ".$filed."\">";
        echo "<div class=\"box\"><img style='height:250px;width:600px'class='img-fluid'  src=\"$file\"/></div>";
        // .substr($fname,0,strpos($fname,"."))
    $directory = "images/description/";
    $dir = opendir($directory);
    $filenames;
    while (($files = readdir($dir)) !== false) 
    {
    $filename = $directory . $files;
    $type = filetype($filename);
    if($type !== 'file') continue;
    $filenames = $filename;
    $ffname=basename($filenames);
    $anothername=substr($ffname,0,strpos($ffname,"."));
    if($anothername==$finalname)
    {
    $aa = fopen($filename,'r');
    if(filesize($filename)>0)
     $read=fread($aa,filesize($filename));
    echo "<div class=\"portfolio-info\">";
    echo "<p>".$finalname."</p>";
     
     echo "<a href=\"$file\" data-gall='portfolioGallery' class=\"venobox preview-link\" title=\'$read\'><i class=\"bx bx-expand\"></i></a>";
   echo "<a href=\"portfolio-details.html\" class=\"details-link\" title='More Details'><i class=\"bx bx-info-circle\"></i></a>";
  echo "</div>";
  echo " </div>";


      ?>
<div id="mySidenav" class="sidenav">

    </div>
      <?php
      
    }
    else
    {
    echo "<div class=\"portfolio-info\">";

     echo "<p>NA</p>";
     echo "<a href=\"$file\" data-gall='portfolioGallery' class=\"venobox preview-link\" title=\"$filed\"><i class=\"bx bx-expand\"></i></a>";
      echo "<a href=\"portfolio-details.html\" class=\"details-link\" title='More Details'><i class=\"bx bx-info-circle\"></i></a>";
   echo " </div>";
  echo "</div>";

    }
    }
      

  closedir($dir);
 
}
// End of Texting images
}
}
    }
}
closedir($dh);
}
}

?>          
 </div>



 
<!-- 
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-expand"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-info-circle"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-expand"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-info-circle"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-expand"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-info-circle"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-expand"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-info-circle"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-expand"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-info-circle"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-expand"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-info-circle"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-expand"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-info-circle"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-expand"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-info-circle"></i></a>
            </div>
          </div> -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->

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
              H-210 Daffodils, <br>
              Magarpatta City,<br>
              Pune - 411013 <br>
              India <br><br>
              <strong>Phone:</strong> +91-9370582686<br>
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

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

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
  <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>

</html>