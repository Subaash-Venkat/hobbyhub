<!DOCTYPE html><?php session_start();?>
<html>
<head>
<title>User Login</title>
</head>
<body>
<form action="login.php" method="post">
<table width="500″ align="center" bgcolor="skyblue">
<tr align="center">
<td colspan="3"><h2>User Login</h2></td>
</tr>
<tr>
<td align="right"><b>Email</b></td>
<td><input type="text" name="email" required="required" /></td>
</tr>
<tr>
<td align="right"><b>Password:</b></td>
<td><input type="password" name="pass" required="required"></td>
</tr>
<tr align="center">
<td colspan="3">
<input type="submit" name="login" value="Login"/>
</td>
</tr>
</table>
</form>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hobbyhub";

$con = new mysqli($servername, $username, $password, $dbname);

if (mysqli_connect_errno())
{ echo "MySQLi Connection was not established: " . mysqli_connect_error();}

if(isset($_POST['login'])){
$email = mysqli_real_escape_string($con,$_POST['email']);
$pass = mysqli_real_escape_string($con,$_POST['pass']);
$sel_user = "select * from user where email='$email' AND password='$pass'";
$run_user = mysqli_query($con, $sel_user);
$check_user = mysqli_num_rows($run_user);

if($check_user>0){
$_SESSION['semail']=$email;
 while($row = $run_user ->fetch_assoc()) {
      $_SESSION["sname"]= $row['username'];        
   }
   
echo "<script>window.open('main.php','_self')</script>";
}
else {
echo "<script>alert('Email or password is not correct, try again!')</script>";
}
}
?>
</body>
</html>