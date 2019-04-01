<?php
// Start a session for error reporting
session_start();
// Get our POSTed variables
$a1 = $_POST['a1'];
$a2 = $_POST['a2'];
$a3 = $_POST['a3'];




 $con = mysql_connect("localhost","root","");
                                if (!$con)
                                    echo('Could not connect: ' . mysql_error());
                                else
                                {
                                    mysql_select_db("dataleakage", $con);
	$sql = "UPDATE askkey SET k='$a2',status='yes' WHERE filename='$a3'and user='$a1' ";
	$result = mysql_query($sql) or die ("Could not send data into DB: " . mysql_error());
	header("Location: admin.php");
	exit;
								}
?>
