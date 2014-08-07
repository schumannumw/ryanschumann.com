<ul>
		<?php //Check to see if the user is logged in. 
	if(isset($_SESSION['username'])){ 
	echo '<li><a href="/coloring/index.php" title="Go to home page">HOME</a></li>';
	echo '<li><a href="/coloring/categories/categories.php" title="">CATEGORIES</a></li>';
	echo '<li><a href="/coloring/upload/uploadform.php" title="">UPLOAD</a></li>';
	echo '<li><a href="/coloring/about/about.php" title="">ABOUT</a></li>';
	echo '<li><a href="/coloring/account/account.php" title="">ACCOUNT</a></li>';
} 
else{
	echo '<li><a href="/coloring/index.php" title="Go to home page">HOME</a></li>';
	echo '<li><a href="/coloring/categories/categories.php" title="">CATEGORIES</a></li>';
	echo '<li><a href="/coloring/about/about.php" title="">ABOUT</a></li>';
}  
?>
</ul>