<?php
session_start();
ob_start();

if(isset($_POST['search']))
{
$name=$_POST['search'];
$_SESSION['name']=$name;

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
            $names=$name.".txt";
           
        

            $type = filetype($filename);
            if($type !== 'file') continue;
        $another=basename($filename);
            if($another==$names)
            {
            $aa = fopen($filename,'r');
            if(filesize($filename)>0)
            {
             $read=fread($aa,filesize($filename));
             
             echo $read;
            }
            else
            echo "no description";
            }
        
          }
        }
        }
    }
    if(isset($_POST['edit1']))
     {
      $details=$_POST['details1'];
      echo $details;
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
                 $names=$_SESSION['name'].".txt";
                $type = filetype($filename);
                if($type !== 'file') continue;
                $another=basename($filename);
                if($another==$names)
                {
                   $aa = fopen($filename,'w');
     
                    $read=fwrite($aa,$details);
                   fclose($aa);
                   header("location:admin.php?get=folder");
                 }
                 else
                 echo "";
      
              }
          }
      }
    }

?>