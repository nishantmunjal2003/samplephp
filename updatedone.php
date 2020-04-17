<?php
include("config.php");

$sqlcon= "UPDATE empdetails SET email='$_POST[email]', name='$_POST[name]', age='$_POST[age]', salary='$_POST[salary]' WHERE id='$_POST[id]'";

echo $sqlcon;

if ($conn->query($sqlcon) === TRUE) 
{
	$url="findallbutton.php";
    header("Location: ".$url);
} 
else 
{
    echo "Error: " . $sqlcon . "<br>" . $conn->error;
}
?>

