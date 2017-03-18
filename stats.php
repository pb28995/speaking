<!DOCTYPE html>
<html>
<body>

<?php


require("Database_init.php");

if (isset($_GET['del']))
{
$d=$_GET['del'];


$sql4="DELETE FROM All_USERS WHERE skype='$d'";


$result4=mysql_query($sql4);
}

$sql="select  * from All_USERS";
echo '<pre>';
if ($result=mysql_query($sql))
  {
 $count=0;
  while ($row=mysql_fetch_row($result))
    {
echo $count.'&nbsp&nbsp&nbsp';
     print_r($row);
    echo '<br>';
$count=$count+1;
    }


}

echo '</pre>';
mysqli_close($conn);
?>  

</body>
</html>			