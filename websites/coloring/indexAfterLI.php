<?php
session_start();
require "config.php";
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
			<h2>Welcome to coloring pages</h2>
 <?php //is user logged in. 
if(isset($_SESSION['username'])){ 
   echo "<h1>Welcome ".$_SESSION['username']."</h1>you are logged in. <br /> This is the after login page! <a href='login/logout.php'>Click Here </a>to log out."; 
} 
else{ 
   echo "<a href='index.php'>Log In</a>"; 
} 
?>


		<footer>
			<div>
			<?php include $_SERVER['DOCUMENT_ROOT'] . '/coloring/modules/footer.php'; ?>
			</div>
		</footer>
	</body>
</html>