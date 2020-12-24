

<?php
session_start();
ob_start();

if(!isset($_SESSION['name'])) {
  header('Location: admin_login.php');
}

if(!isset($_SERVER['HTTP_REFERER']))
{
  header("location: admin_login.php");
   exit();
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



<style>
/*  */
.edit{
  word-wrap:break-word;
}
/* input text */
#second .names,#third .names,#fourth .names{
  cursor:pointer;
  outline:none;
  border:none;
}
.names:focus{
  background-color:green;
}
/* for input link */

.textareadiv{
  height:150px;
}
.textareadiv textarea{
  height:100%;
  width:100%;
}
</style>
<?php
if(isset($_GET['get']))
{
?>
<script>
  $(document).ready(function(){
  swal({
    title:"success",
    icon:"success",
    text:"successfully done",
  });
});
</script>
<?php
}
?>
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

<ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link  <?php
    
      if(!empty($_GET['get']))
      
     echo ($_GET['get']===('index')?'active':'');
    
      else
      echo "active";
     
     ?>" id="pills-home-tab" data-toggle="pill" href="#first" role="tab" aria-controls="pills-home" aria-selected="true">Add Images</a>
  </li>
  <li class="nav-item">
    <a class="nav-link   <?php
     if(isset($_GET['get']))
     {
       if($_GET['get']=="folder")
         echo "active";
      else
      echo "";
     }
     ?>     " id="pills-profile-tab" data-toggle="pill" href="#second" role="tab" aria-controls="pills-profile" aria-selected="false">Description's for folder</a>
  </li>
  <li class="nav-item">
    <a class="nav-link  <?php
     if(isset($_GET['get']))
     {
       if($_GET['get']=="frdescription")
         echo "active";
      else
      echo "";
     }
     ?>     " id="pills-contact-tab" data-toggle="pill" href="#third" role="tab" aria-controls="pills-contact" aria-selected="false">Index Page image and description</a>
  </li>
  <li class="nav-item  <?php
     if(isset($_GET['get']))
     {
       if($_GET['get']=="events")
         echo "active";
      else
      echo "";
     }
     ?>     ">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#fourth" role="tab" aria-controls="pills-contact" aria-selected="false">Events description</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
     <div class="tab-pane  
     <?php
    
      if(!empty($_GET['get']))
      echo ($_GET['get']===('index')?'active':'fade');
      else
      echo "active";
     ?>     
     " id="first" role="tabpanel" aria-labelledby="pills-home-tab">
       <div class='container'>
            <div class="row">
            
                   <form action="" class="md-form" method="post" enctype="multipart/form-data">
                     <select id='folder' name='folder'>
                       <option value='0' selected disabled>Select Your folder</option>
                        <?php
                          $dir = "gallery/";

          // Open a directory, and read its contents
                       if (is_dir($dir))
                       {
                            if ($dh = opendir($dir))
                            {
                               while (($filed = readdir($dh)) !== false)
                                       {
                                          $file_display1 = ['html', 'css', 'doc','txt', 'htm','xhtml','jsp','js','php','xml','svg','jpg', 'jpeg', 'png', 'gif','PNG'];
                                           $file_type1 = pathinfo($filed, PATHINFO_EXTENSION);
                                           if (in_array($file_type1, $file_display1) ==false)
                                           {
                                               if($filed != "." && $filed != ".." && $filed[0] != '.')
                                              {
                           
                                                ?>
                                                 <option value="<?php echo $filed;?>"><?php echo $filed;?></option>

                                                <?php
                                              }

                                           }
                                        }
                           }
                       }


                      ?>
                             </select>
                             <!-- <input type="file" class="custom-input-file" name="img[]" multiple accept="image/*" id="custom-input-files">
                              <label class="custom-file-label" for="custom-input-files">Images/Group images</label> -->
                              <input type="file" name="img[]" multiple accept="image/*"> 
                             
     <!-- <input type="text" name="name" placeholder="if want to change image name"> -->
                              <button class="btn btn-success" name="submit1">Insert</button>
                       </form>
                            <?php
                            if(isset($_POST['submit1']))
                             {
                                if(isset($_POST['folder']))
                                $folder=$_POST['folder'];
            // Count total files
                                if(empty($folder))
                                  {
                                    ?>
                                     <script>
                                      alert("please select a folder");
                                    </script>

                                     <?php
                                    }
                                else
                                {
                                   if(isset($_FILES['img']['name']))
                                    {
                                       $countfiles = count($_FILES['img']['name']);

            // Looping all files
                                    for($i=0;$i<$countfiles;$i++)
                                    {
                                      $filename = $_FILES['img']['name'][$i];
                                    //   $extension=".".pathinfo($filename,PATHINFO_EXTENSION);
                                      // Upload file
                                      if(move_uploaded_file($_FILES['img']['tmp_name'][$i],'gallery/'.$folder.'/'.$filename))
                                        {
                                         header("location:admin.php?get=index");
                                         }

            // else
            // {

            //     if(move_uploaded_file($_FILES['img']['tmp_name'][$i],'gallery/'.$folder.'/'.$name.$extension))
            //     {
            //         echo "success";
            //     }
            // }

                                     }
                                   }
                                 }

                             }
                            ?>
         </div></br>
         </br>
         </br>

                   <!-- Delete Image Section  -->
            <div class="row">
              <h2>Delete images/textfile</h2>
               <div class="col-12">
               
              
               <form action='' method='post' enctype='mutiplart/form-data'>
                  <select id='folders' name='folders'>
                    
                        <?php
                          $dir = "gallery/";

          // Open a directory, and read its contents
                       if (is_dir($dir))
                       {
                            if ($dh = opendir($dir))
                            {
                               while (($filed = readdir($dh)) !== false)
                                       {
                                          $file_display1 = ['html', 'css', 'doc','txt', 'htm','xhtml','jsp','js','php','xml','svg','jpg', 'jpeg', 'png', 'gif','PNG'];
                                           $file_type1 = pathinfo($filed, PATHINFO_EXTENSION);
                                           if (in_array($file_type1, $file_display1) ==false)
                                           {
                                               if($filed != "." && $filed != ".." && $filed[0] != '.' )
                                              {



                           
                                                ?>
                                                 <option value="<?php echo $filed;?>"><?php echo $filed;?></option>

                                                <?php




                                              }

                                           }
                                        }
                           }
                       }


                         ?>
                             </select>
                     </form>
               </div>
               <script>
               $(document).ready(function(){
               $("#folders").click(function(){
               var name=(this).value;
               $.ajax({
                       url:"searchimage.php",
                       method:"post",
                       data:{search:name},
                       dataType:"text",
                       success:function(response){
                           $("#displayimage").html(response);
                       }
                   });
                 
              });
                });
            </script>
               <!-- to display Image -->
               <form action='' method='post'>
               <div class="row" id='displayimage'>
             
               </div>
               </form>
                 <?php
                   if(isset($_POST['text1']))
                    {
                         $photoname=$_POST['text1'];
                         if (!unlink($photoname))
                          {
                            echo ("Error deleting $photoname");
                           }
                          else
                           {
                             ?>
                             <script>
                             
                             
                                window.location.href='admin.php?get=index';
                            </script>
                             <?php
                           }
                     }
               ?>
          </div>
     </div>   
  </div>
  <!-- end of first tab -->
  <div class="tab-pane  <?php
     if(isset($_GET['get']))
     {
       if($_GET['get']=="folder")
         echo "active";
      else
      echo "fade";
     }
     ?>  " id="second" role="tabpanel" aria-labelledby="pills-profile-tab">
        <div class="container">
           <div class="row">
              <div class="col-12">
              <form action="" method="post" enctype="multipart/form-data">
                    <select id='folder' name='folder'>
                    <option value='0' selected disabled>Select Your folder</option>
                    <?php
                       $dir = "gallery/";

          // Open a directory, and read its contents
                     if (is_dir($dir))
                     {
                        if ($dh = opendir($dir))
                        {
                           while (($filed = readdir($dh)) !== false)
                             {
                               $file_display1 = ['html', 'css', 'doc','txt', 'htm','xhtml','jsp','js','php','xml','svg','jpg', 'jpeg', 'png', 'gif','PNG'];
                               $file_type1 = pathinfo($filed, PATHINFO_EXTENSION);
                                if (in_array($file_type1, $file_display1) ==false)
                                 {
                                  if($filed != "." && $filed != ".." && $filed[0] != '.' && $filed!='description' ) 
                                  {

                                      ?>
                                       <option value="<?php echo $filed;?>"><?php echo $filed;?></option>

                                        <?php

                                    }
                                 }
                               }
                        }
                     }


                    ?>
                   </select>
                   <input type="file" name="file[]"  multiple accept="text/plain">
     <!-- <input type="text" name="name" placeholder="if want to change image name"> -->
                   <button class="btn btn-success" name="submit2">Insert</button>
                   </form>
                <?php
                 if(isset($_POST['submit2']))
                 {
                       if(isset($_POST['folder']))
                       $folder=$_POST['folder'];
            // Count total files
                      if(empty($folder))
                      {
                          ?>
                          <script>
                             alert("please select a folder");
                          </script>

                          <?php
                       }
                     else
                       {
                          if(isset($_FILES['file']['name']))
                            {
                              $countfiles = count($_FILES['file']['name']);

            // Looping all files
                                for($i=0;$i<$countfiles;$i++)
                              {
                                $filename = $_FILES['file']['name'][$i];
                                $extension=".".pathinfo($filename,PATHINFO_EXTENSION);
              // Upload file
                                  if(move_uploaded_file($_FILES['file']['tmp_name'][$i],'gallery/description/'.$folder.$extension))
                                {
                                  header("location:admin.php?get=folder");

                                 }

            // else
            // {

            //     if(move_uploaded_file($_FILES['img']['tmp_name'][$i],'gallery/'.$folder.'/'.$name.$extension))
            //     {
            //         echo "success";
            //     }
            // }

                           }
                        }
                     }

                 }
             ?>
             </div>
          </div>
          <!-- End of first row -->
          <h2>Edit Folder's Description</h2>

