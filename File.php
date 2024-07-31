<?php

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

    echo ($a.$b);
    echo "<pre>$fout</pre>";
    

            
}        
        
            
    
?>
