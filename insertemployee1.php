<?php 
  $conn =new mysqli("localhost","root","root","bank") ;
  if($conn->connect_error)
  {
        die("Cannot connect to the database ".$conn->connect_error) ;
  }
  
   $var1 = mysqli_real_escape_string($conn,$_POST['name']);
   $var5=mysqli_real_escape_string($conn,$_POST['password']) ;
$var2 = mysqli_real_escape_string($conn,$_POST['id']);
$var3 = mysqli_real_escape_string($conn,$_POST['street']);
$var4 = mysqli_real_escape_string($conn,$_POST['date']);
  $sql ="INSERT INTO EMPLOYEE  VALUES('".$var2."','".$var1."','".$var3."','".$var4."')" ;
  $sql1="INSERT INTO EMPLOYEEPASSWORD  VALUES('".$var2."','".$var5."')" ;

  if($conn->query($sql)==TRUE)
  {
        echo "Success" ;

  }
  else
  {
        echo "Error " ;
  }
   if($conn->query($sql1)==TRUE)
  {
        echo "Success" ;

  }
  else
  {
        echo "Error ".$sql."<br>".$conn->error ;
  }
 
  $conn->close() ;
 ?>

