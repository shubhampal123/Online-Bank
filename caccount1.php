<?php 
  $conn =new mysqli("localhost","root","root","bank") ;
  if($conn->connect_error)
  {
        die("Error ".$conn->connect_error) ;
  }
  
   $var1 = mysqli_real_escape_string($conn,$_POST['name']);
   $var2=mysqli_real_escape_string($conn,$_POST['balance']) ;
   $var3=mysqli_real_escape_string($conn,$_POST['date']) ;
    echo "yes" ;
   echo $var1 ;
    session_start();
            $var4=$_SESSION["NameGlobal"] ;
  $var5=mysqli_real_escape_string($conn,$_POST['rate'])  ;
    
    echo $var1 ;   
  $sql ="INSERT INTO _ACCOUNT  VALUES('".$var1."','".$var2."')" ;


  $sql1="INSERT INTO DEPOSITOR VALUES('".$var3."','".$var1."','".$var4."')" ;
  $sql2="INSERT INTO CHECKING_ACCOUNT VALUES ('".$var1."','".$var5."')" ;  

  if($conn->query($sql)==TRUE)
  {
        echo "Success" ;

  }
  else
  {
        echo "fuck".$sql."<br>".$conn->error ; }
   if($conn->query($sql1)==TRUE)
  {
        echo "Success" ; }
  else
  {
        echo "fuck".$sql1."<br>".$conn->error ;  }
  
    if($conn->query($sql2)==TRUE)
  {
        echo "Success" ; }
  else
  {
        echo "fuck".$sql2."<br>".$conn->error ;  }
  
 $conn->close() ;
?>

