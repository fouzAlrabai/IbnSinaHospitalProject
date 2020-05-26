<!DOCTYPE html>
<html lang="en">
<head>
<title>Doctors</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/about.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/A36D6CC4-55D1-AF4A-815F-719928F53979/main.js" charset="UTF-8"></script><style>
select {
   background:#57ccc3;
   font-size: 20px;
   font-color: white;
  
}
input {
padding: 7px 20px 7px 20px; 
border-radius: 0.5em; 
background: #f1f1f1;
margin: 5px 25px 5px 200px;
}
</style>
</head>
<body>

<div class="super_container">
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

	<!-- Team -->

	<div class="team" style="margin: 25px 5px 5px 375px;">
		<div class="container">
		 <div class="section_title"><h1 style="margin-bottom: 10px">Meet Our Doctors</h1></div>
			<div class="new">
		<label style="margin: 10px 25px 10px 75px; font-size:20px;"> Select Clinic to view the Doctor's names </label>	<br>
		<form action="ViewDbyClinic.php" method="post">
		<select name ="cname" style="margin: 10px 25px 7px 75px;">
		 <option value="FAMILY MEDICINE"> Family Doctors</option>
		 <option value="DENTAL"> Dentists</option>
		 <option value="OBSTETRICS AND GYNECOLOGY"> Obstetrics and Gynecology Doctors</option>
		 <option value="EMERGENCY MEDICINE"> Emergency Doctors</option>
		 <option value="OPHTHALMOLOGY"> Ophthalmology Doctors</option>
		</select>
		<br>
		<input type="submit" value="View">
        </form>       			
	</div>
</div>
        <div>
        
        
        
        
        
        </div>
</div>	
	<!-- Footer -->
	<footer class="footer">
		<div class="footer_content">
			<div class="container">
				<div class="row">

					<!-- Footer About -->
					<div class="col-lg-3 footer_col">
						<div class="footer_about">
							<div class="footer_logo">
								<a href="#">
									<div class="logo">
				<a href="#">
					<div>Ibn Sina <span>Hospital</span></div>
					<div></div>
				</a>
			</div>
								</a>
							</div>
							
						</div>
					</div>

					<!-- Footer Contact Info -->
					<div class="col-lg-4 footer_col">
						<div class="footer_contact">
							<div class="footer_title">Contact Info</div>
							<ul class="contact_list">
								<li>+53 345 7953 32453</li>
								<li>IbnSina@gmail.com</li>
								<li>CustomerServices@gmail.com</li>
							</ul>
						</div>
					</div> 
					<!-- Footer Locations -->
					<div class="col-lg-4 footer_col">
						<div class="footer_location">
							<div class="footer_title">Our Locations</div>
							<ul class="locations_list">
								<li>
									<div class="location_title">Riyadh</div>
									<div class="location_text">45 King fahad Rd,FL 931</div>
								</li>
								<li>
									<div class="location_title">Jeddah</div>
									<div class="location_text">1481 King Abdullah Beach,FL 931</div>
								</li>
							</ul>
						</div>
					</div>					
			</div>		
		</div>	
	</div>	
		<div class="footer_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="footer_bar_content  d-flex flex-md-row flex-column align-items-md-center justify-content-start">
							<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</footer>


</body>
</html>



