<?php
session_start();
require "config.php"; // My login Credentials
echo "Username = " . $_SESSION["username"];
//print_r($_SESSION);

   // $result = mysqli_query($con,"SELECT * FROM users WHERE ");

    // while($row = mysqli_fetch_array($result))
      // {
      // echo $row['username'] . " " . $row['email'];
      // echo "<br />";
      // }

    // mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en-us">
<head>
<title>Edit User INFO</title>
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
			<h1>Edit your user information</h1>
			</div>
			
			<footer>
			<div>
			<?php include $_SERVER['DOCUMENT_ROOT'] . '/coloring/modules/footer.php'; ?>
			</div>
		</footer>
	</body>
</html>