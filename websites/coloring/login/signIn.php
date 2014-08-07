<?php
session_start();

$host="localhost"; // Host 
$username="color"; // Database username 
$password="c"; // Mysql password 
$db="coloringpages_db"; // Database name 

$con = mysqli_connect($host,$username,$password,$db) or die("Can not connect to Server.");

if(isset($_POST['submit'])) 
{ 
   //Variables from the table 
   $user  = $_POST['username']; 
	$password = $_POST['password'];
	$pass = hash("sha256", $password);
   //Check to see if the username AND password MATCHES the username AND password in the DB
 
      $query = mysqli_query($con,"SELECT * FROM users WHERE username = '$user' and password = '$pass'") or die("Can not query DB."); 
      $count = mysqli_num_rows($query); 
       
      if($count == 1){ 
         //YES WE FOUND A MATCH! 
         $_SESSION['username'] = $user; //Create a session for the user! 
   header("location: /coloring/account/account.php"); 
      } 

      else{ 
         echo "Username and Password DO NOT MATCH! TRY AGAIN!"; 
      } 
    
} 
?>

<!DOCTYPE html>
<html lang="en-us">
<head>
<title>Activity 6</title>
<meta charset="UTF-8">

</head>

	<body>
<form name="signIn" method="post" action="signIn.php">
<input name="username" type="text" id="newuser">Username <br>
<input name="password" type="password" id="newpass">Password<br>
<input type="submit" name="submit" value="Sign In"><br>
</form>			

	</body>
</html>