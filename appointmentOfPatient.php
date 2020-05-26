<?php


session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Appointment</title>
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

<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #CEF6EC;}
     
button {
font-family: "Montserrat", sans-serif;
padding: 5px 10px;
border-radius: 0.5em;
background: #57ccc3;
border: none;
font-weight: bold;
font-size :12px;

}

button:hover {
background: #ccc;
cursor: pointer;
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
    
    <br><br><br><br><br><br>
	<?php
$mysqli = new mysqli("localhost","root","","hospital");
      //Verbindung überprüfen
      if ($mysqli -> connect_errno)
      {
        printf("Verbindung fehlgeschlagen: %s\n", $mysqli->connect_error);
        exit();
      }
$id=$_SESSION['File_Num'];
$query="SELECT d.DName, a.CName, a.ADate, a.ATime, a.IdAppointment FROM appointment AS a, doctor AS d WHERE a.File_Num =".$id." AND a.DUserName = d.UserName ORDER BY ADate, ATime ASC";
$result=mysqli_query($mysqli,$query);

    ?>
    
    <div class="container">
        
        <?php
       
if(isset($_POST['Delete'])){
    
    $key=$_POST['ID'];
    $_SESSION["appointmentID"]=$key;
    //$q1 ="SELECT * FROM appointment WHERE IdAppointment =".$_POST['ID']."";
    $q1 ="SELECT * FROM appointment WHERE IdAppointment = $key";
    $check=mysqli_query($mysqli,$q1) or die("not found".mysqli_error());
    if(mysqli_num_rows($check)>0){
        $q2 ="DELETE FROM appointment WHERE IdAppointment =$key";
         $check2=mysqli_query($mysqli,$q2) or die("not deleted".mysqli_error());?>
        
        <div class="alert alert-success">
        <p>Record deleted!!</p>
        </div>   

   <?php
   header("location: appointmentOfPatient.php");
    }else{ ?>
    
     <div class="alert alert-warning">
        <p>Record does not exist!!</p>
        </div>   
   <?php 
      
      } 
}
        
        
if(isset($_POST['Edit'])){
    $key=$_POST['ID'];
    $_SESSION["appointmentID"]=$key;
   header("location: appointmentFormUp.php");
    }else{
      } 
        



?>
        
        <table class="table table-condensed table-bordered">
        <thead>
        <tr>
       <th>Doctor </th>
       <th>Clinic </th>
       <th>Date </th>
       <th>Time </th>
       <th>Appointment ID </th>
       <th>UPDATE </th>
        <th>DELET </th>
       </tr>
       </thead>
          <tbody>
        <?php
        $sr=1;    
       while ( $row = mysqli_fetch_array($result)){?>
    <tr>
        <form action="" method="post" role="form">
            <td><?php echo $row["DName"];?> </td>
            <td><?php echo $row["CName"];?> </td>
            <td><?php echo $row["ADate"];?> </td>
            <td><?php echo $row["ATime"];?> </td>
            <td>
            
            <input type="checkbox" name="ID" value=" <?php echo $row["IdAppointment"];?>" required>
            </td>
            <td><button type="submit" class="btn btn-primary btn-block" style="background:#008CBA" name="Edit" >Edit</button></td>
            <td><button type="submit" class="btn btn-primary btn-block" style="background:#f44336" name="Delete" >Delete</button></td>
         </form>  
    </tr> <?php $sr++;  }?>
        </tbody>
        </table>
        
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