<?php 

require("Database_init.php");

$OtherTime=time()-5;

$sql4="DELETE FROM $tbl_name WHERE time<'$OtherTime'";


$result4=mysqli_query($con,$sql4);

mysqli_close($con); 





?>