
<?php 
  $conn =new mysqli("localhost","root","root","bank") ;
  if($conn->connect_error)
  {
        die("fuck of".$conn->connect_error) ;
  }
  
  
$var = mysqli_real_escape_string($conn,$_POST['id']);
  $sql ="DELETE FROM EMPLOYEE WHERE EMPLOYEE_ID='".$var."' " ;
  $sql1="DELETE FROM EMPLOYEEPASSWORD WHERE id='".$var."' ;" ;

  if($conn->query($sql)==TRUE)
  {
        echo "Success" ;

  }
  else
  {
        echo "fuck".$sql."<br>".$conn->error ;
  }

  if($conn->query($sql1)==TRUE)
  {
        echo "Success" ;

  }
  else
  {
        echo "fuck".$sql."<br>".$conn->error ;
  }
  
  $conn->close() ;
 ?>


