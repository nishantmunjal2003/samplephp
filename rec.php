<?php
include("config.php");


$sqlcon= "INSERT INTO `empdetails` (`name`, `age`, `email`, `salary`) VALUES ('$_POST[name]', '$_POST[age]', '$_POST[email]', '$_POST[salary]')";

#$result = $conn->query($sqlcon);

if ($conn->query($sqlcon) === TRUE) 
{
	//$url="http://localhost/samplephp/findallbutton.php";
	$url="index.php";
	
	#this will give you option to click for all record
    /*echo "Record Added Successfully";		
    echo "<a href=".$url.">Check all the Records Entered</a>";*/	
    
    #this will redirect to show all records after submission.
    header("Location: ".$url);
} 
else 
{
    echo "Error: " . $sqlcon . "<br>" . $conn->error;
}

?>

