<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="DESIGN.CSS">
</head>

<body class="reg" >
		<div class="heading"><h1><a href="INDEX PAGE.HTML">ANIME CLUB</a></h1></div>
	<!-- Top navigation -->
<div class="topnav">
 <a href="about.html">About</a>
 <a href="anime blogs.html">Anime Blogs</a>
 <a href="registration.php">Registration</a>
 <a href="contact.html">Contact</a>
</div>

	<div class="form">
<center >
	<form method="post" action="registration.php">
		<table  class="table" border="3" style="width:400px;" >
			
			<tr><td style="background-color: black;color: white;">ID:</td><td><input type="text" name="Id" placeholder="Enter ID"></td></tr>
			<tr><td style="background-color: black;color: white;">First Name:</td><td><input type="text" name="fname" placeholder="Enter First Name"></td></tr>
			<tr><td style="background-color: black;color: white;">Last Name:</td><td><input type="text" name="lname" placeholder="Enter Last name"></td></tr>
			<tr><td style="background-color: black;color: white;">Email:</td><td><input type="text" name="email" placeholder="Enter Email"></td></tr>
			<tr><td style="background-color: black;color: white;">Gender:</td></tr>
			<tr><td style="background-color: black;color: white;">Male</td><td><input type="radio" name="gender" value="male"></td></tr>
			<tr><td style="background-color: black;color: white;">Female</td><td><input type="radio" name="gender" value="female"></td></tr>
		    	</table>
		<input type="submit" name="submit" value="Register">
	</form>	
</center>
</div>

<!--footer starts here-->
<div class="footer">
	<p>MADE BY SYED MOHAMMAD MEHMOOD</p>
</div>
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","anime club members");
if(!$con)
{
	die("Connection not established".mysqli_connect_error());
} 
 if(isset($_POST['submit']))
 {
 	$idnum=$_POST['Id'];
 	$fname=$_POST['fname'];
 	$lname=$_POST['lname'];
 	$mail=$_POST['email'];
 	$gender=$_POST['gender'];
 	$sql="insert into weebs(ID,Firstname,Lastname,Email,Gender)values('$idnum','$fname','$lname','$mail','$gender')";

 if(mysqli_query($con,$sql))
 {
 	echo "<script>alert('Registration Successful')</script>";
 }
 else
 {
 	echo "Registration failed".mysqli_error($con);
 }

 mysqli_close($con);
}
 ?>