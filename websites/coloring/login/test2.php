<?php
session_start();
require "../config.php"; // My login Credentials

//Did user press submit?
if(isset($_POST['submit']))
{
// Form info
$email = $_POST['email'];

// In the future do injections

// Are they all there?
	if($email=="")
	{
		echo "Please enter a new email address.";
	}

// Does someone have your email?
	else{
	$query = mysqli_query($con, "SELECT * FROM users WHERE username = '$email'") or die("Can not query table.");
	//count rows
	$row = mysqli_num_rows($query);
	if($row == 1)
	{
		echo "Your chosen email is currently in use by another user, please create a different Email";
	}
	//send to db
	else
	{
	$add = mysqli_query($con, "UPDATE users SET email='fsmemptyyyyyyy.net' WHERE username='tim' ") or die("Can't update new data. ");
	echo "Update successful: <a href='login.php'>Click here</a> to log in.."; 
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
			<h2>Welcome to coloring pages</h2>
			<h1>Create a new User:</h1>
			<form name="register" method="post" action="/coloring/login/test2.php">
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


Email: <input type="email" name="Email" id="email" value="<?php echo $row['email'];?>">