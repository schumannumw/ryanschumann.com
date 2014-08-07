<?php
session_start();
require "../config.php";
//Check to see if the user is logged in. 
if(isset($_SESSION['username'])){ 
   header("location: /coloring/account/account.php"); 
}  
//Check to see if the user is logged in. 
if(isset($_POST['submit'])) 
{ 
   //Variables from the table 
   $user  = $_POST['user']; 
   $password  = $_POST['pass']; 
    
   //Check to see if the user left any space empty! 
   if($user == "" || $password == "") 
   { 
      echo "Please fill in all the information!"; 
   } 
    
   //Check to see if the username AND password MATCHES the username AND password in the DB
   else 
   { 
      $pass = hash("sha256", $password);
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
} 
?>


<!DOCTYPE html>
<html lang="en-us">
<head>
<title>Kids Coloring Pages</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="/coloring/css/cscreen.css" type="text/css" media="screen" />
</head>

	<body>
			<div id="press">
			<?php include $_SERVER['DOCUMENT_ROOT'] . '/coloring/modules/header.php'; ?>
			</div>

			<div id="main_nav">
			<?php include $_SERVER['DOCUMENT_ROOT'] . '/coloring/modules/navigation.php'; ?>
			</div>

			<div id="content">
			<h1>Registration Successful</h1>
			<h1>Login:</h1>
			<form name="register" method="post" action="signupLogin.php">
<input name="user" type="text" id="user">Username <br>
<input name="pass" type="password" id="pass">Password<br>
<input type="submit" name="submit" value="Login"><br>
</form>
			</div>
		<footer>
			<div>
			<?php include $_SERVER['DOCUMENT_ROOT'] . '/coloring/modules/footer.php'; ?>
			</div>
		</footer>
	</body>
</html>