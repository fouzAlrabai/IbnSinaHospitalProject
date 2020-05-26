
<?php
    $mysqli = new mysqli("localhost","root","","hospital");
      //Verbindung überprüfen
      if ($mysqli -> connect_errno)
      {
        printf("Verbindung fehlgeschlagen: %s\n", $mysqli->connect_error);
        exit();
      }
   session_start();
   $id=$_SESSION['File_Num'];
if(isset($_POST['submit'])){
        $sql = "INSERT INTO appointment (ADate, ATime, File_Num, DUserName, CName)
        VALUES ('".$_POST['data']."','".$_POST['time']."',".$id.",'".$_POST['doctorName']."','".$_POST['clinicName']."')";
    
   //if($_POST['submit']) {
      // username and password sent from form 
      
      //$clinicName = mysqli_real_escape_string($mysqli,$_POST['clinicName']);
      //$doctorName = mysqli_real_escape_string($mysqli,$_POST['doctorName']); 
      //$data = mysqli_real_escape_string($mysqli,$_POST['data']);
      //$time = mysqli_real_escape_string($mysqli,$_POST['time']); 

      $result = mysqli_query($mysqli,$sql);
      //$count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($result) {
         //session_register("myusername")
          echo "<script>alert('add appoingment successfully');</script>";
           header("location: PatientPage.php");
        
      }else {
         echo "<script>alert('Do not add appoingment successfully');</script>";
         // alert("add appoingment successfully");
           header("location: AppointmentForm.php");
         // alert("Do not add appoingment successfully");
         
         
      }
    }
       
?>












