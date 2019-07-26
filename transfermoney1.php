<?php 
  $conn =new mysqli("localhost","root","root","bank") ;
  if($conn->connect_error)
  {
        die("Error ".$conn->connect_error) ;
  }
     $var1 = mysqli_real_escape_string($conn,$_POST['id']);
    $var2 = mysqli_real_escape_string($conn,$_POST['amount']);
    
     
  
  $sql ="SELECT BALANCE FROM _ACCOUNT WHERE ACCOUNT_ID='".$var1."' " ;
  $result=$conn->query($sql) ;
  $flag="--->Trasfer failed" ;
  
        while($row=$result->fetch_assoc())
        {
        session_start();
        

         $name=$_SESSION["NameGlobal"] ;
     $var11 =mysqli_real_escape_string($conn,$name) ;
     
  $sql1 ="SELECT BALANCE FROM _ACCOUNT WHERE ACCOUNT_ID='".$var11."' " ;
   $result1=$conn->query($sql1) ;
     echo "<br><br> " ;
        if($row1=$result1->fetch_assoc())
        {
               
              
                  

		 $var4= $row1["BALANCE"] ;
 
		
               
               
        }
    
      if($var4<$var2)
      {
         echo "Insufficient balnce" ;
          //echo $var4 ;
          //echo "string";
     
      }
     else
    {
        $var5=$var4-$var2 ;
 	 $sql4 ="UPDATE _ACCOUNT  SET BALANCE='".$var5."'  WHERE ACCOUNT_ID='".$var11."' " ;
       $result4=$conn->query($sql4) ;

         $var55=$var4+$var2 ;
   $sql44 ="UPDATE _ACCOUNT  SET BALANCE='".$var55."'  WHERE ACCOUNT_ID='".$var1."' " ;
       $result44=$conn->query($sql44) ;

        echo "Success" ;
        $flag="---->transfer successful";

	}

     
    }
   echo $flag ;
   /*if($flag=="0")
   {
    echo "lol"
   }*/
     
      
  $conn->close() ;
 ?>
    




