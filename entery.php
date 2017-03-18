<?php


if(isset($_POST['NNNN'])) 
{

 $NNNN=$_POST['NNNN'];
$EEEE=$_POST['EEEE'];
$DDDD=$_POST['DDDD'];



$msg ="Name :: ".$NNNN." \nEmail ::".$EEEE."\nDescription :: ".$DDDD;
mail("pb28994@live.com","Speaking360 Contact","$msg");


}

if(isset($_COOKIE['nick'])) 
{
	header("Location: onlinelist.php");
}



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
   <link rel="stylesheet" href="Libs/login.css">
  <script src="Libs/jquery.min.js"></script>
  <script src="Libs/bootstrap.min.js"></script>

  
  </head>
<body  background="Images/GHr12sH.jpg">
<!-- Google Tag Manager -->
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
	    <li><a href="index.php">List of Online Members</a></li>
<li><a href="vocabulary.php">Vocabulary</a></li>
        <li><a href="about.php">About Us</a></li>
		<li><a href="contact.php">Contact&nbsp&nbsp&nbsp</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
  
  <div class="row" id="pwd-container">
    <div class="col-md-3"></div>
    
    <div class="col-md-6">
      <section class="login-form">
        <form method="post" action="index.php" role="login" onsubmit="return toSubmit()">
          <img src="Images/RcmcLv4.png" class="img-responsive" alt="" />
          
		  <input maxlength="8" type="text" id="nick" name="nick" placeholder="Nickname"  class="form-control input-lg" />
			<select  name="gander" id ="slcts"class="form-control input-lg"  role="login" style='font-size: 18px;'>
 
			  <option >Select Gender</option>
			  <option>Male</option>
				<option>Female</option>		
				</select>
				<select  name="age" id ="slcta"class="form-control input-lg"  role="login" style='font-size: 18px; margin: 5px 0;'>
 
			  <option >Select Age</option>
			  <option>10</option>
				<option>11</option>
				<option>12</option>
				<option>13</option>
				<option>14</option>
				<option>15</option>
				<option>16</option>
				<option>17</option>
				<option>18</option>
				<option>19</option>
				<option>20</option>
				<option>21</option>
				<option>22</option>
				<option>23</option>
				<option>24</option>
				<option>25</option>
				<option>26</option>
				<option>27</option>
				<option>28</option>
				<option>29</option>
				<option>30</option>
				<option>31</option>
				<option>32</option>
				<option>33</option>
				<option>34</option>
				<option>35</option>
				<option>36</option>
				<option>37</option>
				<option>38</option>
				<option>39</option>
				<option>40</option>
				<option>41</option>
				<option>42</option>
				<option>43</option>
				<option>44</option>
				<option>45</option>
				<option>46</option>
				<option>47</option>
				<option>48</option>
				<option>49</option>
				<option>50</option>
				<option>51</option>
				<option>52</option>
				<option>53</option>
				<option>54</option>
				<option>55</option>
				<option>56</option>
				<option>57</option>
				<option>58</option>
				<option>59</option>
				<option>60</option>
				<option>61</option>
				<option>62</option>
				<option>63</option>
				<option>64</option>
				<option>65</option>
				<option>66</option>
				<option>67</option>
				<option>68</option>
				<option>69</option>
				<option>70</option>
				<option>71</option>
				<option>72</option>
				<option>73</option>
				<option>74</option>
				<option>75</option>
				<option>76</option>
				<option>77</option>
				<option>78</option>
				<option>79</option>
				<option>80</option>
				<option>81</option>
				<option>82</option>
				<option>83</option>
				<option>84</option>
				<option>85</option>
				<option>86</option>
				<option>87</option>
				<option>88</option>
				<option>89</option>
				<option>90</option>
				<option>91</option>
				<option>92</option>
				<option>93</option>
				<option>94</option>
				<option>95</option>

		</select>

		
		  <select id ="slctl" name ="lang" class="form-control input-lg"  role="login" style='font-size: 18px; margin: 5px 0;'>
			<option  >Select language to practice</option>
			 <option>Arabic</option>
				<option>Chinese</option>
				<option>Dutch</option>
				<option>English</option>
				<option>French</option>
				<option>German</option>
				<option>Hindi</option>
				<option>Indonesian</option>
				<option>Italian</option>
				<option>Japanese</option>
				<option>Persian</option>
				<option>Urdu</option>
				<option>Vietnamese</option>
		</select>
		  
		  <select  name ="level" id ="slctle"class="form-control input-lg"  role="login" style='font-size: 18px; margin: 5px 0;'>
			<option  >Select Level</option>
			  <option >Beginner</option>
			  <option>Intermediate</option>
			  <option>Upper Intermediate</option>
			  <option>Advance</option>
		</select>
		  <select name ="country" id ="slctc"class="form-control input-lg"  role="login" style='font-size: 18px;'>
 
			  <option  >Select Country</option>
