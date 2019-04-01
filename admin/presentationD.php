<head>
	<title>Download Presentation</title>
</head>
<body>
    <table width="552" height="200" style="border-radius: 10px; box-shadow: 0 0 2px 2px #888;
            	font-family:'Comic Sans MS';font-size: 14px;" >
        <tr>
            <td>
                  <marquee behavior="scroll" direction="up" scrolldelay="150" onMouseOver="this.stop();" onMouseOut="this.start();">
                        <?php
                            {
                                $row="";
                                $con = mysql_connect("localhost","root","");
                                if (!$con)
                                    echo('Could not connect: ' . mysql_error());
                                else
                                {
                                    mysql_select_db("dataleakage", $con);
                                    $sql = 'SELECT subject, topic, fname FROM presentation';
                                    $retval = mysql_query( $sql, $con );
                                    if(! $retval )
                                    {
                                        die('Could not get data: ' . mysql_error());
                                    }
                                    while($row = mysql_fetch_assoc($retval))
                                    {
                                           echo "SUBJECT: {$row['subject']} <br> " .
                                                "NOTICE: {$row['topic']} <br> " .
                                                "DOWNLOAD FILE: <a href='download.php?id=". "{$row['fname']}'>{$row['fname']}</a>" .
											    "<hr><br>" ;
                                    } 
                                }
                                mysql_close($con);
                            }
                        ?> 
                  </marquee>
            </td>
        </tr>
    </table>
</body>
</html>

