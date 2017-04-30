<!DOCTYPE html>
<html>
<head>
    <title>Insert Image</title>
</head>
<body>
<?php
$msg = '';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hobbyhub";

$conn = new mysqli($servername, $username, $password, $dbname);

if (mysqli_connect_errno())
  {  echo "Failed to connect to MySQL: " . mysqli_connect_error();  }
if($_SERVER['REQUEST_METHOD']=='POST'){
    $image = $_FILES['image']['tmp_name'];
    $img = file_get_contents($image);
    $sql = "UPDATE user SET propic = '$img'  WHERE email = 'sara@gmail.com'";
 if (mysqli_query($conn, $sql)) {  echo "success";   }
	else {    echo "Error: " . $sql . "<br>" . mysqli_error($conn);}
	$conn->close();
}
?>
<form action="test.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image" />
    <button>Upload</button>
</form>
<?php
    echo $msg;
?>
</body>
</html>