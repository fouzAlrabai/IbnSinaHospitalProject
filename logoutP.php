<?php
session_start();
 

// here we unset every variable we declared before 
 
unset($_SESSION["UserName"]); 
unset($_SESSION["File_Num"]);  
unset($_SESSION["PName"]);  
unset($_SESSION["Password"]);  
unset($_SESSION["Age"]);  
unset($_SESSION["City"]);  
unset($_SESSION["Sex"]);  
unset($_SESSION["Phone_#"]);  

// go back to main page "index"
header("Location: index.php");

?>