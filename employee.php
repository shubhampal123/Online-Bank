<!DOCTYPE html>
<head>
</head>
<body>
<h1>WELCOME EMPLOYEE!</h1>
<br>
<br>
<form action="loanapply.php" method ="post">
    <button>GIVE LOAN TO CUSTOMER</button>
    </form>
<br><br>
<form action="loanupdate.php" method  ="post">
   <button>UPDATE LOAN</button>
<br><br>
     <?php
        session_start();
         $name=$_GET['user'] ;
        $_SESSION["NameGlobal"]=$name;
?>

  
<?php

       $connection=mysqli_connect("localhost","root","root","bank")or die("FUCK u".mysqli_connect_error()) ;
       if($connection){
            $name=$_GET['user'] ;
            $sql="SELECT * FROM EMPLOYEE WHERE EMPLOYEE_ID='".$name."'" ;
            $result=$connection->query($sql) ;
            while($r=$result->fetch_assoc())
            {
               echo "id: ".$r["EMPLOYEE_ID"]."|| name: ".$r["EMPLOYEE_NAME"]."|| street: ".$r["CUSTOMER_STREET"]."|| date: ".$r["START_DATE"]."<br><br>" ;
            }



     mysql_close($connection) ;
}
?>

