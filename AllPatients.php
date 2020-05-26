<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>My Patients</title>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


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
						<li><a href="index.php"><i  aria-hidden="true"><img src="images/out-sign.png"></i></a></li>
					</ul>
				</div>
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>
		</div>
	</header>

	</div>
<div class ="container">	
	<br><br><br><br><br><hr>
	<input class="form-control" id="myInput" type="text" placeholder="Search.."><br>
	<h4 style="text-align:center;"> My Patients List:</h4>
	<table class="table table-striped" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">Name
      </th>
      <th class="th-sm">File Number
      </th>
      <th class="th-sm">Age
      </th>
	  <th class="th-sm">Gender
      </th>
	  <th class="th-sm">City 
      </th>
      <!-- <th class="th-sm">Phone Number
      </th>		-->
      <th class="th-sm">Medical File
      </th>
    </tr>
  </thead>
  <tbody id="myTable">
  <?php
  $conn = new mysqli("localhost", "root","","hospital");
//  session_start();
  $id = $_SESSION['UserName'];
  $query = "SELECT p.PName, p.File_Num, p.Age, p.Sex, p.City FROM patient_doctor AS pd,patient AS p WHERE p.File_Num = pd.File_Num AND pd.UserName='$id'";
  $result = mysqli_query($conn,$query);
  if(!$result){
	  printf("ERROR:%s\n",mysqli_error($conn));
  exit();}
  
  while($row = mysqli_fetch_array($result)){
	  
	echo '<tr ><td scope="col">'."   ".$row["PName"].'</td>';
	echo '<td scope="col">'."   ".$row["File_Num"].'</td>';
	echo '<td scope="col">'."   ".$row["Age"].'</td>';
	echo '<td scope="col">'."   ".$row["Sex"].'</td>';
	echo '<td scope="col">'."   ".$row["City"].'</td>';
	// echo '<td scope="col">'."   ".$row["Phone_#"].'</td></tr>';
	echo'<td><a href="MedcFile.php"><i class="fa fa-file-text-o" aria-hidden="true"></i></td></tr>';
	}

      // echo'<tr><td>'.$rows["PName"].'</td>';
      // echo'<td>'.$row["File_Num"].'</td>';
	  // echo'<td>'.$row["Age"].'</td>';
	  // echo'<td>'.$row["Sex"].'</td>';
      // echo'<td>'.$row["City"].'</td>';
	  // echo'<td>'.$rows["Phone_#"].'</td>';
	  // echo'<td><a href="MedcFile.php"><i class="fa fa-file-text-o" aria-hidden="true"></i></td></tr>';}

	?>
<!--
    <tr>
      <td>Sara</td>
      <td>3141</td>
      <td>36</td>
      <td>0550657788</td>
      <td>2018/07/25</td>
      <td><a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
    </tr>
    <tr>
      <td>Mohammed</td>
      <td>1090</td>
      <td>14</td>
      <td>0552211199</td>
      <td>2019/01/12</td>
      <td><a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
    </tr>
    <tr>
      <td>Nora</td>
      <td>1567</td>
      <td>56</td>
      <td>0505123765</td>
      <td>2018/12/29</td>
      <td><a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
    </tr>
	-->
  </tbody>
  <tfoot>
    <tr>
      <th>Name
      </th>
      <th>File Number
      </th>
      <th>Age
      </th>
     <!-- <th>Phone Number
      </th>		-->
      <th>City
      </th>
	  <th>Gender
      </th>
      <th>Medical File
      </th>
    </tr>
  </tfoot>
</table>
</div>
<script>   <!-- JQ for search-->
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
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
