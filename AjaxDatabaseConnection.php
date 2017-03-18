 <?php
require("Database_init.php");
$Name;
$sql;
session_start();
$Name=session_id();

$sql=" select * from $tbl_name order by (case  session when '$Name' then 0 else 1 end), nick";
if ($Name!="")
{

$sql=" select * from $tbl_name order by (case  session when '$Name' then 0 else 1 end), nick";


}

else
{
$sql="select  * from $tbl_name";
}


if ($result=mysqli_query($con,$sql))
  {
  while ($row=mysqli_fetch_row($result))
    {
		//print_r($row);
		
		echo '<tr>
		<td id="small"><img title="Online" style="margin-bottom: 0px; margin-left: 0px; margin-right: 0px; margin-upper: 0px;" src="Images/online.gif"></td>
        <td><b>'.$row[2].'</b></td>
        <td><b>'.$row[4].'</b></td>';

		
		
		if ($row[3]=='Male')
		{
			echo '<td id="small"><img data-toggle="tooltip" title="Male"style="margin-bottom: 0px; margin-left: 0px; margin-right: 0px; margin-upper: 0px;" src="Images/male.png"></td>';
		}
		else
		{
			echo '<td id="small"><img title="Female" style="margin-bottom: 0px; margin-left: 0px; margin-right: 0px; margin-upper: 0px;" src="Images/fem.png"></td>';
		}
		
		echo '<td><b>'.$row[5].'</b></td>';
       
		if ($row[6]=='Beginner')
		{
			echo '<td id="small"><img title="Beginner" style="margin-bottom: 0px; margin-left: 0px; margin-right: 0px; margin-upper: 0px;" src="Images/1.gif"></td>';
		}
		else if ($row[6]=='Intermediate')
		{
			echo '<td id="small"><img  title="'.$row[6].'" style="margin-bottom: 0px; margin-left: 0px; margin-right: 0px; margin-upper: 0px;" src="Images/2.gif"></td>';
		}
		
		else if ($row[6]=='Upper Intermediate')
		{
			echo '<td id="small"><img title="Upper Intermediate" style="margin-bottom: 0px; margin-left: 0px; margin-right: 0px; margin-upper: 0px;" src="Images/3.gif"></td>';
		}
		
		else if ($row[6]=='Advance')
		{
			echo '<td id="small"><img title="Advance" style="margin-bottom: 0px; margin-left: 0px; margin-right: 0px; margin-upper: 0px;" src="Images/4.gif"></td>';
		}
		
		
		    $flagName=$row[7];
			echo'<td id="small"><img title="'.$flagName.'"style="margin-bottom: 0px; margin-left: 0px; margin-right: 0px; margin-upper: 0px;" src="Images/flags/'.$flagName.'.png"></td>';

		
		if ($row[9]=='' ||$row[9]==' '||$row[9]=='  '||$row[9]==null ||strlen($row[9])<3 )
		{
			echo '<td id="small" >-</td>';
		}
		else
		{
			echo'
		<td id="small" ><a href="ymsgr:sendim?'.$row[9].'"><img  title="'.$row[9].'" style="margin-bottom: 0px; margin-left: 0px; margin-right: 0px; margin-upper: 0px;" src="Images/yahoo.png" ></a></td>';
		}
		
		if ($row[8]=='')
		{
			echo '<td id="small" >-</td>';
		}
		else
		{
		echo'
		<td id="small" ><a href="skype:'.$row[8].'?chat"><img title="'.$row[8].'" style="margin-bottom: 0px; margin-left: 0px; margin-right: 0px; margin-upper: 0px;" src="Images/skype.png" ></a></td>';
		}
		
		echo '</tr>';
	
		
		
		
    }
  mysqli_free_result($result);
}

mysqli_close($con);








?> 					