<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>HOBBY HUB</title>
  <script type="text/javascript">
function val1()
{
var a = document.freg.name.value;
if(a=="")
{
document.freg.name.focus();
document.getElementById("demo").innerHTML="Please Enter Your Name";
return false;
}
else if(!isNaN(a))
{
document.freg.name.select();
document.getElementById("demo").innerHTML="Please Enter valid Name";
return false;
}
else if ((a.length < 3) || (a.length > 15))
{
document.freg.name.select();
document.getElementById("demo").innerHTML="Please Enter valid Name";
return false;
}
else{ document.getElementById("demo").innerHTML="";}
} 

function val2() 
{ 
var emailfilter=/^\w+[\+\.\w-]*@([\w-]+\.)*\w+[\w-]*\.([a-z]{2,4}|\d+)$/i 
var b=emailfilter.test(document.freg.email.value); 
if(b=="")
{
document.freg.email.select();
document.getElementById("demo1").innerHTML="Please Enter Your Email ID";
return false;
}
else if(b==false) 
{ 
//alert("Please Enter a valid Mail ID"); 
document.getElementById("demo1").innerHTML="Please Enter valid Email ID";
document.freg.email.focus(); 
return false; 
} 
else{document.getElementById("demo1").innerHTML="";} 
} 

function val3() 
{ 
var a = document.freg.pass.value; 
if(a=="") 
{ 
document.getElementById("demo2").innerHTML="Please Enter password";
document.freg.rpass.focus(); 
return false;                                                                                                                                               
} 
else if ((a.length < 4) || (a.length > 8)) 
{ 
document.getElementById("demo2").innerHTML="Password must be 4 - 8 characters";
document.freg.rpass.select(); 
return false; 
} 
else{document.getElementById("demo2").innerHTML="";}
} 

function matchpass(){ 
var firstpassword=document.freg.pass.value; 
var secondpassword=document.freg.rpass.value; 

if(firstpassword != secondpassword){ 
document.getElementById("demo3").innerHTML="password must be same!"; 
return false; 
} else{document.getElementById("demo3").innerHTML="";}
} 

</script>
</head>
<body bgcolor="yellow">
  <form id="signup" name="freg" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
                <h1><center>Create an Acccount</center></h1>
				<table align="center">
				<tr><td><b>NAME</b></td>
				<td><input name="name" type="text" placeholder="Your good name" required="required" /></td></tr>
				<tr><td><center><p id="demo">  </p></center></td></tr>
				
				<tr><td><b>EMAIL ID</b></td>
				<td><input name="email" type="email" placeholder="your Email address" onclick="return val1()" required="required" /></td></tr>
				<tr><td><center><p id="demo1">  </p></center></td></tr>
                
				<tr><td><b>PASSWORD</b></td>
				<td><input name="pass" type="password" placeholder="Enter password" onclick="return val2()" required="required" /></td></tr>
				<tr><td><center><p id="demo2">  </p></center></td></tr>
                
				<tr><td><b>CONFIRM PASSWORD</b></td>
				<td> <input name="rpass" type="password" placeholder="Confirm password" onclick="return val3()" required="required" /></td></tr>
				<tr><td><center><p id="demo3">  </p></center></td></tr>
				
				<tr><td><b>TOWN</b></td>
				<td><input name="location" type="text" placeholder="Enter location" onclick="return val4()" required="required" /></td></tr>
				<tr><td><center><p id="demo4">  </p></center></td></tr>
				
				<tr><td><b>GENDER</b></td>
				<td><input type="radio" name="gender" value="Male" checked > Male <input type="radio" name="gender" value="Female"> Female</td></tr>
				<tr><td><input name="submit" type="submit" value="Register" /></td></tr>

                </table>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hobbyhub";

$conn = new mysqli($servername, $username, $password, $dbname);

if (mysqli_connect_errno())
  {  echo "Failed to connect to MySQL: " . mysqli_connect_error();  }
  if(isset($_POST['submit']))
{   $name= $_POST["name"];
	$email=$_POST["email"];
	$_SESSION["sname"] = $name;
	$_SESSION["semail"] = $email;
	$pass=$_POST["pass"];
	$loc=$_POST["location"];
	$gender=$_POST["gender"];
    $sql = "INSERT INTO user (username, propic, email, password, gender, location, summary)VALUES ('$name', '', '$email', '$pass', '$gender', '$loc', '')";
	if (mysqli_query($conn, $sql)) {  header('Location: summary.php');   }
	else {    echo "Error: " . $sql . "<br>" . mysqli_error($conn);}
	$conn->close();
} ?>
   </form>
</body>
</html>