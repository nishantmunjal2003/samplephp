<?php
include("config.php");

$id=$_GET['id'];

$sqlcon= "DELETE from empdetails WHERE id=".$id;

if ($conn->query($sqlcon) === TRUE) 
{
	echo "Record ".$id." Deleted are completed. You will be redirected back in 2 sec";
	header("Location: ../findallbutton.php");
	//header( "Refresh:0; url=http://localhost/samplephp/findallbutton.php", true, 303);
 }
else 
{
    echo "Error: " . $sqlcon . "<br>" . $conn->error;
}

?>

