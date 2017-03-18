<?php

if(isset($_POST['name'])) 
{
$name=$_POST['name'];
$email=$_POST['email'];
$body=$_POST['prob'];
//mail("ali.murad1995@gmail.com","My subject","erewfewf");

}


	$nick="";
	$gander="";
	$age="";
	$lang="";
	$level="";
	$country="";
	$skype="";
	$yahoo="";

if (isset($_POST['nick']))
{
	$nick=$_POST['nick'];
	$gander=$_POST['gander'];
	$age=$_POST['age'];
	$lang=$_POST['lang'];
	$level=$_POST['level'];
	$country=$_POST['country'];
	$skype=$_POST['skype'];
	$yahoo=$_POST['yahoo'];

	setcookie("nick", $nick, time() + (86400 * 30), "/");  
	setcookie("gander", $gander, time() + (86400 * 30), "/");  
	setcookie("age", $age, time() + (86400 * 30), "/");  
	setcookie("lang", $lang, time() + (86400 * 30), "/");  
	setcookie("level", $level, time() + (86400 * 30), "/");  
	setcookie("country", $country, time() + (86400 * 30), "/");  
	setcookie("skype", $skype, time() + (86400 * 30), "/");  
	setcookie("yahoo", $yahoo, time() + (86400 * 30), "/");  
	
}
	session_start();
	$session=session_id();

	$Information=null;
	
	if (isset($_POST['nick']))
		$nick=$Information['nick']=$_POST['nick'];
	else if (isset($_COOKIE['nick']))
		$nick=$Information['nick']=$_COOKIE['nick'];
		
		
	if (isset($_POST['gander']))
		$gander=$Information['gander']=$_POST['gander'];
	else if (isset($_COOKIE['gander']))
		$gander=$Information['gander']=$_COOKIE['gander'];
		
		
	if (isset($_POST['age']))
		$age=$Information['age']=$_POST['age'];
	else if (isset($_COOKIE['age']))
		$age=$Information['age']=$_COOKIE['age'];
		
		
	if (isset($_POST['lang']))
		$lang=$Information['lang']=$_POST['lang'];
	else if (isset($_COOKIE['lang']))
		$lang=$Information['lang']=$_COOKIE['lang'];
		
		
	if (isset($_POST['level']))
		$level=$Information['level']=$_POST['level'];
	else if (isset($_COOKIE['level']))
		$level=$Information['level']=$_COOKIE['level'];
		
		
	if (isset($_POST['country']))
		$country=$Information['country']=$_POST['country'];
	else if (isset($_COOKIE['country']))
		$country=$Information['country']=$_COOKIE['country'];
		
		
	if (isset($_POST['skype']))
		$skype=$Information['skype']=$_POST['skype'];
	else if (isset($_COOKIE['skype']))
		$skype=$Information['skype']=$_COOKIE['skype'];
	
		
		
	if (isset($_POST['yahoo']))
		$yahoo=$Information['yahoo']=$_POST['yahoo'];
	else if (isset($_COOKIE['yahoo']))
		$yahoo=$Information['yahoo']=$_COOKIE['yahoo'];
		
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>SpeakingClub360 - Find a partner to practice English speaking skills online with Skype/Yahoo!</title>


<meta name="keywords" content="conversation partner learn spoken speaking club speaking24 ielts lingq conversationexchange english e-pal free lessons improve speaking online exam fce cae cpe toefl vocabulary words learning Practice Speaking Easy English Speak Fluent Study English English Language spoken english English Conversation">


<meta name="description" content="This is small effort to combine all people who wanna practice any language. Here you can find people from all over the world and experience different cultures and accents.
This community give's you a chance to share your Skype id's with other Skype user's for chat & video chat & call etc. It's really simple to use. Add unlimited id's & find friends ...">
<meta name="msvalidate.01" content="CD57B95FF84BD706A74C31AC87652685" />  
  
