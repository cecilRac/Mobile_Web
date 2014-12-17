<?php 

$con=mysql_connect('localhost','csashesi_ca15','db!4ba4cb');

mysql_select_db("csashesi_cecil-arthur");

/*
$con=mysql_connect("localhost", "csashesi_ca15", "db!4ba4cb");
mysql_select_db("csashesi_cecil-arthur",$con);
*/
 
 $name = $_REQUEST["name"];
 $email    = $_REQUEST["email"];
 $phone= $_REQUEST["number"];
 $org = $_REQUEST["organization"];
 //$goal=  $_REQUEST["goal"];

  mysql_query( "INSERT INTO checkin (name,email,phone,organization)
VALUES ( '{$name}','{$email}','{$phone}','{$org}' ) " );

  header( 'Location: index.html' ) ;

$tel = substr($phone, 1);
$url = "https://api.smsgh.com/v3/messages/send?"
    . "From=iWuzHierSome"
    . "&To=%2B233$tel"
    . "&Content=Hello+your+sign+up+was+Successful"
    . "&ClientId=odfbifrp"
    . "&ClientSecret=rktegnml"
    . "&RegisteredDelivery=true";
 // Fire the request and wait for the response
 $response = file_get_contents($url) ;
 
 var_dump($response);



 mysql_close($con);
  ?>