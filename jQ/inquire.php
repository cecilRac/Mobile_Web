<?php
/*
$con=mysql_connect('localhost','root','');
mysql_select_db("mobileweb",$con);
*/

$con=mysql_connect("localhost", "csashesi_ca15", "db!4ba4cb");
mysql_select_db("csashesi_cecil-arthur",$con);


 $name = $_POST["name"];
 $email       = $_POST["email"];
 $phone= $_POST["phone"];
$message = $_POST["message"] ;
//$time=  $_POST["TIme"];


mysql_query( "INSERT INTO contactus (name,email,phone,message)
VALUES ('{$name}','{$email}' ,'{$phone}','{$message}') " );

mysql_close($con);

 header( 'Location: index.html' ) ;


?>