<link rel="shortcut icon" href="Images/favicon.ico" />
  <meta charset="utf-8">
   
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Libs/bootstrap.min.css">
   <link rel="stylesheet" href="Libs/onlinelist.css">
   <link rel="stylesheet" href="Libs/table.css">
  <script src="Libs/jquery.min.js"></script>
  <script src="Libs/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  <style>
@media only screen and (max-width: 800px) {
   
	table {
		
		display: none;
	}
}

@media only screen and (min-width: 800px) {
   
	#online1 {
		
		display: none;
	}
}
</style>
</head>
<body>
<!-- Google Tag Manager  background="Images/GHr12sH.jpg"-->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MHR9KF"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MHR9KF');</script>
<!-- End Google Tag Manager -->


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-67428385-1', 'auto');
  ga('send', 'pageview');

</script>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  <a class="navbar-brand" href="#">SpeakingClub360</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
     
      <ul class="nav navbar-nav navbar-right">
<li><a href="vocabulary.php">Vocabulary</a></li>
	    <li><a href="contact.php">Contact</a></li>
        <li><a href="about.php">About Us</a></li>
		<li><a href="logout.php?logout=<?php echo $session?> "><?php if ($Information==null){echo "Add Me in List";} else {echo "Logout";}?>
		
		&nbsp&nbsp&nbsp </a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

      
  


<div class="container">
  
   <div class="row" id="pwd-container">
    <div class="col-md-1" >
				<br><br>

		
	</div>
    
    <div class="col-md-10">
      <section class="login-form">
        <form method="post" action="#" role="login">
          <img src="Images/RcmcLv4.png" class="img-responsive" alt="" />
		<h3>  <p style="text-align: center;"><b>People Online</b></span></p></h3>
        
		
<script>
DeleteInactive();
updateDB();
UpdateTable();
setInterval("updateDB()", 5000); 
setInterval("DeleteInactive()", 20000);
setInterval("UpdateTable()", 60000);

function updateDB() 
{ 
	
	$.post("UpdateUserTime.php",{
          nick: '<?php echo $nick; ?>',
          age: '<?php echo $age; ?>',
		  gander: '<?php echo $gander; ?>',
          lang: '<?php echo $lang; ?>',
		  level: '<?php echo $level; ?>',
          country: '<?php echo $country; ?>',
		  skype: '<?php echo $skype; ?>',
          yahoo: '<?php echo $yahoo; ?>',
		   session: '<?php echo $session; ?>',
		  
        });
	//	alert("Added");
}

function DeleteInactive()
{		
		$.post("DeleteInactiveUser.php");

}

function UpdateTable()
{
		

    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
            document.getElementById("online").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","AjaxDatabaseConnection.php",true);
    xmlhttp.send();
    
}


</script>

<table class="table table-striped" overflow: auto>
    <thead>
    <tr>
	   <th id="small">Status</th>
        <th>Nickname</th>
        <th>Age</th>
        <th id="small" >Sex</th>
		<th>Language</th>
        <th id="small">Level</th>
		<th id="small">Country</th>
		<th id="small">Yahoo</th>
		<th id="small">Skype</th>
		
    </tr>
    </thead>
	
    <tbody id="online" >
	<tr style="background-color: #f2f2f2;">

   <td style=" width: 40%;">
  		 <br><br><br><br><br><br><br><br><br>

   </td >
   <td style=" width: 60%;">
   		 <br><br><br><br><br>

   <style>

</style>

   </td>
   
   <td style=" width: 01%;">
   
   </td >
   
   </tr>
		  

    </tbody>
	 <div id="online1" >
	 <p >Please Expand screen and if you're using Mobile phone, make it portait to see online people...</p>
	 </div>
</table>


          
        </form>
        <div class="form-links">
          <a href="#"><?php     require("Database_init.php");
$sql="SELECT * FROM $tbl_name WHERE session='$session'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result); echo $count;?>www.SpeakingClub360.com</a>
        </div>
      </section>  
      </div>
      
      <div class="col-md-4"></div>
      

  </div>
  
      
  
  
</div>






</body>
</html>
	