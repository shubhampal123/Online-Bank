
<!DOCTYPE html>
<head>
<title>SP BANK</title>
</head>
<h1>SP BANK </h1>
<body>
<br>
<!--
<br>
<div>SIGN  UP</div>

<form action="signup.php" method="POST">
<input>
<button>Submit</button>
</form>
-->

<br>

<form action="adminlogin.php" method="POST">
<div>Admin Login</div>
id :<input type="text" 
 name="name">
<br><br>
password :<input type="password"
   name="password">
<br>
<br><br>
<button>Submit</button>
</form>


<br>

<br>
<div>Customer Login</div>
<form action="customerlogin.php" method="POST">
id :<input type="text" 
 name="name">
<br><br>
password :<input type="password"
   name="password">
<br><br>
<button>Submit</button>
</form>

<br>
<br>
<div>Employee Login</div>

<form action="employeelogin.php" method="POST">
id :<input type="text"
  name="name">
<br>
<br>
password :<input type="password"
name="password">
<br><br>
<button>Submit</button>
</form>

<?php

       $connection=mysqli_connect("localhost","root","root","bank")or die("FUCK u".mysqli_connect_error()) ;
       if($connection){
       	
         

}
     mysql_close($connection) ;
?>

</body>

