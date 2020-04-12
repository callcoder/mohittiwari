<?php
$servername="localhost";
$username="root";
$password="";
$dbname="hospital";
$conn=mysqli_connect($servername,$username,$password,$dbname);

if(isset($_POST['Reg']))
{
	$fname=$_POST['fnm'];
	$lname=$_POST['lnm'];
	$email=$_POST['eml'];
	$pass=$_POST['pwd'];
	$age=$_POST['ag'];
	$gender=$_POST['gnd'];
	$bgp=$_POST['bd'];
	$contact=$_POST['phn'];
	$query1="insert into `register` (`fname`, `lname`, `email`, `password`, `age`, `gender`, `blood`, `mobile`) VALUES('$fname','$lname','$email','$pass','$age','$gender','$bgp','$contact') ";
	$result=mysqli_query($conn,$query1);
	if($result)
	{
echo '<script>alert("Registered successfully")</script>';
?>
<script>
window.location.href="home.html"</script>
<?php
}
else {
	echo '<script>alert("Invalid user details!")</script>';
}
}
?>

<html>
<head>
	<style>
	fieldset{
		width:40%;
		background-color: black;
	}
	table{
		color:white;
		font-weight: bold;
		font-size: 20px;
	}
	button:hover {
			opacity: 0.8;
	}


	button {
			width: auto;
			padding: 10px 18px;
			background-color: #f44336;
			font-weight:bold;
			color:white;
	}


	</style>
<meta charset="utf-8">
<title>Registration page</title>

</head>

<body background="back1.jpg" font-color="red">
	<font color="">
	<center>
<br><br><br><br>
<fieldset >

	<form method="post" >
		<table  border='0' width='480px' cellpadding='0' cellspacing='24' align='center' >

			<tr>
				<td>First Name:</td>
				<td><input type="text" name="fnm" placeholder="Enter first name" required></td>
			</tr>
			<tr>
				<td>Last Name:</td>
				<td><input type="text" name="lnm" placeholder="Enter last name"  required></td>
			</tr>
			<tr>
				<td>Username/email id:</td>
				<td><input type="email" name="eml" placeholder="Enter email"  required></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="pwd" placeholder="Enter password"  required></td>
			</tr>
			<tr>
					<td>Age:</td>
					<td><input type="number" name="ag" placeholder="Enter your age"  required></td>
			</tr>
			<tr>
					<td>Gender:</td>
					<td><input type="radio" name="gnd" value="male">Male
						<input type="radio" name="gnd" value="female">Female
					</td>
			</tr>
			<tr>
				<td>
					Blood Group:</td>
					<td> <select name="bd"  required>
					<option>A+</option>
					<option>B+</option>
					<option>AB+</option>
						<option>O+</option>
						<option>A-</option>
						<option>B-</option>
						<option>AB-</option>
							<option>O-</option>
					</select>
				</td>
			</tr>
			<tr>
					<td>Contact no.:</td>
					<td><input type="number" name="phn" placeholder="Enter mobile number"  required></td>
			</tr>
		</table>
		<br><br><br>
		<button type="submit" name='Reg'>Register</button><br><br>
		<a href="log.php"><i><b>Already member? Login here</b></i></a>
		<br><br>
			<a href="home.html"><b><i>Go To Home</i></b></a>
	</form>
</center>
</fieldset>
</font>
</body>
</html>
