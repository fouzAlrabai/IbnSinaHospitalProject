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
   //$app=_SESSION['appointmentID'];
if(isset($_POST['submit'])){
    $mum= $_POST['PhoneNumber'];  
    $name=$_POST['Name'];
    $pass=$_POST['pass1'];
    $city=$_POST['City'];
   // var_dump($name);
  //  var_dump($pass);
   // var_dump($city);
    $num=(int)$mum;
  //  var_dump($num);
     //$sql ="UPDATE patient SET PName='".$_POST['Name']."', UserName='".$_SESSION['UserName']."', Password='".$_POST['pass1']."', File_Num=".$id.", Age=".$_SESSION["Age"].", City ='".$_POST['City']."', Sex='".$_SESSION['Sex']."',Phone_# ='".$_POST['PhoneNumber']."' WHERE File_Num=".$id;
    //$sql ="UPDATE patient SET PName='".$name."', Password='".$pass."', City ='".$city."',Phone_# =".$num." WHERE File_Num=".$id;
}
   $sql ="UPDATE patient SET PName='$name',Password='$pass',City='$city',Phone= $mum WHERE File_Num='$id' ";

   
   if(isset($_POST['submit'])) {
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
          //echo "<script>alert('add appoingment successfully');</script>";
           header("location: PatientPage.php");
        
      }else {
         //echo "<script>alert('Do not add appoingment successfully');</script>";
         // alert("add appoingment successfully");
           header("location: updatePatientAccountForm.php");
         // alert("Do not add appoingment successfully");
         
      }
    }
       
?>