<?php
<?php
require_once "templates/head.php";
require_once "templates/header.php";

if(isset($_FILES['file'])){
    $errors= array();
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];
    $file_ext= pathinfo($file_name, PATHINFO_EXTENSION);
    
  
  
    
    $efile= 'flawfinder '.$file_name;
    
    $out = shell_exec($efile);
    $a = strpos($out,"FINAL");
    $b = strrpos($out,"1");

    $fout = substr($out,$a,($b-$a)+2);

    
     $text = 'The Final Analysis Summary :';
    echo '<pre style="text-align:center;font-size:17px;font-family: Roboto;">'.$text.'</pre>';

    echo '<textarea style="resize:none; height:500px; width:1500px; text-align:center; margin-left:250px; font-size:17px; padding-top:50px;" readonly> '.$fout.' </textarea>';
    

            
}        
        
            
    
?>
