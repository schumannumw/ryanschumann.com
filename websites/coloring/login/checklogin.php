<?php
require "../config.php"; 
//Check to see if the user is logged in. 
if(isset($_POST['submit'])) 
{ 
   //Variables from the table 
   $user  = $_POST['user']; 
   $pass  = $_POST['pass']; 
       
   //Check to see if the user left any space empty! 
   if($user == "" || $pass == "") 
   { 
      echo "Please fill in all the information!"; 
   } 
    
   //Check to see if the username AND password MATCHES the username AND password in the DB
   else 
   { 
      $query = mysqli_query($con,"SELECT * FROM users WHERE username = '$user' and password = '$pass'") or die("Can not query DB."); 
      $count = mysqli_num_rows($query); 
       
      if($count == 1){ 
         //YES WE FOUND A MATCH! 
         $_SESSION['username'] = $user; //Create a session for the user! 
         header ("location: ../indexAfterLI.php"); 
      } 
       
      else{ 
         echo "Username and Password DO NOT MATCH! TRY AGAIN!"; 
      } 
   } 
} 
?>