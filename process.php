<?php
$email=$_POST['email'];
$pass=$_POST['password'];

include("includes/connect.php");

 $q="select * from student where email='$email' and pas='$pass'";
 $res=mysqli_query($connect,$q);
 $flag=0;
 
 $data=mysqli_fetch_array($res);
   
     if($data['email']==$email && $data['pas']==$pass)
     {
         $flag=1;
       echo " Login sucessful";
     }
     
 
if($flag==0)
{
   
    echo " Login failed";
   header('Location: index.html');
}
 
?>
