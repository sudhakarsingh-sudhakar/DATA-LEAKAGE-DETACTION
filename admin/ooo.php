<?PHP
				
				$con = mysql_connect("localhost","root","");
                                if (!$con)
                                    echo('Could not connect: ' . mysql_error());
                                else
                                {
                                    mysql_select_db("dataleakage", $con);
									


$qry="Select * FROM askkey where reciver='admin' and status='no'";
	$result=mysql_query($qry);
while($w1=mysql_fetch_array($result))
{
	echo'			<tr bgcolor="white">
	
	<td>'.$w1["id"].'    </td><td>     '.$w1["user"].'	
					</td><td>'.$w1["filename"].'

	</td>
</tr>


	
	';
		
}
								}

?>
						