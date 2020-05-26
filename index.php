<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title> Hospital </title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link href="plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<script src="http://googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/A36D6CC4-55D1-AF4A-815F-719928F53979/main.js" charset="UTF-8"></script><style type="text/css">
* {box-sizing: border-box;}

/* Style the navbar */
.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

/* Navbar links */
.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Navbar links on mouse-over */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Active/current link */
.topnav a.active {
  background-color: #2196F3;
  color: white;
}

/* Style the input container */
.topnav .login-container {
  float: right;
}

/* Style the input field inside the navbar */
.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  width: 150px; /* adjust as needed (as long as it doesn't break the topnav) */
}

/* Style the button inside the input container */
.topnav .login-container button {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .login-container button:hover {
  background: #ccc;
}

/* Add responsiveness - On small screens, display the navbar vertically instead of horizontally */
@media screen and (max-width: 600px) {
  .topnav .login-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .login-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc; 
  }
}



</style>
</head>
<body>
<script>

$(document).ready(function() {
//--------------------------------------------
$("#patient").prop("checked", true) {
   $("#myForm").attr("action", "loginP.php");
});
//---------------------------------------------
$("#Doctor").click(function() {
    $("#myForm").attr("action", "loginD.php");
});
//---------------------------------------------
$("#admin").click(function() {
	$("#myForm").attr("action", "loginA.php");
});
    
});
    

    
    
    
</script>
<div class="super_container">
	
	<!-- Header -->

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
			<!-- Main Navigation -->
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					 <div class="login-container">
                         <form action="loginP.php" method="post" id="myForm"> <!-- PHP code page -->
                             <input type="radio" name="user" value="doctor" id="Doctor"  > doctor 
                             <input id="patient" type="radio" name="user" value="patient" > patient   
                            <br> 
                             <input type="text" placeholder="Username" name="username"  >
                             <input type="password" placeholder="Password" name="psw">
                             <input type="submit" name="submit" style="font-family: Montserrat, sans-serif; padding: 1em; border-radius: 0.5em; background: #57ccc3;font-weight: bold;" value="sign-in">
                         </form>
                      </div>
				</ul>
			</nav>
			<div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">	
				<!-- Header Social -->
				<div class="social header_social">
					<ul class="d-flex flex-row align-items-center justify-content-start">
						<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu_overlay trans_400"></div>
	<div class="menu trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<nav class="menu_nav">
			<ul>
				<li><a href="index.html">Home</a></li><br>
				<li><a href="Login.html">Sign-in</a></li><br>
				<li><a href="about.html">Log-in</a></li><br>
				<li><a href="">Contact</a></li><br>
				<li><img src ="medicine (3).png" alt ="logo" height="70" width="70"></li>
			</ul>
		</nav>
		<div class="social menu_social">
			<ul class="d-flex flex-row align-items-center justify-content-start">
						<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
	<!-- Home -->

	<div class="home">

		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(laboratory.jpg); opacity: 0.4; filter: alpha(opacity=50);"></div>
					<div class="home_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content">
										<div class="home_subtitle">The Best Laboratory in town</div>
										<div class="home_title">Accurate Results</div>
										<div class="home_text" style ="background-color: white;opacity: 0.6;">
											<p style="color:black">The laboratory is considered a teaching laboratory.
                                               A huge number of King Saud University & other Universities undergraduate and graduate students
                                               work in the lab.  
                                               It is possible for students from other institutions to conduct dating research in the laboratory,
                                               although funding must be provided by the student.
                                               Our labs are provided with the best and current Technology in the world!
                                               no need to worry about inaccurate test Results, because we've hired the greatest laboratory staff. </p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(newborn-baby-hospital.jpg);opacity: 0.4; filter: alpha(opacity=50);"></div>
					<div class="home_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content">
										<div class="home_subtitle">100 Newborns everyday! </div>
										<div class="home_title">Safe Delivery</div>
										<div class="home_text" style ="background-color: white;opacity: 0.6;">
											<p style ="color:black">In the Ibn Sina hospital, a routine evaluation called the Apgar test is used 
											to identify whether a baby needs urgent medical care. 
											The test scores on five areas, including breathing rate and skin coloration.
											Newborns also receive a vitamin K shot and eye drops..
											During an Apgar test, your baby's heart rate, breathing, reflex response, muscle tone, and skin coloration are measured. 
											These five signs are evaluated at one minute after birth and at five minutes after birth. 
											Each test is given a score between zero and two, and the five scores are added together to make up the Apgar score. 
											The ability of the infant to maintain their temperature and sustain a normal heart and respiratory rate is a general indicator 
											for a successful transition.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(Eye-Doctor.jpg);opacity: 0.4; filter: alpha(opacity=50);"></div>
					<div class="home_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content">
										<div class="home_subtitle">#1 Eye Care Clinic</div>
										<div class="home_title">See Better Live Better</div>
										<div class="home_text" style ="background-color: white;opacity: 0.7;">
											<p style="color:black"> our Eye Care Clinic treats adults and children with all ophthalmic conditions, performing basic eye care and advanced eye surgery. 
											Thousands of international patients travel to receive treatment, 
											including all types of eye surgery, at the institute every year. 
											A large team of researchers is committed to making breakthroughs in retinal disease. 
											Eye surgery - ranging from cataract surgery to macular surgery - 
											is performed daily by our world-class staff</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			

			<!-- Home Slider Dots -->              
          </div>
          
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
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/jquery-datepicker/jquery-ui.js"></script>
<script src="js/custom.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>