<?php  
// Same as on uploadform.php for the directory
$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);

// Where will the file go?
$uploadsDirectory = $_SERVER['DOCUMENT_ROOT'] . $directory_self . '../images/7/';

// where is the upload form?
$uploadForm = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'uploadform.php';

// Where it goes after success.
$uploadSuccess = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'uploadsuccess.php';

// name of the file in the HTML form
$fieldname = 'file';

// errors
$errors = array(1 => 'php.ini max file size exceeded', 
                2 => 'html form max file size exceeded', 
                3 => 'file upload was only partial', 
                4 => 'no file was attached');

// Check form
isset($_POST['submit'])
	or error('the upload form is needed', $uploadForm);

// errors - study this part
($_FILES[$fieldname]['error'] == 0)
	or error($errors[$_FILES[$fieldname]['error']], $uploadForm);
	
// study this make sure it is an http upload
@is_uploaded_file($_FILES[$fieldname]['tmp_name'])
	or error('not an HTTP upload', $uploadForm);
	
// is this an image?
@getimagesize($_FILES[$fieldname]['tmp_name'])
	or error('only image uploads are allowed', $uploadForm);
	
// Unique file name gen.
$now = time();
while(file_exists($uploadFilename = $uploadsDirectory.$now.'-'.$_FILES[$fieldname]['name']))
{
	$now++;
}

// final destination with file name.
@move_uploaded_file($_FILES[$fieldname]['tmp_name'], $uploadFilename)
	or error('receiving directory insufficient permission', $uploadForm);
	
// success page
header('Location: ' . $uploadSuccess);

// if the upload fails
function error($error, $location, $seconds = 5)
{
	header("Refresh: $seconds; URL=\"$location\"");
	echo 'There was an event handler error';
	exit;
} // end error handler

?>