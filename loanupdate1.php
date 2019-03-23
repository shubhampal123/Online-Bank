<?php 
  $conn =new mysqli("localhost","root","root","bank") ;
  if($conn->connect_error)
  {
        die("fuck of".$conn->connect_error) ;
  }
     $var1 = mysqli_real_escape_string($conn,$_POST['id']);
    $var2 = mysqli_real_escape_string($conn,$_POST['amount']);
  
  $sql ="SELECT LOAN_NUMBER  FROM BORROWER WHERE CUSTOMER_ID='".$var1."' " ;
  $result=$conn->query($sql) ;

        while($row=$result->fetch_assoc())
        {
               $var3= $row["LOAN_NUMBER"] ;
        }
      $var9 = mysqli_real_escape_string($conn,$var3);

  $sql1 ="SELECT AMOUNT  FROM LOAN WHERE LOAN_NUMBER='".$var3."' " ;
   $result1=$conn->query($sql1) ;
     echo "<br><br> " ;
        while($row1=$result1->fetch_assoc())
        {
               
              
                  

		 $var4= $row1["AMOUNT"] ;
 
		
               
               
        }
    
      if($var4==$var2)
      {
         $sql2 ="DELETE  FROM LOAN  WHERE LOAN_NUMBER='".$var3."' " ;
         $result2=$conn->query($sql2) ;
 
     
      }
     else
    {
        $var5=$var4-$var2 ;
 	 $sql4 ="UPDATE LOAN  SET AMOUNT='".$var5."'  WHERE LOAN_NUMBER='".$var3."' " ;
       $result4=$conn->query($sql4) ;

	}

      echo "Success" ;
      
  $conn->close() ;
 ?>




