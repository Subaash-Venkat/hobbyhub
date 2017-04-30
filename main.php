<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>HOBBY HUB</title>
</head>
<body> 
<?php
echo "welcome " . $_SESSION["sname"] . ".<br>";
?>
</body>
</html>