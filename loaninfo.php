<!DOCTYPE html>
<head>
</head>
<body>
<br>

<?php

       $connection=mysqli_connect("localhost","root","root","bank")or die("FUCK u".mysqli_connect_error()) ;
       if($connection){
          	session_start();
            $name=$_SESSION["NameGlobal"] ;
	   $var1 =mysqli_real_escape_string($connection,$name) ;
 	   $sql="SELECT * FROM BORROWER   WHERE CUSTOMER_ID='".$var1."'"  ;
    	$result=$connection->query($sql) ;
   if(	 $row=$result->fetch_assoc() )        
       {
       	$var2=$row["LOAN_NUMBER"] ;
        echo "Loan number is " ;
        echo $var2 ;
         $sql1="SELECT * FROM LOAN   WHERE LOAN_NUMBER='".$var2."'"  ;
        $result1=$connection->query($sql1) ;
        $row1=$result1->fetch_assoc() ;
        $var3=$row1["AMOUNT"] ;
        echo "||Loan amount is " ;
	echo $var3 ; 
  
  }
  else
{
 echo "No Loan Taken " ;
}

     mysql_close($connection) ;


}
?>
</body>
