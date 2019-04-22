<?php 
  $conn =new mysqli("localhost","root","root","bank") ;
  if($conn->connect_error)
  {
        die("Cannot connect to the database ".$conn->connect_error) ;
  }
  
  
$var = mysqli_real_escape_string($conn,$_POST['id']);
  $sql ="DELETE FROM CUSTOMER WHERE CUSTOMER_ID='".$var."' " ;
  $sql1="DELETE FROM CUSTOMERPASSWORD WHERE id='".$var."' " ;
  if($conn->query($sql)==TRUE)
  {
        echo "Success" ;

  }
  else
  {
        echo "Error ".$sql."<br>".$conn->error ;
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