<div class='row edit border'>
  <div class='col-12 col-sm-6  border search' >
     <div class='col'>
          <form action="" name='searching1' method="post" enctype='multipart/form-data'>
                <?php
                $directory = "gallery/description/";
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
               
                                      $another=substr(basename($filename),0,strpos(basename($filename),'.'));
                                         echo "<center><div class='col-12'><a class='input-link'><input type='text' name='names' class='names'  value='".$another."' readonly></a></div></center>";
    
                                }
                     }
                }           
                ?>
           </form>
      </div>
  </div>
                    <div class='col-12 col-sm-6  border description' >
                       <form action='adminsearch1.php' method="post" enctype='multipart/form-data'> 
                            <div class="col-12 border textareadiv" >
                                   <textarea id='display1' name='details1' class=''>
                                   </textarea>
                              </div>
                              <div class="col-12">
                                <button class="btn btn-warning" name='edit1'>Update</button>                      
                               </div>
                           </form>
                              </div>
                  </div>
<!-- script for ajax -->
                               <script>
                               $(document).ready(function(){
                               $(".names").click(function(){
                               var name=(this).value;
                               $.ajax({
                                       url:"adminsearch1.php",
                                       method:"post",
                                       data:{search:name},
                                       dataType:"text",
                                       success:function(response){
                                           $("#display1").html(response);
                                       }
                                   });
                                 
                                    });
                                 });
                                </script>

      </div>
  </div>
  <!-- End of Second Tab -->
  <div class="tab-pane  <?php
     if(isset($_GET['get']))
     {
       if($_GET['get']=="frdescription")
         echo "active";
      else
      echo "fade";
     }
     ?>  " id="third" role="tabpanel" aria-labelledby="pills-contact-tab">
     <div class='container'>
         <div class='row'>
              <div class='col-12'>
                     <form action="" method="post" enctype="multipart/form-data">
                           <input type="text" name='imagename' required>
                           <input type="file" name="imags[]"  multiple  accept="image/*" required>
     <!-- <input type="text" name="name" placeholder="if want to change image name"> -->
                            <button class="btn btn-success" name="submitf">Insert</button>
                          </form>
                          <h1>For description upload here</h1>
                     <form action="" method="post" enctype="multipart/form-data">

                          <select id='ffolder' name='ffolder' required>
                    <option value='0' selected disabled>Select Your Image</option>
                    <?php
                       $dir = "frontpage/";

          // Open a directory, and read its contents
                     if (is_dir($dir))
                     {
                        if ($dh = opendir($dir))
                        {
                           while (($filed = readdir($dh)) !== false)
                             {
                               $file_display1 = ['html', 'css', 'doc','txt', 'htm','xhtml','jsp','js','php','xml'];
                               $file_type1 = pathinfo($filed, PATHINFO_EXTENSION);
                                if (in_array($file_type1, $file_display1) ==false)
                                 {
                                  if($filed != "." && $filed != ".." && $filed[0] != '.' && $filed!='description' ) 
                                  {

                                      ?>
                                       <option value="<?php echo $filed;?>"><?php echo $filed;?></option>

                                        <?php

                                    }
                                 }
                               }
                        }
                     }


                    ?>
                   </select>
                           <input type="file" name="files"  accept="text/plain" required>
                            </br>
                               </br>
                              <button class="btn btn-success" name="submitd">Insert</button>
                          </form>
                  <?php
                 if(isset($_POST['submitf']))
              {

                
                 $imagename=$_POST['imagename'];
                   // Count total files
                 
                   $countfiles = count($_FILES['imags']['name']);
                        if(!empty($imagename))
                        {
                                   $countfiles = count($_FILES['imags']['name']);

            // Looping all files
                                    for($i=0;$i<$countfiles;$i++)
                                {
                                    $filename = $_FILES['imags']['name'][$i];
                                    $extension=".".pathinfo($filename,PATHINFO_EXTENSION);
              // Upload file
                                    if(move_uploaded_file($_FILES['imags']['tmp_name'][$i],'frontpage/'.$imagename.$extension))
                                      {
                                       header("location:admin.php?get=frdescription");
                                      }


                                 }
                         }
                         else
                         {

                               ?>
                               <script>
                                 alert("please enter a image name/select a  image file");
                               </script>
                               <?php


                         }
                               
                  }
              
              if(isset($_POST['submitd']))
              {
        // for description      
                   $countfiles = count($_FILES['files']['name']);
                   if(!empty($_POST['ffolder']) && !empty($_FILES['files']['name']))
                      {
                               $name=$_POST['ffolder'];
                               $name=substr(basename($name),0,strpos(basename($name),'.'));
           // Looping all files

                                 $filename = $_FILES['files']['name'];
                                 $extension=".".pathinfo($filename,PATHINFO_EXTENSION);
             // Upload file
                                  if(move_uploaded_file($_FILES['files']['tmp_name'],'frontpage/'.$name.$extension))
                                   {
                                     header("location:admin.php?get=frdescription");

                                    }
                        }
                           else
                         {

                                   ?>
                                   <script>
                                   alert("please select a image name/ Select a folder");

                                   </script>

                                   <?php
                               }
            
                  
                 
            
        }
             ?>   
         </div>
    </div>
         <h2>Edit Frontpage Description</h2>

         <div class='row edit border'>
           <div class='col-12 col-sm-6  border search' >
              <div class='col'>
                   <form action="" name='searching' method="post" enctype='multipart/form-data'>
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
                        
                                               $another=substr(basename($filename),0,strpos(basename($filename),'.'));
                                                  echo "<center><div class='col-12'><a class='input-link'><input type='text' name='names' class='names'  value='".$another."' readonly></a></div></center>";
             
                                         }
                              }
                         }           
                         ?>
                    </form>
               </div>
           </div>
              <div class='col-12 col-sm-6  border description' >
                 <form action='adminsearch.php' method="post" enctype='multipart/form-data'> 
                       <div class="col-12 border textareadiv" >
                          <textarea id='display' name='details' style='width:100%;height:100%'>
                          </textarea>
                       </div>
                     <div class="col-12">
                        <button class="btn btn-warning" name='edit'>Update</button>                 
                      </div>
                 </form>
             </div>
       </div>
       <!-- script for ajax -->
               <script>
               $(document).ready(function(){
               $(".names").click(function(){
               var name=(this).value;
               $.ajax({
                       url:"adminsearch.php",
                       method:"post",
                       data:{search:name},
                       dataType:"text",
                       success:function(response){
                           $("#display").html(response);
                       }
                   });
                 
              });
                });
            </script>

    </div>
  </div>
  <!-- End of third tab -->

  <div class="tab-pane  <?php
     if(isset($_GET['get']))
     {
       if($_GET['get']=="events")
         echo "active";
      else
      echo "fade";
     }
     ?>  " id="fourth" role="tabpanel" aria-labelledby="pills-contact-tab">
     <div class='container'>
         <div class='row'>
              <div class='col-12'>
              <form action=""  method="post" enctype="multipart/form-data">
                            <input type='file' name='images[]' accept='images/*' multiple>
                           <input type="file" name="filess[]"  accept="text/plain" multiple >
                            </br>
                               </br>
                              <button class="btn btn-success" name="submite">Insert</button>
                          </form>
                  <?php
                 if(isset($_POST['submite']))
              {
             
                    if(!empty($_FILES['filess']['name']))
                 {
                      $countfiles = count($_FILES['filess']['name']);

                       for($i=0;$i<$countfiles;$i++)
                   {
                       $filename = $_FILES['filess']['name'][$i];
                    
                       if(move_uploaded_file($_FILES['filess']['tmp_name'][$i],'events/events-description/'.$filename))
                         {
                          header("location:admin.php?get=events");
                         

                           }
                    }
         
             
                }
               if(!empty($_FILES['images']['name']))
               {
                   $countfiles = count($_FILES['images']['name']);

                    for($i=0;$i<$countfiles;$i++)
                 {
                    $filename = $_FILES['images']['name'][$i];
             
                     if(move_uploaded_file($_FILES['images']['tmp_name'][$i],'events/events-img/'.$filename))
                    {
                      header("location:admin.php?get=events");
                  

                       }
                   }

               }
          }
             ?>   
         </div>
    </div>
         <h2>Edit Events Description</h2>

         <div class='row edit border'>
           <div class='col-12 col-sm-6  border search' >
              <div class='col'>
                   <form action="" name='searching' method="post" enctype='multipart/form-data'>
                         <?php
                         $directory = "events/events-description/";
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
                        
                                               $another=substr(basename($filename),0,strpos(basename($filename),'.'));
                                                  echo "<center><div class='col-12'><a class='input-link'><input type='text' name='names' class='names'  value='".$another."' readonly></a></div></center>";
             
                                         }
                              }
                         }           
                         ?>
                    </form>
               </div>
           </div>
              <div class='col-12 col-sm-6  border description' >
                 <form action='eventsedit.php' method="post" enctype='multipart/form-data'> 
                       <div class="col-12 border textareadiv" >
                          <textarea id='display3' name='details3' style='width:100%;height:100%'>
                          </textarea>
                       </div>
                     <div class="col-12">
                        <button class="btn btn-warning" name='edit3'>Update</button>                 
                      </div>
                 </form>
             </div>
       <!-- script for ajax -->
               <script>
               $(document).ready(function(){
               $(".names").click(function(){
               var name=(this).value;
               $.ajax({
                       url:"eventsedit.php",
                       method:"post",
                       data:{search:name},
                       dataType:"text",
                       success:function(response){
                           $("#display3").html(response);
                       }
                   });
                 
              });
                });
            </script>

    </div>
      <div class="row border">
              <h2>Delete images/textfile</h2>
               <div class="col-12">
               
              
               <form action='' method='post' enctype='mutiplart/form-data'>
                  <select id='folders1' name='folders'>
                        <?php
                          $dir = "events/";

          // Open a directory, and read its contents
                       if (is_dir($dir))
                       {
                            if ($dh = opendir($dir))
                            {
                               while (($filed = readdir($dh)) !== false)
                                       {
                                          $file_display1 = ['html', 'css', 'doc','txt', 'htm','xhtml','jsp','js','php','xml','svg','jpg', 'jpeg', 'png', 'gif','PNG'];
                                           $file_type1 = pathinfo($filed, PATHINFO_EXTENSION);
                                           if (in_array($file_type1, $file_display1) ==false)
                                           {
                                               if($filed != "." && $filed != ".." && $filed[0] != '.' )
                                              {



                           
                                                ?>
                                                 <option value="<?php echo $filed;?>"><?php echo $filed;?></option>

                                                <?php




                                              }

                                           }
                                        }
                           }
                       }


                         ?>
                             </select>
                     </form>
               </div>
               <script>
               $(document).ready(function(){
               $("#folders1").click(function(){
               var name=(this).value;
               $.ajax({
                       url:"eventssearch.php",
                       method:"post",
                       data:{search:name},
                       dataType:"text",
                       success:function(response){
                           $("#displayimage1").html(response);
                       }
                   });
                 
              });
                });
            </script>
               <!-- to display Image -->
               <form action='' method='post'>
               <div class="row" id='displayimage1'>
             
               </div>
               </form>
           </div>
                 <?php
                   if(isset($_POST['text1']))
                    {
                         $photoname=$_POST['text1'];
                         if (!unlink($photoname))
                          {
                            echo ("Error deleting $photoname");
                           }
                          else
                           {
                             ?>
                             <script>
                             
                             
                                window.location.href='admin.php?get=events';
                            </script>
                             <?php
                           }
                     }
               ?>
  </div>

  <!-- End of fourth tab -->
</div>


<br>
<br>
<br>
<br>

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
