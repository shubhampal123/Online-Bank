<?php 
  $conn =new mysqli("localhost","root","root","bank") ;
  if($conn->connect_error)
  {
        die("Cannot connect to the database ".$conn->connect_error) ;
  }
  
   $var1 = mysqli_real_escape_string($conn,$_POST['id']);
   $var5=mysqli_real_escape_string($conn,$_POST['loanid']) ;
$var2 = mysqli_real_escape_string($conn,$_POST['amount']);
  $sql ="INSERT INTO BORROWER  VALUES('".$var1."','".$var5."')" ;
  $sql1="INSERT INTO LOAN  VALUES('".$var5."','".$var2."')" ;

  if($conn->query($sql1)==TRUE)
  {
        echo "Success" ;
          if($conn->query($sql)==TRUE)
  {
        echo "Success" ; }
  else
  {
        echo "Error ".$sql."<br>".$conn->error ;  }

  }
  else
  {
        echo "Customer must first open an account in the bank " ; }
  
  $conn->close() ;
 ?>


