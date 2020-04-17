<?php
include("menu.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

<h2>Employee Details</h2>
<form action="rec.php" method="POST">
  <p>Name:
    <input type="text" name="name">
  </p>
  <p>Age:
              <input type="number" name="age">
  </p>
  <p>Email-id
    <input type="email" name="email">
  </p>
  <p>Salary
    <input type="number" name="salary">
    <input type="submit">
  </p>
</form>

</body>
</html>
