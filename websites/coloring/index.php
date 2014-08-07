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
<p>Top coloring pages this week </p>
<img src="/coloring/images/home/1.jpg" alt="" class="large-images">
<img src="/coloring/images/home/2.jpg" alt="" class="large-images">
<img src="/coloring/images/home/3.jpg" alt="" class="large-images">
<img src="/coloring/images/home/4.jpg" alt="" class="large-images">
			</div>

		<footer>
			<div>
			<?php include $_SERVER['DOCUMENT_ROOT'] . '/coloring/modules/footer.php'; ?>
			</div>
		</footer>
	</body>
</html>