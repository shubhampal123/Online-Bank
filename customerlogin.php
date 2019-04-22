<?php

       $connection=mysqli_connect("localhost","root","root","bank")or die("Cannot connect to the database ".mysqli_connect_error()) ;
       if($connection){


        if(isset($_POST["name"],$_POST["password"]))
        {       

                $name=$_POST["name"] ;
                $password=$_POST["password"] ;

$r=mysqli_query($connection,"SELECT id,pass FROM CUSTOMERPASSWORD WHERE id='".$name."' AND pass ='".$password."'") ;
          $c=mysqli_fetch_array($r) ;

                if(isset($c))
                {
                    $user=$name ;
                    header("Location:customer.php?user=".$user) ;
                    exit() ;                   
                }
                else
                {
                        echo "Login Failed" ;
                }
        }
           else
                {
                        echo "Information not entered " ;
                }
   mysqli_close($connection) ;
 }
 ?>

