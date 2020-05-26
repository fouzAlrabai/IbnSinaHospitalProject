<!DOCTYPE html>
<html lang="en">
<head>
<title>patient</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Dr PRO template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/image-comparison-slider-master/style.css">
<link rel="stylesheet" type="text/css" href="styles/services.css">
<link rel="stylesheet" type="text/css" href="styles/services_responsive.css">
    
    
</head>
<body>

<div class="super_container">
	
	<!-- Header -->
<!-- Header -->


<div class="super_container">
<header class="header trans_400">
		<div class="header_content d-flex flex-row align-items-center jusity-content-start trans_400">

			<!-- Logo -->
			<div> <img src ="medicine (3).png" alt ="logo" height="70" width="70"> &nbsp; &nbsp; </div> 
			<div class="logo">
				<a href="#">
					<div> Ibn Sina <span> Hospital</span></div>
					<div></div>
				</a>
			</div> 
			
			<div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">	
				<!-- Header Social -->
				<div class="social header_social">
					<ul class="d-flex flex-row align-items-center justify-content-start">
						<li><a href="PatientPage.php"><i class="fa fa-home" aria-hidden="true"></i></a></li>
						<li><a href="logoutP.php"><i  aria-hidden="true"><img src="images/out-sign.png"></i></a></li>
					</ul>
				</div>
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>
		</div>
	</header>
	
	<br><br><br><br><br><hr>

	<div class="menu_overlay trans_400"></div>
	<div class="menu trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<nav class="menu_nav">
			<ul>
				<li><a href="index.html">Home</a></li><br>
				<li><a href="Login.html">Sign-in</a></li><br>
				<li><a href="about.html">Log-in</a></li><br>
				<li><a href="contact.html">Contact</a></li><br>
				<li><img src ="images/medicine%20(3).png" alt ="logo" height="70" width="70"></li>
			</ul>
		</nav>
		<div class="social menu_social">
			<ul class="d-flex flex-row align-items-center justify-content-start">
						<li><a href="PatientPage.php"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i  aria-hidden="true"><img src="images/out-sign.png"></i></a></li>
			</ul>
		</div>
	</div>
	

	<!-- Menu -->

	<div class="menu_overlay trans_400"></div>
	<div class="menu trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<nav class="menu_nav">
			<ul>
				<li><a href="index.html">Home</a></li><br>
				<li><a href="Login.html">Sign-in</a></li><br>
				<li><a href="about.html">Log-in</a></li><br>
				<li><a href="contact.html">Contact</a></li><br>
				<li><img src ="images/medicine%20(3).png" alt ="logo" height="70" width="70"></li>
			</ul>
		</nav>
		
		<div class="social menu_social">
			<ul class="d-flex flex-row align-items-center justify-content-start">
						<li><a href="PatientPage.php"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i  aria-hidden="true"><img src="images/out-sign.png"></i></a></li>
			</ul>
		</div>
	</div>

<br><br><br><br><br><br><br><br><br><br><br><br>

<div style="margin: 1px 300px 13px 300px; border: solid lightgrey ; padding:1em;">
<?php

$mysqli = new mysqli("localhost","root","","hospital");
      //Verbindung überprüfen
      if ($mysqli -> connect_errno)
      {
        printf("Verbindung fehlgeschlagen: %s\n", $mysqli->connect_error);
        exit();
      }

//$selected_val =  mysqli_real_escape_string($mysqli,);

$q1 ="SELECT DName FROM doctor WHERE CName ='".$_POST['cname']."' ";
//WHERE CName=";
//$sql = $q1.$selected_val;
$result= mysqli_query($mysqli,$q1);



echo "<ul><li><h6 > Our Doctors' names in the selected clinic  '".$_POST['cname']."' <h6></li>";
  echo"<br><br>";
//$rows = mysqli_fetch_assoc($result)
while ($rows = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
echo "<li> ";echo "DR."; echo $rows["DName"]; echo "</li>";

}
echo "</ul>";
echo"<br><br>";
?>             
</div>