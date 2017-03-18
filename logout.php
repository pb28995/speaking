<?php 

require("Database_init.php");

$session=$_GET['logout'];
$sql4="DELETE FROM $tbl_name WHERE session='$session'";


$result4=mysqli_query($sql4);

mysqli_close($con); 


$past = time() - 3600;
foreach ( $_COOKIE as $key => $value )
{
    setcookie( $key, $value, $past, '/' );
}





header("Location: entery.php");
?>