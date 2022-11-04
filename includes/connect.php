<?php

$server="apache2";
        $database="login";
        $username="sai@gmail.com";
        $password="sai@2019";
        
 if($connect=mysqli_connect($server,$username,$password,$database))
 {
     
 }
 else
     {
     echo "Database connection error";
 }
 
     
         
?>
