<?php 
session_start();

$con = mysql_connect("localhost","root","");
                                if (!$con)
                                    echo('Could not connect: ' . mysql_error());
                                else
                                {
                                    mysql_select_db("dataleakage", $con);
									

$k1=$_POST['s1'];
$k2=$_POST['s2'];




//$qry="SELECT * FROM presentation WHERE Topic = '$k1' ";
//$result=mysql_query($qry)or die ("Could not insert data into DB: " . mysql_error());;


if($k1==$k2){
	
echo'enter success      

'.$file = './download/'.$_GET['id'];
   	$title=$_GET['id'];

    header("Pragma: public");
    header('Content-disposition: attachment; filename='.$title);
  
    
    header('Content-Transfer-Encoding: binary');
    ob_clean();
    flush();

    $chunksize = 1 * (1024 * 1024); // how many bytes per chunk
    if (filesize($file) > $chunksize) {
        $handle = fopen($file, 'rb');
        $buffer = '';

        while (!feof($handle)) {
            $buffer = fread($handle, $chunksize);
            echo $buffer;
            ob_flush();
            flush();
        }

        fclose($handle);
    } else {
        readfile($file);
    }   '                                     


';
}else{
	
	echo"call the admin";
	
	


$sql = "insert into leaker ( name,time) values ('$_SESSION[name]','".date("d/m/Y")."')";
	$result = mysql_query($sql) or die ("Could not insert data into DB: " . mysql_error());
	header("Location: askadmin.php");
	
	
}
					

					
					




								}
								
	
							

?>

