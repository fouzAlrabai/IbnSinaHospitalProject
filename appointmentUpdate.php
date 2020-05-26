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
   $app=$_SESSION['appointmentID'];
if(isset($_POST['submit'])){
       
    
   /*$sql = "UPDATE appointment SET ADate='',ATime='".."',File_Num =".$id.", DUserName ='".$_POST['doctorName']."',CName='".$_POST['clinicName']."' WHERE IdAppointment=*/
    
    
    
    
    $data= $_POST['data']; 
    $time=$_POST['time'];
    $pass=$_POST['pass1'];
    $doc=$_POST['doctorName'];
    $cini=$_POST['clinicName'];

   $sql ="UPDATE appointment SET ADate='$data',ATime='$time',File_Num=$id,DUserName='$doc',CName='$cini' WHERE IdAppointment='$app' ";

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
          //secho "<script>alert('add appoingment successfully');</script>";
          header("location: appointmentOfPatient.php");
           var_dump("here ".$data);
        
      }else {
         echo "<script>alert('Do not add appoingment successfully');</script>";
         // alert("add appoingment successfully");
           header("location: PatientPage.php");
         // alert("Do not add appoingment successfully");
         var_dump("here   sd0asojdkljaslkdjklsajdkljaskljdkljas ",$data);
         
      }
    }
       
?>