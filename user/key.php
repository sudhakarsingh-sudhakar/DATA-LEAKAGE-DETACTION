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
	$sql = "insert into askkey (user, filename, status, reciver,k) values ('$_SESSION[name]','$id','no','admin','')";
	$result = mysql_query($sql) or die ("Could not insert data into DB: " . mysql_error());
	//echo '<script language="javascript">alert("Thank You!! for asking for key")</script>';
	header("Location: user.php");
	exit;
								}
?>
