<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>HOBBY HUB</title>
</head>
<body bgcolor="lightgreen">
  <form id="signup" name="freg" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
                <h1><center>PROFILE SUMMARY</center></h1>
				<table align="center">
					<tr><td><textarea name="summ" placeholder="Write about you in a short description.." rows="15" cols="50"></textarea></td></tr>
					<tr><td><input name="submit" type="submit" value="ADD TO PROFILE" /><input name="skip" type="submit" value="Skip" /></td></tr>	
                </table>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hobbyhub";

$email=$_SESSION["semail"];
$conn = new mysqli($servername, $username, $password, $dbname);

if (mysqli_connect_errno())
  {  echo "Failed to connect to MySQL: " . mysqli_connect_error();  }
  if(isset($_POST['submit']))
{   
	$sum = $_POST["summ"];
    $sql = " UPDATE user SET summary = '$sum'  WHERE email = '$email' ";
	if (mysqli_query($conn, $sql)) {  header('Location: main.php');   }
	else {    echo "Error: " . $sql . "<br>" . mysqli_error($conn);}
	$conn->close();
} 
if(isset($_POST['skip']))
{ header('Location: main.php');
}
?>
   </form>
</body>
</html>