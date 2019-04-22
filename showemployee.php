<?php 
  $conn =new mysqli("localhost","root","root","bank") ;
  if($conn->connect_error)
  {
        die("Cannot connect to the database ".$conn->connect_error) ;
  }
  $sql ="SELECT EMPLOYEE_ID,EMPLOYEE_NAME  FROM EMPLOYEE " ;
  $result=$conn->query($sql) ;
  if($result->num_rows>0)
  {

        while($row=$result->fetch_assoc())
        {
                echo "id:    ".$row["EMPLOYEE_ID"]."   - name:    ".$row["EMPLOYEE_NAME"]."<br><br>" ;
        }

  }
  else
  {
        echo "0 results" ;
  }
  $conn->close() ;
 ?>



