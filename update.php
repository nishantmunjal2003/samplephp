<?php
include("menu.php");
include("config.php");

$ida=$_GET['id'];

$sqlcon= "SELECT * FROM empdetails WHERE id=".$ida;
$result = $conn->query($sqlcon);
$row = $result->fetch_assoc();

?>

<form action="../updatedone.php" method="POST">
  <p>ID:
    <input type="text" name="id" value="<?php echo $row['id'] ?>" disabled >
  </p>
  
  <p>Name:
    <input type="text" name="name" value="<?php echo $row['name'] ?>"  >
  </p>
  <p>Age:
    <input type="number" name="age" value="<?php echo $row['age'] ?>">
  </p>
  <p>Email-id
    <input type="email" name="email" value="<?php echo $row['email'] ?>">
  </p>
  <p>Salary
    <input type="number" name="salary" value="<?php echo $row['salary'] ?>">
    <input type="submit">
  </p>
</form>


