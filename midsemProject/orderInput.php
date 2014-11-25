
<HTML>

	<head> </head>

	<body>

<?php
/*
$con=mysql_connect('localhost','root','');
mysql_select_db("mobileweb",$con);
*/

$con=mysql_connect("localhost", "csashesi_ca15", "db!4ba4cb");
mysql_select_db("csashesi_cecil-arthur",$con);

 
 $meal = $_POST["mealName"];
 $cid       = $_POST["consumerId"];
 $name= $_POST["consumerName"];
$comment = $_POST["comment"] ;
//$time=  $_POST["TIme"];


mysql_query( "INSERT INTO orderMeal (meal,cid,name,comment)
VALUES ('{$meal}','{$cid}' ,'{$name}','{$comment}') " );

mysql_close($con);


?>

<a href="midIndex.html"> Go back to home page </a>
</body>



</HTML>