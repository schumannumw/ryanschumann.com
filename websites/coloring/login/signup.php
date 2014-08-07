<?php
session_start();
require "../config.php"; // My login Credentials

//is someone logged in?
if(isset($_SESSION['username'])){ 
   header("location: ../indexAfterLI.php"); 
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
			
<?php		
//Did user press submit?
if(isset($_POST['submit']))
{
// Form info
$user = $_POST['newuser'];
$password = $_POST['newpass'];
$rpass = $_POST['rnewpass'];
//$rpass = $_POST['rnewpass'];
$email = $_POST['email'];

// In the future do injections
// echo "$user";
// echo "$pass";
// echo "$email";
// Are they all there?
	if($user == "" || $password=="" || $rpass=="" || $email=="")
	{
		echo "Please complete the registration form.";
	}
	
	else{
	//Do passwords match?
	if($password != $rpass)
	{
	echo "Please re-enter your passwords";
	}
	
	// Does someone have your username?
	else{
	$pass = hash("sha256", $password);
	$query = mysqli_query($con, "SELECT * FROM users WHERE username = '$user'") or die("Can not query table.");
	//count rows
	$row = mysqli_num_rows($query);
	if($row == 1)
	{
		echo "Your chosen username is currently in use by another user, please create a different username";
	}
	//send to db
	else
	{
	$add = mysqli_query($con,"INSERT INTO users (username, password ,email) VALUES ('$user' , '$pass' , '$email') ") or die("Can't insert new data. ");
	header("location: /coloring/login/signupLogin.php");
	// echo "Submission successful: <a href='login.php'>Click here</a> to log in.."; 
	}
	
	}
	}
}
?>
			<h1>Create a new User:</h1>
			<form name="register" method="post" action="/coloring/login/signup.php">
<input name="newuser" type="text" id="newuser">Username <br>
<input name="newpass" type="password" id="newpass">Password<br>
<input name="rnewpass" type="password" id="rnewpass">Re Enter Password<br>
<input name="email" type="text" id="email">Email<br>
<input type="submit" name="submit" value="Register"><br>
</form>
		<footer>
			<div>
			<?php include $_SERVER['DOCUMENT_ROOT'] . '/coloring/modules/footer.php'; ?>
			</div>
		</footer>
	</body>
</html>