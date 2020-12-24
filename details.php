<?php
if(isset($_POST['text1']))
{
    $filenamess=$_POST['text1'];
}

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
  <link href="assets/img/favicon.png" rel="icon">
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
          <li class="active"><a href="index.php">Home</a></li>
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
          <h2>Details</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Details</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
        <h2 class="portfolio-title"><?php echo basename($filenamess); ?></h2>
        <div class="row d-flex" style="align-items:center;">

          <div class="col-lg-4 col-md-6 portfolio-item " data-aos="fade-right">
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


     
foreach (ListFiles2("frontpage/") as $key=>$file)
{
  $file_display = [ 'jpg', 'jpeg', 'png', 'gif' ];
  $file_type = pathinfo($file, PATHINFO_EXTENSION);
  if (in_array($file_type, $file_display) == true)
   {
    $files=substr(basename($file),0,strpos(basename($file),"."));

    if($filenamess==$files)
    {
        echo "<div class=\"box\" ><a href=\"$file\" data-gall='portfolioGallery' class=\"venobox preview-link\" title=''><img class='img-fluid'  src=\"$file\"/></a></div>";
//    echo basename($filenamess);
  
    }
  
 
}
// End of Texting images
}

?>
          </div>

          <div style="word-wrap: break-word;" class="col-lg-8 col-md-6 portfolio-info img-details" data-aos="fade-left">
          <?php
          $directory = "frontpage/";
            $dir = opendir($directory);
            if(is_dir($directory))
            {
    
            while (($files = readdir($dir)) !== false) 
            {
              $file_display = [ 'txt' ];
              $file_type = pathinfo($files, PATHINFO_EXTENSION);
              if (in_array($file_type, $file_display) == true)
               {
            $filename = $directory . $files;
            $type = filetype($filename);
            if($type !== 'file') continue;
            $ffname=$filenamess;
            $another=substr(basename($filename),0,strpos(basename($filename),'.'));
            $anothername=substr($filename,0,strpos($filename,"."));
            if($another==$ffname)
            {
            $aa = fopen($filename,'r');
            if(filesize($filename)>0)
             $read=fread($aa,filesize($filename));
             ?>
             <h5><u><?php echo basename($filenamess); ?></u>:</h5>
             <p><em><?php echo $read; ?></em></p>
            
             <?php
            }

          }
        }
        }
        ?>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
  <div class='container'>
    <h4>Some Of Our Recent Works</h4>
  <div class="row portfolio-container" >

<form action="details.php" method="post">
 <?php
    function ListFiles($dir) {
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

foreach (ListFiles("frontpage") as $key=>$file)
{
$file_display = [ 'jpg', 'jpeg', 'png', 'gif' ];
$file_type = pathinfo($file, PATHINFO_EXTENSION);
if (in_array($file_type, $file_display) == true)
{
  $files=substr(basename($file),0,strpos(basename($file),"."));
  if($filenamess!=$files)
  {
 ?>
 <div class='col-12 col-sm-3 mr-3 portfolio-item filter-app' >
 <a href='<?php echo $file;?>' data-gall='portfolioGallery' class='venobox preview-link' title='Environmental Day'>     
      <img src='<?php echo $file;?>' style="width: 2400px;max-width: 100%;height: 180px;" class='img-fluid' alt=''>
</a>
<div class='portfolio-info'>

<a href="details.php" title="More Details">

    <button class="btn btn-info btn-md btn-block" style="outline: none; border:none;" name='text1' value='<?php  
    $file=substr(basename($file),0,strpos(basename($file),"."));
    echo $file;?>'> <?php echo $file; ?> <i style="float: right;" class="bx bx-info-circle bx-sm"></i> </button>

</a>
<br />

</div>
</div>

<?php


}

}
// End of Texting frontpage
}

?>
 
  



</form>
</div>
</div>
<!-- End #main -->

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
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/ -->
        Designed by <a style="color :#3b312f;" href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

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