<?php

// Input your information for the database here

// Host name
$host = "localhost";

// Database username
$username = "root";

// Database password
$password = "";

// Name of database
$database = "dataleakage";

$conn = mysql_connect($host, $username, $password) or die ("Could not connect");
$db = mysql_select_db($database, $conn) or die ("Could not select DB");

?>