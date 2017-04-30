<?php
session_start();
?>
<html>
<head>
<script type='text/javascript'>
function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script>
<style>
body{
color:#fff;
}
#wrapper
{
 text-align:center;
 margin:0 auto;
 padding:0px;
 width:995px;
}
img
{
background-image:url('profile.png');
}
#output_image
{
 max-width:300px;
}
</style>
</head>
<body bgcolor="black"">
<div id="wrapper">
<?php
echo "welcome " . $_SESSION["sname"] . ".<br>";
?>
   <form id="signup" name="freg" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
		<table align="center">       
            <tr><td><b> UPDATE YOUR PROFILE PICTURE <b></td></tr>		
			<tr><td><center><img id="output_image"/><br><br></center></td></tr>
			<tr><td><center><input type="file" name="myimage" accept="image/*" onchange="preview_image(event)"></center></td></tr>
			<tr><td><input name="" type="submit" value="Skip" />upload<input name="skip" type="submit" value="Skip" /></td></tr>
		</table>
	
</div>
</form>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hobbyhub";

$email=$_SESSION["semail"];
$conn = new mysqli($servername, $username, $password, $dbname);

if (mysqli_connect_errno())
  {  echo "Failed to connect to MySQL: " . mysqli_connect_error();  }
$msg = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $image = $_FILES['myimage']['tmp_name'];
    $img = file_get_contents($image);
    $con = mysqli_connect('localhost','root','','aaa') or die('Unable To connect');
    $sql = " UPDATE user SET propic = '$img'  WHERE email = '$email'";
	
 if (mysqli_query($conn, $sql)) { 
    $msg = 'Successfullly UPloaded';
	}
	else {    echo "Error: " . $sql . "<br>" . mysqli_error($conn);}
	$conn->close();
	}
 
if(isset($_POST['skip']))
  {header('Location: summary.php');
  }
?>
</body>
</html>
