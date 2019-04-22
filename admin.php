<!DOCTYPE html>
<head>
<title>admin</title>
</head>

<body>
<h1> WELCOME ADMIN! </h1>
<br>
<form
  action="insertcustomer.php" method="post">
  <button>ADD NEW CUSTOMER</button>
   </form>


<br>
<br>
<form
  action="deletecustomer.php" method="post">
  <button>DELETE CUSTOMER</button>
   </form>
<br>
<br>
<form
  action="showcustomer.php" method="post">
  <button>VIEW OLD CUSTOMER</button>
</form>
<br>
<br>

<form
  action="insertemployee.php" method="post">
  <button>ADD NEW EMPLOYEE</button>
   </form>


<br>
<br>
<form
  action="deleteemployee.php" method="post">
  <button>DELETE EMPLOYEE</button>
   </form>
<br>
<br>
<form
  action="showemployee.php" method="post">
  <button>VIEW OLD EMPLOYEE</button>

<?php

       if( $_POST['name']=="lol")
         echo "fff" ;
         
       $connection=mysqli_connect("localhost","root","root","bank")or die("Cannot connect to the  database".mysqli_connect_error()) ;
       if($connection){
        
         echo "" ; 

}
     mysql_close($connection) ;
      
?>
<?php
     
?>
</body>
