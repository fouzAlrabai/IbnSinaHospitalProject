<?php
session_start();
$id=$_SESSION['File_Num'];
//include 'Header.php';
//include('updatePatientAccount');
//if(!empty($_GET['message'])) {
   // $message = $_GET['message'];
//echo "<h3 style='color:green;'>$message</h3>";}
?>

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

    
    <script>
// validate password
function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
} 



// validates text only
function Validate(txt) 
{
    txt.value = txt.value.replace(/[^a-zA-Z-'\n\r.]+/g, '');
}

</script>
    
</head>
<body>

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
	<!-- Services -->

 
			<div class="row">
				<div class="col text-center">
					<div class="section_title_container">
						
                          <br>
                    <br><br>
                    <br><br>
                    <br>           

					</div>
				</div>
			</div>
    
    <section class="container-fluid" class="bg">
            <section class="row justify-content-center" >
                <section class="col-12 col-sm-6 col-md-3">
 <?php 
     
/*$mysqli = new mysqli("localhost","root","","hospital");
      //Verbindung überprüfen
      if ($mysqli -> connect_errno)
      {
        printf("Verbindung fehlgeschlagen: %s\n", $mysqli->connect_error);
        exit();
      }

     $query = "SELECT * FROM patient WHERE File_Num =$id";
     

     $result = mysqli_query($mysqli,$query);
    / $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  while ($row  )
  {
   $name=$row["PName"];
   $city=$row["City"];
   $phone=$row["Phone_#"];
   $Age=$row["Age"];
   $Sex=$row["Sex"];
   $File_Num=$row["File_Num"];
   $UserName=$row["UserName"];
  $row  = mysqli_fetch_array($result,MYSQLI_ASSOC);}*/
                  
   ?> 
                    <form class="form-container" action="updatePatientAccount.php" method="post">
                       <h2> Modify Your Informaton:</h2> 
                         <div class="form-group">
                           <label for="formGroupExampleInput">Name:</label>
                          <input type="text" class="form-control" name="Name"  placeholder="Enter Your Name"  
                                 onkeyup = "Validate(this)" required>
                         </div>
                         
                        
                         <div class="form-group">
                             <label for="formGroupExampleInput2">City:</label>
                            <input type="text" class="form-control" name="City" placeholder="Enter Your City"  
                                   onkeyup = "Validate(this)" required>
                         </div>
                        
                        <div class="form-group">
                             <label for="formGroupExampleInput">Phone Number</label>
                             <input type="number" class="form-control" name="PhoneNumber" placeholder="Enter Phone Number">
                        </div>
                        
                        <fieldset disabled>
                        <div class="form-group">
                             <label for="formGroupExampleInput">Age</label>
                             <input type="number" class="form-control" id="formGroupExampleInput" placeholder=<?php echo $_SESSION['Age']; ?> > 
                        </div>
                        </fieldset>
                        
                        <fieldset disabled>
                        <div class="form-group">
                             <label for="formGroupExampleInput">Gender</label>
                             <input type="text" class="form-control" id="formGroupExampleInput" placeholder=<?php echo $_SESSION['Sex']; ?>>
                        </div>
                        </fieldset>
                        
                 <fieldset disabled>
                     <div class="form-group">
                         <label for="disabledTextInput">File Number:</label>
                         <input type="number" id="FileNumber" class="form-control" placeholder=<?php echo $_SESSION['File_Num']; ?>>
                         </div>
                 </fieldset>
                        
                        
                <fieldset disabled>
                     <div class="form-group">
                         <label for="disabledTextInput">User Name:</label>
                         <input type="text" id="UserName" class="form-control" placeholder=<?php echo $_SESSION['UserName']; ?>>
                         </div>
                 </fieldset>        
                        
                        
                    <!--<div class="form-group">  
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>-->
                        
                   <div class="form-group">
                         <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" placeholder="Password " minlength="4" maxlength="16"  name="pass1">
                   </div>
                        
                        
                   <div class="form-group">
                         <label for="exampleInputPassword1">Confirm Password:</label>
                        <input type="password" class="form-control"  placeholder="Enter again to validate" minlength="4" maxlength="16"  name="pass2" id="pass2" onkeyup="checkPass(); return false;">
                       <span id="confirmMessage" class="confirmMessage"></span>
                   </div>
                        
            <button type="submit" class="btn btn-primary btn-block" name="submit" style="background:#57ccc3 ">Update</button>
         </form>
                   <br>
                    <br> 
                    </section>
            </section>
        </section>

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

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles /bootstrap-4.1.2/bootstrap.min.js"></script>
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