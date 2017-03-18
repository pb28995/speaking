<?php
$mysql_host = "localhost";
$mysql_database = "mysql";
$mysql_user = "root";
$mysql_password = "";
$tbl_name="user_online";


$con=mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_database);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_select_db($con,$mysql_database);


//mysqli_connect($mysql_host , $mysql_user, $mysql_password)or die("cannot connect to server");
//mysqli_select_db($mysql_database)or die("cannot select DB");

?>