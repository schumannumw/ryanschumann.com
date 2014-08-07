<?php
session_start();
require "../config.php";
$value = $_POST["categories"];
if(!isset($_SESSION['username'])){ 
   header("location: ../login/login.php"); 
}  
else {
// make a note of the current working directory relative to root.
$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);

// make a note of the location of the upload handler
$uploadHandler = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'uploadprocessor'. $value . '.php';

// set a max file size for the html upload form
$max_file_size = 2097152; // 2 MB
}
   // echo 'uploadprocessor'. $value . '.php';
?>

<!DOCTYPE html>
<html lang="en-us">
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<link rel="stylesheet" href="/coloring/css/cscreen.css" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<title>Upload form</title>
</head>

	<body>
			<div id="press">
			<?php include $_SERVER['DOCUMENT_ROOT'] . '/coloring/modules/header.php'; ?>
			</div>

			<div id="main_nav">
			<?php include $_SERVER['DOCUMENT_ROOT'] . '/coloring/modules/navigation.php'; ?>
			</div>

			<div id="content">
			
	 		<h1> 	 Select a category below:	</h1>
			
			<form action="uploadform.php" method="post">
			
     <?php
// ----------------------------------------
        $DBServer = 'localhost';
        $DBUser   = 'color';
        $DBPass   = 'c';
        $DBName   = 'coloringpages_db';
        
        $mysqli = new mysqli($DBServer, $DBUser, $DBPass, $DBName);

        if ($mysqli->connect_errno)
        {
          echo "Check your Connection: " . $mysqli->connect_error;

        }
        else
        {
          $query = "SELECT * FROM categories";
       
          $result = $mysqli->query($query);

         // echo "<select name='categories'>";
          if ($result->num_rows > 0)
          {
            while ($row = $result->fetch_assoc())
            {
              echo "<input type='radio' name='categories' value='". $row["type"] . "'>" . $row["type"] . '<br />';
            }   
          }
         // echo "</select>";
        }
     ?>
       <input type="submit" name="formSubmit" value="Submit"/>
     </form>


	<form id="Upload" action="<?php echo $uploadHandler ?>" enctype="multipart/form-data" method="post">

			<?php 
				echo '<h1> Uploading to: '; echo $value. '</h1>';
				?>
			<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size ?>">
			<label for="file">Image File:</label>
			<input id="file" type="file" name="file">
			<label for="submit">Submit: </label>
			<input id="submit" type="submit" name="submit" value="Upload"><br>
	</form>
	
			</div>

		<footer>
			<div>
			<?php include $_SERVER['DOCUMENT_ROOT'] . '/coloring/modules/footer.php'; ?>
			</div>
		</footer>
	</body>
</html>