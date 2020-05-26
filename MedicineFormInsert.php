
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
        $sql = "INSERT INTO pharmecy (Med_Name, Quantity, Details, File_Num, DUserName)
        VALUES ('".$_POST['Medicine_name']."',".$_POST['Medicine_quan'].",'".$_POST['details']."',".$_POST['File_number'].",'".$_POST['Doctor_name']."')";
        
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
           header("location: ReqMedicine.php");
         // alert("Do not add appoingment successfully");
       //print (" im in set3 ");
         
      }
    }
       
?>












