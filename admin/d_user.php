<?php
// Start a session for error reporting
session_start();





// Get our POSTed variables
$id = $_GET['id'];




 $con = mysql_connect("localhost","root","");
                                if (!$con)
                                    echo('Could not connect: ' . mysql_error());
                                else
                                {
                                    mysql_select_db("dataleakage", $con);
	$sql = "delete from register where username='$id'";
	$result = mysql_query($sql) or die ("Could not insert data into DB: " . mysql_error());
	header("Location: admin.php");
	exit;
								}
?>
