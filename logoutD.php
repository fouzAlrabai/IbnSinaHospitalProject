<?php
session_start();
 

// here we unset every variable we declared before 
 
unset($_SESSION["UserName"]); 
unset($_SESSION["DName"]);  
unset($_SESSION["Password"]);  
unset($_SESSION["OFFICE_#"]);  
unset($_SESSION["CName"]);  
unset($_SESSION["Phone_#"]);  

// go back to main page "index"
header("Location: index.php");

?>