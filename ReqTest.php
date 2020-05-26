<!DOCTYPE html>
<html lang="en">
<head>
<title>Request Test</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/image-comparison-slider-master/style.css">
<link rel="stylesheet" type="text/css" href="styles/services.css">
<link rel="stylesheet" type="text/css" href="styles/services_responsive.css">

<!-- CSS -->
<style>
.myForm {
font-family: "Montserrat", sans-serif;
font-size: 0.8em;
margin: auto;
width: 45em;
padding: 1em;
border: 1px solid #ccc;
}

.myForm * {
box-sizing: border-box;
}

.myForm fieldset {
border: none;
padding: 0;
}

.myForm legend,
.myForm label {
padding: 0;
font-weight: bold;
}

.myForm label.choice {
font-size: 0.9em;
font-weight: normal;
}

.myForm label {
text-align: left;
display: block;
}

.myForm input[type="text"],
.myForm input[type="tel"],
.myForm input[type="email"],
.myForm input[type="datetime-local"],
.myForm select,
.myForm textarea {
float: right;
width: 60%;
border: 1px solid #ccc;
font-family: "Montserrat", sans-serif;
font-size: 0.9em;
padding: 0.3em;
}

<!-- .myForm textarea { -->
<!-- height: 100px; -->
<!-- } -->

.myForm input[type="radio"],
.myForm input[type="checkbox"] {
margin-left: 40%;
}

.myForm button {
font-family: "Montserrat", sans-serif;
padding: 1em;
border-radius: 0.5em;
background: #57ccc3;
border: none;
font-weight: bold;
margin-left: 20%;
margin-top: 1.8em;
}

.myForm button:hover {
background: #ccc;
cursor: pointer;
}

</style>

</head>
<body>
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
			
			<div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">	
				<!-- Header Social -->
				<div class="social header_social">
					<ul class="d-flex flex-row align-items-center justify-content-start">
						<li><a href="DoctorPage.php"><i class="fa fa-home" aria-hidden="true"></i></a></li>
				<!--	<li><a href="Profile.html"><i class="fa fa-user-circle" aria-hidden="true"></i></a></li>	-->
						<li><a href="logoutD.php"><i  aria-hidden="true"><img src="images/out-sign.png"></i></a></li>
					</ul>
				</div>
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>
		</div>
	</header>

<br><br><br><br><br><hr>


<?php
// if(isset($_POST["Submit"]))
// {
//Create connection
// $conn = mysqli_connect("localhost", "root","","hospital");
//mysqli_select_db("hospital",$conn);
 
// $query = "INSERT INTO laptest (LDate,LTime,SINSTRUCTION,Result,File_Num,DUserName)
// VALUES ('".$_POST['date']."','".$_POST['time']."','".$_POST['comments']."','".$_POST['???']."','".$_POST['fileNum']."','".$_POST['docName']."')" ;}
?>


<h4 style="text-align:center;"> Fill the Form to Request a Test:</h4>
<form class="myForm" method="post" action="TestFormInsert.php">

<!--
<p>
<label>Patient Name
<input type="text" id="patName" placeholder="Enter Patient's Name" name="Patient_name" required>
</label> 
</p>
-->

<p>
<label>File Number 
<input type="text" id="fileNum" placeholder="Enter Patient's File Number" name="File_number" required>
</label>
</p>

<p>
<label>Doctor User Name 
<input type="text" id="docName" placeholder="Enter Doctor's User Name" name="Doctor_name" required>
</label>
</p>

<label>Test Type
<input type="text" id="TestType" placeholder="Enter Test Type" name="TestType" required>
</label>
</p>

<p>
<label>Test Date
<input type="date" id="date" name="Test_date" required>
</label>
</p>

<p>
<label>Test Time
<input type="time" id="time" name="Test_time" required>
</label>
</p>
	
<!--
<p>
<label>Clinic
<select id="Clinic" name="clinic"required>
<option value="" selected="selected">Select Clinic</option>
<option value="dental" >Dental</option>
<option value="Family_medicine" >Family Medicine</option>
<option value="Ophthalmology" >Ophthalmology</option>
<option value="Emergency_Medicine" >Emergency Medicine</option>
<option value="Obstetrics_Gynecology" >Obstetrics and Gynecology</option>
</select>
</label> 
</p>
-->

<p>
<label>Special Instructions
<textarea name="comments" id ="comments"rows = "4" cols = "80" ></textarea>
</label>
</p>

<!--
<input type = "submit" class= "btn-primary" value = "Submit"> 
<input type = "reset" class= "btn-primary" value = "Clear"> 
-->
<br><br><br><br><br>

<button type= "submit" class= "btn-primary" name="submit">Submit</button>
<button type= "reset" class= "btn-primary">Clear</button>

</form>
<br>

</<!-- Footer -->
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
<script src="plugins/image-comparison-slider-master/main.js"></script>
<script src="js/services.js"></script>

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