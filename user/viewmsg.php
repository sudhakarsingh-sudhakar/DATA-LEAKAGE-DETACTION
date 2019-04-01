<?php
session_start(); //Start the session

if (!isset($_SESSION['name'])) {
        echo "Please Login";
		//$_SESSION['error'] = "Please Login First";
		echo "<script type=\"text/javascript\">"." alert('Please Login'); " ."</script>";
		} if (!$_SESSION['name']){
		      echo  header("Location: http://localhost/data lekage detaction/userlogin.php");
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
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Data Lekage Detaction</title>
	<meta charset="utf-8" />
	
	<link rel="stylesheet" href="style.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body class="body">
	
	<header class="mainHeader">
		<img src="img/logo.gif">
		<nav><ul>
			
			<li ><a href="user.php">Home</a></li>
			<li><a href="view file.php"> Article</a></li>
			
			<li class="active"><a href="viewmsg.php">ViewMassge</a></li>
			<li><a href="viewkey.php">View Key</a></li>
	</ul></nav>
	</header>
		
	<div class="mainContent1">
		<div class="content">	
				<article class="topcontent1">	
					<header>
						<h2><a href="#" rel="bookmark" title="Permalink to this POST TITLE"> View Messages</a></h2>
					</header>
					<table align="center" cellpadding="9" cellspacing="2" width="10">
							<tr bgcolor="green"><td>id</td><td>Email</td><td>Keys</td></tr>
		
					<?PHP
				
				$con = mysql_connect("localhost","root","");
                                if (!$con)
                                    echo('Could not connect: ' . mysql_error());
                                else
                                {
                                    mysql_select_db("dataleakage", $con);
									


$qry="Select * FROM msg where reciver='$_SESSION[name]'";
	$result=mysql_query($qry);
while($w1=mysql_fetch_array($result))
{	
	echo'			<tr bgcolor="white">
	
	<td>'.$w1["id"].'    </td><td>     '.$w1["email"].'	
					</td><td>'.$w1["msg"].'

	</td>
</tr>


	
	
	';
		
}
								}

?>
					
					
     




						</p>
	
					
</table>

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
		<p>Project Design by: Abhishek ,Amit,Sudhakar,Vishal vikram</a></p>
	</footer>

</body>
</html>