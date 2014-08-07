<?php
session_start();
require "../config.php";
$username = $_SESSION['username'];
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
	if($row == 1 )
	{
		echo "Your chosen email is currently in use by another user, please create a different Email";
	}
	//send to db
	else
	{
	$add = mysqli_query($con, "UPDATE users SET email='$email' WHERE username='$username' ") or die("Can't update new data. ");
	echo "Update successful."; 
	}
	
	}
	
}
//check the session
if(isset($_SESSION['username'])){ 
   echo "<h1>Welcome ".$_SESSION['username']."</h1> <h3>Below is your account information:</h3>";
} 
else{ 
   echo "<a href='../index.php'>Log In</a>to view your account information."; 
}  

//this is used to get the username
 $result = $con->query("SELECT email FROM users WHERE username = '$username'")
        or trigger_error($con->error);
$row = $result->fetch_array(MYSQL_BOTH);
echo 'Username: ';
echo $username;
?>


<form name="input" action="account.php" method="post">
Email :<input name="email" type="text" id="email" value="<?php echo $row['email'];?>">
<input type="submit" name="submit" value="Change Email">
</form> 

 </div>
		<footer>
			<div>
			<?php include $_SERVER['DOCUMENT_ROOT'] . '/coloring/modules/footer.php'; ?>
			</div>
		</footer>
	</body>
</html>