﻿<option value='Afghanistan'>Afghanistan</option>
<option value='African Union'>African Union</option>
<option value='Albania'>Albania</option>
<option value='Algeria'>Algeria</option>
<option value='American Samoa'>American Samoa</option>
<option value='Andorra'>Andorra</option>
<option value='Angola'>Angola</option>
<option value='Anguilla'>Anguilla</option>
<option value='Antarctica'>Antarctica</option>
<option value='Antigua & Barbuda'>Antigua & Barbuda</option>
<option value='Arab League'>Arab League</option>
<option value='Argentina'>Argentina</option>
<option value='Armenia'>Armenia</option>
<option value='Aruba'>Aruba</option>
<option value='ASEAN'>ASEAN</option>
<option value='Australia'>Australia</option>
<option value='Austria'>Austria</option>
<option value='Azerbaijan'>Azerbaijan</option>
<option value='Bahamas'>Bahamas</option>
<option value='Bahrain'>Bahrain</option>
<option value='Bangladesh'>Bangladesh</option>
<option value='Barbados'>Barbados</option>
<option value='Belarus'>Belarus</option>
<option value='Belgium'>Belgium</option>
<option value='Belize'>Belize</option>
<option value='Benin'>Benin</option>
<option value='Bermuda'>Bermuda</option>
<option value='Bhutan'>Bhutan</option>
<option value='Bolivia'>Bolivia</option>
<option value='Bosnia & Herzegovina'>Bosnia & Herzegovina</option>
<option value='Botswana'>Botswana</option>
<option value='Brazil'>Brazil</option>
<option value='Brunei'>Brunei</option>
<option value='Bulgaria'>Bulgaria</option>
<option value='Burkina Faso'>Burkina Faso</option>
<option value='Burundi'>Burundi</option>
<option value='Cambodja'>Cambodja</option>
<option value='Cameroon'>Cameroon</option>
<option value='Canada'>Canada</option>
<option value='Cape Verde'>Cape Verde</option>
<option value='CARICOM'>CARICOM</option>
<option value='Cayman Islands'>Cayman Islands</option>
<option value='Central African Republic'>Central African Republic</option>
<option value='Chad'>Chad</option>
<option value='Chile'>Chile</option>
<option value='China'>China</option>
<option value='CIS'>CIS</option>
<option value='Colombia'>Colombia</option>
<option value='Commonwealth'>Commonwealth</option>
<option value='Comoros'>Comoros</option>
<option value='Congo-Brazzaville'>Congo-Brazzaville</option>
<option value='Congo-Kinshasa(Zaire)'>Congo-Kinshasa(Zaire)</option>
<option value='Cook Islands'>Cook Islands</option>
<option value='Costa Rica'>Costa Rica</option>
<option value='Cote d'Ivoire'>Cote d'Ivoire</option>
<option value='Croatia'>Croatia</option>
<option value='Cuba'>Cuba</option>
<option value='Cyprus'>Cyprus</option>
<option value='Czech Republic'>Czech Republic</option>
<option value='Denmark'>Denmark</option>
<option value='Djibouti'>Djibouti</option>
<option value='Dominica'>Dominica</option>
<option value='Dominican Republic'>Dominican Republic</option>
<option value='Ecuador'>Ecuador</option>
<option value='Egypt'>Egypt</option>
<option value='El Salvador'>El Salvador</option>
<option value='England'>England</option>
<option value='Equatorial Guinea'>Equatorial Guinea</option>
<option value='Eritrea'>Eritrea</option>
<option value='Estonia'>Estonia</option>
<option value='Ethiopia'>Ethiopia</option>
<option value='European Union'>European Union</option>
<option value='Faroes'>Faroes</option>
<option value='Fiji'>Fiji</option>
<option value='Finland'>Finland</option>
<option value='France'>France</option>
<option value='Gabon'>Gabon</option>
<option value='Gambia'>Gambia</option>
<option value='Georgia'>Georgia</option>
<option value='Germany'>Germany</option>
<option value='Ghana'>Ghana</option>
<option value='Gibraltar'>Gibraltar</option>
<option value='Greece'>Greece</option>
<option value='Greenland'>Greenland</option>
<option value='Grenada'>Grenada</option>
<option value='Guadeloupe'>Guadeloupe</option>
<option value='Guademala'>Guademala</option>
<option value='Guam'>Guam</option>
<option value='Guernsey'>Guernsey</option>
<option value='Guinea-Bissau'>Guinea-Bissau</option>
<option value='Guinea'>Guinea</option>
<option value='Guyana'>Guyana</option>
<option value='Haiti'>Haiti</option>
<option value='Honduras'>Honduras</option>
<option value='Hong Kong'>Hong Kong</option>
<option value='Hungary'>Hungary</option>
<option value='Iceland'>Iceland</option>
<option value='India'>India</option>
<option value='Indonesia'>Indonesia</option>
<option value='Iran'>Iran</option>
<option value='Iraq'>Iraq</option>
<option value='Ireland'>Ireland</option>
<option value='Islamic Conference'>Islamic Conference</option>
<option value='Isle of Man'>Isle of Man</option>
<option value='Israel'>Israel</option>
<option value='Italy'>Italy</option>
<option value='Jamaica'>Jamaica</option>
<option value='Japan'>Japan</option>
<option value='Jersey'>Jersey</option>
<option value='Jordan'>Jordan</option>
<option value='Kazakhstan'>Kazakhstan</option>
<option value='Kenya'>Kenya</option>
<option value='Kiribati'>Kiribati</option>
<option value='Kosovo'>Kosovo</option>
<option value='Kuwait'>Kuwait</option>
<option value='Kyrgyzstan'>Kyrgyzstan</option>
<option value='Laos'>Laos</option>
<option value='Latvia'>Latvia</option>
<option value='Lebanon'>Lebanon</option>
<option value='Lesotho'>Lesotho</option>
<option value='Liberia'>Liberia</option>
<option value='Libya'>Libya</option>
<option value='Liechtenstein'>Liechtenstein</option>
<option value='Lithuania'>Lithuania</option>
<option value='Luxembourg'>Luxembourg</option>
<option value='Macao'>Macao</option>
<option value='Macedonia'>Macedonia</option>
<option value='Madagascar'>Madagascar</option>
<option value='Malawi'>Malawi</option>
<option value='Malaysia'>Malaysia</option>
<option value='Maldives'>Maldives</option>
<option value='Mali'>Mali</option>
<option value='Malta'>Malta</option>
<option value='Marshall Islands'>Marshall Islands</option>
<option value='Martinique'>Martinique</option>
<option value='Mauritania'>Mauritania</option>
<option value='Mauritius'>Mauritius</option>
<option value='Mexico'>Mexico</option>
<option value='Micronesia'>Micronesia</option>
<option value='Moldova'>Moldova</option>
<option value='Monaco'>Monaco</option>
<option value='Mongolia'>Mongolia</option>
<option value='Montenegro'>Montenegro</option>
<option value='Montserrat'>Montserrat</option>
<option value='Morocco'>Morocco</option>
<option value='Mozambique'>Mozambique</option>
<option value='Myanmar(Burma)'>Myanmar(Burma)</option>
<option value='Namibia'>Namibia</option>
<option value='NATO'>NATO</option>
<option value='Nauru'>Nauru</option>
<option value='Nepal'>Nepal</option>
<option value='Netherlands Antilles'>Netherlands Antilles</option>
<option value='Netherlands'>Netherlands</option>
<option value='New Caledonia'>New Caledonia</option>
<option value='New Zealand'>New Zealand</option>
<option value='Nicaragua'>Nicaragua</option>
<option value='Niger'>Niger</option>
<option value='Nigeria'>Nigeria</option>
<option value='North Korea'>North Korea</option>
<option value='Northern Cyprus'>Northern Cyprus</option>
<option value='Northern Ireland'>Northern Ireland</option>
<option value='Norway'>Norway</option>
<option value='Olimpic Movement'>Olimpic Movement</option>
<option value='Oman'>Oman</option>
<option value='OPEC'>OPEC</option>
<option value='Pakistan'>Pakistan</option>
<option value='Palau'>Palau</option>
<option value='Palestine'>Palestine</option>
<option value='Panama'>Panama</option>
<option value='Papua New Guinea'>Papua New Guinea</option>
<option value='Paraguay'>Paraguay</option>
<option value='Peru'>Peru</option>
<option value='Philippines'>Philippines</option>
<option value='Poland'>Poland</option>
<option value='Portugal'>Portugal</option>
<option value='Puerto Rico'>Puerto Rico</option>
<option value='Qatar'>Qatar</option>
<option value='Red Cross'>Red Cross</option>
<option value='Reunion'>Reunion</option>
<option value='Romania'>Romania</option>
<option value='Russian Federation'>Russian Federation</option>
<option value='Rwanda'>Rwanda</option>
<option value='Saint Lucia'>Saint Lucia</option>
<option value='Samoa'>Samoa</option>
<option value='San Marino'>San Marino</option>
<option value='Sao Tome & Principe'>Sao Tome & Principe</option>
<option value='Saudi Arabia'>Saudi Arabia</option>
<option value='Scotland'>Scotland</option>
<option value='Senegal'>Senegal</option>
<option value='Serbia'>Serbia</option>
<option value='Seyshelles'>Seyshelles</option>
<option value='Sierra Leone'>Sierra Leone</option>
<option value='Singapore'>Singapore</option>
<option value='Slovakia'>Slovakia</option>
<option value='Slovenia'>Slovenia</option>
<option value='Solomon Islands'>Solomon Islands</option>
<option value='Somalia'>Somalia</option>
<option value='Somaliland'>Somaliland</option>
<option value='South Afriica'>South Afriica</option>
<option value='South Korea'>South Korea</option>
<option value='Spain'>Spain</option>
<option value='Sri Lanka'>Sri Lanka</option>
<option value='St Kitts & Nevis'>St Kitts & Nevis</option>
<option value='St Vincent & the Grenadines'>St Vincent & the Grenadines</option>
<option value='Sudan'>Sudan</option>
<option value='Suriname'>Suriname</option>
<option value='Swaziland'>Swaziland</option>
<option value='Sweden'>Sweden</option>
<option value='Switzerland'>Switzerland</option>
<option value='Syria'>Syria</option>
<option value='Tahiti(French Polinesia)'>Tahiti(French Polinesia)</option>
<option value='Taiwan'>Taiwan</option>
<option value='Tajikistan'>Tajikistan</option>
<option value='Tanzania'>Tanzania</option>
<option value='Thailand'>Thailand</option>
<option value='Timor-Leste'>Timor-Leste</option>
<option value='Togo'>Togo</option>
<option value='Tonga'>Tonga</option>
<option value='Trinidad & Tobago'>Trinidad & Tobago</option>
<option value='Tunisia'>Tunisia</option>
<option value='Turkey'>Turkey</option>
<option value='Turkmenistan'>Turkmenistan</option>
<option value='Turks and Caicos Islands'>Turks and Caicos Islands</option>
<option value='Tuvalu'>Tuvalu</option>
<option value='Uganda'>Uganda</option>
<option value='Ukraine'>Ukraine</option>
<option value='United Arab Emirates'>United Arab Emirates</option>
<option value='United Kingdom(Great Britain)'>United Kingdom(Great Britain)</option>
<option value='United Nations'>United Nations</option>
<option value='United States of America'>United States of America</option>
<option value='Uruguay'>Uruguay</option>
<option value='Uzbekistan'>Uzbekistan</option>
<option value='Vanutau'>Vanutau</option>
<option value='Vatican City'>Vatican City</option>
<option value='Venezuela'>Venezuela</option>
<option value='Viet Nam'>Viet Nam</option>
<option value='Virgin Islands British'>Virgin Islands British</option>
<option value='Virgin Islands US'>Virgin Islands US</option>
<option value='Wales'>Wales</option>
<option value='Western Sahara'>Western Sahara</option>
<option value='Yemen'>Yemen</option>
<option value='Zambia'>Zambia</option>
<option value='Zimbabwe'>Zimbabwe</option>
		</select>
		  <input type="text" name="skype" placeholder="Skype (Optional)"  class="form-control input-lg" />
          <input type="text" name="yahoo" placeholder="Yahoo (Optional)"  class="form-control input-lg" />
          

          
          
          
      <script>
   function toSubmit(){
       if(document.getElementById('nick').value=="")
	   {
		alert("Please Enter Nickname");
		return false;
	   }
	   else
	   {
		if(document.getElementById('slcts').value=="Select Gander")
	   {
		alert("Please choose Gender");
		return false;
	   }
	   
	   else
	   {
	   
	   if(document.getElementById('slcta').value=="Select Age")
	   {
		alert("Please choose Age");
		return false;
	   }
	   else
	   {
		if(document.getElementById('slctl').value=="Select language to practice")
	   {
		alert("Please choose Language");
		return false;
	   }
	   
	   else
		{
		
			if(document.getElementById('slctle').value=="Select Level")
	   {
		alert("Please choose your Level");
		return false;
	   }
	   
	   else
	   {
	   if(document.getElementById('slctc').value=="Select Country")
	   {
		alert("Please choose Country");
		return false;
	   }
	   }
		}
	   }
	   
	   }
	   
	   }
      
	  
	  
	  //return false;
   }
</script>
          <button  name="go"  class="btn btn-lg btn-primary btn-block" >Enter Without Registration</button>
        
          
        </form>
        
        <div class="form-links">
          <a href="#">www.SpeakingClub360.com</a>
        </div>
      </section>  
      </div>
      
      <div class="col-md-4"></div>
      

  </div>
  
      
  
  
</div>






</body>
</html>
		