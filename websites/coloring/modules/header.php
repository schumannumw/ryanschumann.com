<ul>
<?php //Check to see if the user is logged in. 
if(isset($_SESSION['username'])){ 
	echo '<li><a href="/coloring/login/logout.php">Log Out </a></li>'; 
}
else {
	echo '<li><a href="/coloring/login/signup.php">Sign-Up</a></li>';
	echo '<li><a href="/coloring/login/login.php">Login</a></li><br />';
}  
?>
</ul>