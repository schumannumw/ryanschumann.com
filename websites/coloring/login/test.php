<?php
session_start();
require "../config.php";

 // $result = $con->query("SELECT * FROM users")
        // or trigger_error($con->error);
// $row = $result->fetch_array(MYSQL_BOTH);
// echo $row['email']; // or echo $row[1]


 $result = $con->query("SELECT email FROM users WHERE username = 'kyli'")
        or trigger_error($con->error);
$row = $result->fetch_array(MYSQL_BOTH);
echo $row['email'];
?>

<?php

//other test
session_start();
require "../config.php";

 // $result = $con->query("SELECT email FROM users WHERE username = 'kyli'")
        // or trigger_error($con->error);
// $row = $result->fetch_array(MYSQL_BOTH);
// echo $row['email'];
$sql = "UPDATE users SET email='fsdfds@domain.net' WHERE username='tim'";

$retval = mysql_query( $sql, $con );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
echo "Updated data successfully\n";
mysql_close($con);
{
// perform the query and check for errors
//$result = mysql_query( $sql ) or die( mysql_error() );
}
?>