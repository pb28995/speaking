 <?php 
    require("Database_init.php");
	session_start();
	
	$time=time();
	$nick=$_POST['nick'];
	$gander=$_POST['gander'];
	$age=$_POST['age'];
	$lang=$_POST['lang'];
	$level=$_POST['level'];
	$country=$_POST['country'];
	$skype=$_POST['skype'];
	$yahoo=$_POST['yahoo']; 
	$session=$_POST['session'];
	
	
	
 
if ($nick!="")
{


$sql3="SELECT * FROM  All_USERS  WHERE skype='$skype' ";
$result3=mysqli_query($con,$sql3);
$count=mysqli_num_rows($result3);

if ($count==0)
{

function get_client_ip() {
    $ipaddress = '';
    if ($_SERVER['HTTP_CLIENT_IP'])
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if($_SERVER['HTTP_X_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if($_SERVER['HTTP_X_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if($_SERVER['HTTP_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if($_SERVER['HTTP_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if($_SERVER['REMOTE_ADDR'])
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
$data=get_client_ip();
$sql1="INSERT INTO All_USERS (session, time,nick,gander,age,lang,level,country,skype,yahoo)
			VALUES('$data','$time','$nick','$gander','$age','$lang','$level','$country','$skype','$yahoo')";
	$result1=mysqli_query($con,$sql1); 




}

$sql="SELECT * FROM $tbl_name WHERE session='$session'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);

if ($count==0)
{

	$sql1="INSERT INTO $tbl_name(session, time,nick,gander,age,lang,level,country,skype,yahoo)
			VALUES('$session','$time','$nick','$gander','$age','$lang','$level','$country','$skype','$yahoo')";
	$result1=mysqli_query($con,$sql1); 
}
else
{
	$sql2="UPDATE $tbl_name 
					SET time='$time' 
					WHERE session = '$session'";

$result2=mysqli_query($con,$sql2);

}
 
mysqli_close($con);

}
 
 
 
 
 
 ?>