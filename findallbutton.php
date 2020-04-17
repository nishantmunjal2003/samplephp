<?php
include("menu.php");
include("config.php");

$sqlcon = "SELECT * FROM empdetails";	#query
$result = $conn->query($sqlcon);		#query execution at 

echo "<table border=1>";
echo "<thead><tr><td>Name</td><td>Age</td><td>Email-id</td><td>Salary</td><td>Operation</td><td>Operation</td></tr></thead>";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    
	
        echo "<tr><td>".$row["name"]."</td><td>".$row["age"]."</td><td>".$row["email"]."</td><td>".$row["salary"]."</td>";
        echo "<td>";
       
        $url_delete="delete.php/?id=".$row['id'];
        echo "<button><a href=".$url_delete.">Delete</a></button>";   
        echo "</td><td>";
        
        $url_update="update.php/?id=".$row['id'];
        echo "<button><a href=".$url_update.">Update</a></button>";        
        echo "</td></tr>";
    }
    echo "</table>";
}

?>