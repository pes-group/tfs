<?php
session_start();
ob_start();

if(isset($_POST['search']))
{
$name=$_POST['search'];
$_SESSION['name']=$name;

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

foreach (ListFiles2("gallery/".$name) as $key=>$file)
{
$file_display = [ 'jpg', 'jpeg', 'png', 'gif' ];
$file_type = pathinfo($file, PATHINFO_EXTENSION);
if (in_array($file_type, $file_display) == true)
{
    if(!empty($file))
    {
 ?>
 <div class='col-lg-4 col-md-6 portfolio-item filter-app' data-aos='zoom-out'>
 <a href='<?php echo $file;?>' data-gall='portfolioGallery' class='venobox preview-link' title=''>     
      <img src='<?php echo $file;?>' class='img-fluid' alt='' style='height:250px;width:250px;'>
</a>

    <div class='portfolio-info'>
        <input type='submit' onclick="return confirmation1();" class="btn btn-info btn-md" style='width:250px;' value='<?php echo $file;?>' name='text1'>

        <script>

        function confirmation1() {
            if (confirm('Are you sure you want to delete the image?')) {
            return true;
            console.log('Image was deleted.');
            } else {
            return false;
            console.log('Image was not deleted.');
            }
        }
        
        </script>

    </div>
    <br><br>

</div>

<?php
    }
    else
    {
        echo "no image exists";
    }



}
else
{
    if(!empty($file))
    {
 ?>
 <div class='col-lg-4 col-md-6 portfolio-item filter-app' data-aos='zoom-out'>
     <textarea style='width:350px;height:250px;' readonly><?php
      $filename = $file;
      $names=$name.".txt";
     
  

      $type = filetype($filename);
      if($type !== 'file') continue;
  
      $aa = fopen($filename,'r');
      if(filesize($filename)>0)
      {
       $read=fread($aa,filesize($filename));
       
       echo $read;
      }
      else
      echo "no description";
      
     ?></textarea>

    <div class='portfolio-info'>
        <input type='submit' onclick="return confirmation2();" class="btn btn-info btn-md" style='width:350px;' value='<?php echo $file;?>' name='text1' >

        <script>

        function confirmation2() {
            if (confirm('Are you sure you want to delete this description?')) {
            return true;
            console.log('Description was deleted.');
            } else {
            return false;
            console.log('Description was not deleted.');
            }
        }
        
        </script>

    </div>
    <br><br>

</div>
<?php
    }
    else
    {
        echo "no image exists";
    }
}
// End of Texting gallery
}
}


?>