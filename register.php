<?php
// Start a session for error reporting
session_start();

// Call our connection file
require("includes/conn.php");


//}


// Get our POSTed variables
$fname = $_POST['a1'];
$lname = $_POST['a2'];
$image = $_POST['a3'];
$password=$_POST['a5'];


$fname = mysql_real_escape_string($fname);
$lname = mysql_real_escape_string($lname);


	// NOTE: This is where a lot of people make mistakes.
	// We are *not* putting the image into the database; we are putting a reference to the file's location on the server
	$sql = "insert into register ( username, userid, password, emailid) values ('$fname', '$lname','$image', '$password')";
	$result = mysql_query($sql) or die ("Could not insert data into DB: " . mysql_error());
	header("Location:userlogin.php");
	exit;

?>
