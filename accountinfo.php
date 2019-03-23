<!DOCTYPE html>
<html>
<head>
    <title>
        update info 
    </title>
</head>
<body>
<?php
    $conn=mysqli_connect("localhost","root","root","bank") or die("Fuck u") ;
     if(!$conn)
     {
        echo "failed" ;
     }
     session_start() ;
     $var1=$_SESSION["NameGlobal"] ;
     $var = mysqli_real_escape_string($conn,$var1);
  $sql ="DELETE FROM CUSTOMER WHERE CUSTOMER_ID='".$var."' ;" ;
  $sql1="DELETE FROM CUSTOMERPASSWORD WHERE id='".$var."' ;" ;
  if($conn->query($sql)==TRUE)
   echo "Success" ;

  else
   echo "fuck".$sql."<br>".$conn->error ;

    if($conn->query($sql1)==TRUE)
   echo "Success" ;

  else
   echo "fuck".$sql."<br>".$conn->error ;
  
 header('Location:insertcustomer.php') ;
?>
</body>
</html>
