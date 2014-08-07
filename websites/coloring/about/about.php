<?php
session_start();
require "../config.php";
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
			<h2>About my site:</h2>
			<p>A special thanks to these sources for their helpful tutorials:</p>
			<p><a href="http://www.thetechgame.com/Tutorials/id=7104/php-how-to-create-a-simple-registration-login-script.html">thetechgame.com</a></p>
			<p><a href="http://www.htmlgoodies.com/beyond/php/article.php/3877766/Web-Developer-How-To-Upload-Images-Using-PHP.htm">htmlgoodies.com</a></p>
			<p><a href="http://ec2-54-208-212-218.compute-1.amazonaws.com/">My website</a></p>
			<p>By learning from these tutorials and the help of w3schools.com I was able to create this site.</p>
			</div>

		<footer>
			<div>
			<?php include $_SERVER['DOCUMENT_ROOT'] . '/coloring/modules/footer.php'; ?>
			</div>
		</footer>
	</body>
</html>