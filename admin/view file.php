<!DOCTYPE html>
<html lang="en">
<head>
	<title>Data Lekage Detaction</title>
	<meta charset="utf-8" />
	
	<link rel="stylesheet" href="style.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<?php
session_start(); //Start the session

if (!isset($_SESSION['name'])) {
        echo "Please Login";
		//$_SESSION['error'] = "Please Login First";
		echo "<script type=\"text/javascript\">"." alert('Please Login'); " ."</script>";
		} if (!$_SESSION['name']){
		      echo  header("Location: http://localhost/data lekage detaction/adminlogin.php");
		}

		
		else{
		
		define('ADMIN',$_SESSION['name']); //Get the user name from the previously registered super global variable
		//if(!session_is_registered("admin")){ //If session not registered
//header("location:login.php"); // Redirect to login.php page
//}
//else //Continue to current page
header( 'Content-Type: text/html; charset=utf-8' );
//include'includes/conn.php';
 }
 
?>
<body class="body">
	
	<header class="mainHeader">
		<img src="img/logo.gif">
		<nav><ul>
			<li ><a href="admin.php">Home</a></li>
			<li><a href="upload.php">Publish Article</a></li>
			<li class="active"><a href="view file.php">View File</a></li>
			<li ><a href="leakfile.php">Leak User</a></li>
			<li ><a href="sendkey.php">SendKey</a></li>
			
			
		</ul></nav>
	</header>
		
	<div class="mainContent1">
		<div class="content">	
				<article class="topcontent1">	
					<header>
						<h2><a href="#" rel="bookmark" title="Permalink to this POST TITLE">Admin Menu</a></h2>
					</header>
					
					<footer>
						<p class="post-info">This Admin manu was one time password. </p>
					</footer>
					
					<content>
						<p>
							<table align="center" cellpadding="9" cellspacing="2" width="10" ><tr bgcolor="green">
							<td >Articla Name</td><td>Key</td><td>Date</td><td><a href="a_detail.php">Detail</a></td></tr>
					<?php
                            {
                                $row="";
                                $con = mysql_connect("localhost","root","");
                                if (!$con)
                                    echo('Could not connect: ' . mysql_error());
                                else
                                {
                                    mysql_select_db("dataleakage", $con);
                                    $sql = 'SELECT subject, topic, fname,time FROM presentation';
                                    $retval = mysql_query( $sql, $con );
                                    if(! $retval )
                                    {
                                        die('Could not get data: ' . mysql_error());
                                    }
                                    while($row = mysql_fetch_assoc($retval))
                                    {
                                           echo "<tr bgcolor='white'><td> {$row['subject']} </td> " .
                                                "<td> {$row['topic']} </td> " .
												"<td> {$row['time']} </td> " .
												"<td><a href='download.php?id=". "{$row['fname']}'>{$row['fname']}</a>" .
											    "</td>" ;
                                    } 
                                }
                                mysql_close($con);
                            }
                        ?> 
					
					
					
					
					                          
</tr>

</table>

						</p>
						</content>
					
				</article>

			</div>
<aside class="top-sidebar">
					<article>
					<h2>Welcome: <?php echo $_SESSION['name']/*Echo the username */ ?></h2>
					<li><a href="logout.php">Logout</a></li>
					
					<p></p>
				    </article>
				</aside>	
		</div>
			
				
	</div>
	
	<footer class="mainFooter">
		<p>Project Design by: Abhishek,Amit,Sudhakar,Vishal Vikram</a></p>
	</footer>

</body>
</html>