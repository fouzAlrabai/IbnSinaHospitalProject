<?php
    $mysqli = new mysqli("localhost","root","","hospital");
      //Verbindung überprüfen
      if ($mysqli -> connect_errno)
      {
        printf("Verbindung fehlgeschlagen: %s\n", $mysqli->connect_error);
        exit();
      }
   session_start();
   $id=$_SESSION['UserName'];
if(isset($_POST['submit'])){
        $sql = "INSERT INTO laptest (LDate, LTime, SINSTRUCTION, File_Num, DUserName, Test_Type)
        VALUES ('".$_POST['Test_date']."','".$_POST['Test_time']."','".$_POST['comments']."',".$_POST['File_number'].",'".$_POST['Doctor_name']."','".$_POST['TestType']."')";

        $result = mysqli_query($mysqli,$sql);
		
		//print (" im in set1 ");
      if($result) {
         //session_register("myusername")
          //echo "<script>alert('add appoingment successfully');</script>";
           header("location: DoctorPage.php");
		 // print (" im in set 2");
        
      }else {
         //cho "<script>alert('Do not add appoingment successfully');</script>";
         // alert("add appoingment successfully");
           header("location: ReqTest.php");
         // alert("Do not add appoingment successfully");
       //print (" im in set3 ");
         
      }
    }
       
?>