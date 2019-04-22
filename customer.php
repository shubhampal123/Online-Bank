
<!DOCTYPE html>
<head>
</head>
<body>
<h1>WELCOME CUSTOMER!</h1>
<br>
<br>
<br>
<form
   action="accountinfo.php" method="post">
   <button>UPDATE INFO</button>
   </form>
<br>
<br>
<form action="loaninfo.php" method ="post">
    <button>LOAN INFORMAtION</button>
    </form>
     <?php
	session_start();
   	 $name=$_GET['user'] ;
	$_SESSION["NameGlobal"]=$name;
?>

  
<?php

       $connection=mysqli_connect("localhost","root","root","bank")or die("Cannot connect to the database ".mysqli_connect_error()) ;
       if($connection){
            $name=$_GET['user'] ;
            $sql="SELECT * FROM CUSTOMER WHERE CUSTOMER_ID='".$name."'" ;
            $result=$connection->query($sql) ;
            while($r=$result->fetch_assoc())
            {
               echo "id: ".$r["CUSTOMER_ID"]."|| name: ".$r["CUSTOMER_NAME"]."|| street: ".$r[CUSTOMER_STREET]."|| city: ".$r[CUSTOMER_CITY]."<br><br>" ;
           }

     mysql_close($connection) ;
}
?>

