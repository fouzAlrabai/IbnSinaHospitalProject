<?php
    $mysqli = new mysqli("localhost","root","","hospital");
      //Verbindung überprüfen
      if ($mysqli -> connect_errno)
      {
        printf("Verbindung fehlgeschlagen: %s\n", $mysqli->connect_error);
        exit();
      }
   session_start();
   
   if($_POST['submit']) {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($mysqli,$_POST['username']);
      $mypassword = mysqli_real_escape_string($mysqli,$_POST['psw']); 
      $user = mysqli_real_escape_string($mysqli,$_POST['user']);
       
       if($user === 'patient'){
        $sql = "SELECT * FROM patient WHERE UserName = '$myusername' AND Password ='$mypassword' ";

      $result = mysqli_query($mysqli,$sql);
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count >= 1) {
         //session_register("myusername")
         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
         $_SESSION["UserName"] = $row['UserName'];
         $_SESSION["File_Num"] = $row['File_Num'];
         $_SESSION['PName'] = $row['PName'];
         $_SESSION["Password"] = $row['Password'];
         $_SESSION["Age"] = $row['Age'];
         $_SESSION['City'] = $row['City'];
         $_SESSION['Sex'] = $row['Sex'];
         $_SESSION['Phone'] = $row['Phone'];
         header("location: PatientPage.php");
      }else {
          header("location: index.php");
         $error = "Your Login Name or Password is invalid";
      }
    }
       
       
       
       if($user === 'doctor'){
        $sql = "SELECT * FROM doctor WHERE UserName = '$myusername' AND Password ='$mypassword' ";

      $result = mysqli_query($mysqli,$sql);
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count >= 1) {
         //session_register("myusername")
         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
         $_SESSION["UserName"] = $row['UserName'];
         $_SESSION['DName'] = $row['DName'];
         $_SESSION["Password"] = $row['Password'];
         $_SESSION["OFFICE_#"] = $row['OFFICE_#'];
         $_SESSION['CName'] = $row['CName'];
         $_SESSION['Phone'] = $row['Phone'];
         header("location: DoctorPage.php");
      }else {
          header("location: index.php");
         $error = "Your Login Name or Password is invalid";
      }
    }
       
       
       
       
   }
?>