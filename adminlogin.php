
<?php
  $conn =new mysqli("localhost","root","root","bank") ;
   if($conn->connect_error)
{
   die("Error".$conn->connect_error) ;
}
if($_POST['name']=="root"&&$_POST['password']=="root")
    {
      echo "Login Successful" ;
      header('Location:admin.php') ;      
      
    } 
else
{
  echo "Login Failed" ;
}


?>


