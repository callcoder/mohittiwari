<?php
$servername="localhost";
$username="root";
$password="";
$dbname="hospital";
$conn=mysqli_connect($servername,$username,$password,$dbname);

if(isset($_POST['sbt']))
{
	$city=$_POST['slc'];
	$dat=$_POST['dt'];
	$logid=$_POST['lg'];
	$btest=$_POST['c'];

	$query1="insert into `pathlab` (`city`, `dte`, `pt_id`, `test`) VALUES('$city','$dat','$logid','$btest') ";
	$result=mysqli_query($conn,$query1);
	if($result)
	{
echo '<script>alert("Appointment booked successfully. Further details will be sent to your email-id")</script>';
?>
<script>
window.location.href="home.html"</script>
<?php
}
else {
	echo '<script>alert("Please Try Again")</script>';
}
}
?>


<html>
<head>
  <link rel="icon" href="hicon.jpg">
  <title>
    SANJIVANI PATHLAB
  </title>
  <style>
  h1{
    font-family:cursive;
    color:red;
  }
  body{
  	background-repeat: no-repeat;
 }
 div{
   font-size:15px;
   background:rgb(230, 255, 255)
 }
 form{
   width:30%;
   background-color:red;
   color:white;
   font-weight: bold;
   font-size: 17px;
 }
 table{
   color:white;
   font-weight: bold;
   font-size: 17px;
   text-align: center;
 }
 button {
     background-color: #4CAF50;
     color: white;
     padding: 14px 20px;
     margin: 8px 0;
     border: none;
     cursor: pointer;
     width: 30%;
 }

 button:hover {
     opacity: 0.8;
 }

  </style>
  </head>
  <body background="pathb.jpg">
    <center>
    <div><h1>SANJIVANI PATHLAB</h1></div>
    <form method="post">
      <br>
      <table>
        <center>
        <tr>
          <td>Select your city:</td>
    <td><select name="slc">
      <option value="ct">Select city:</option>
      <option value="Delhi">Delhi</option>
      <option value="Kolkata">Kolkata</option>
      <option value="Bengaluru">Bengaluru</option>
      <option value="Mumbai">Mumbai</option>
      <option value="Chennai">Chennai</option>
    </select></td></tr>
    <tr>
    <td>Enter date of appointment:</td>
  <td><input type="date" name="dt"></td>
</tr>
<tr>
<td>Enter Login Id:</td>
<td><input type="text" name="lg" required placeholder="Enter login id"></td></tr></center>
</center>
</table><br><br>
    <u>Select the blood test:</u>
    <br><br>
    <input type="checkbox" nm="c[]" value="Complete Blood Count">Complete Blood Count<br><br>
    <input type="checkbox" nm="c[]" value="Prothrombin Time">Prothrombin Time<br><br>
    <input type="checkbox" nm="c[]" value="Basic Metabolic Panel">Basic Metabolic Panel<br><br>
    <input type="checkbox" nm="c[]" value="Comprehensive Metabolic Panel">Comprehensive Metabolic Panel<br><br>
    <input type="checkbox" nm="c[]" value="Lipid Panel">Lipid Panel<br><br>
    <input type="checkbox" nm="c[]" value="Liver Panel">Liver Panel<br><br>
    <input type="checkbox" nm="c[]" value="Thyroid Stimulating Hormone">Thyroid Stimulating Hormone<br><br>
    <input type="checkbox" nm="c[]" value="Haemoglobin A1C">Haemoglobin A1C<br><br>
    <input type="checkbox" nm="c[]" value="Urinalysis">Urinalysis<br><br>
    <input type="checkbox" nm="c[]" value="Cultures">Cultures<br><br>
    <button type="submit" name="sbt">SUBMIT</button>
    <button type="reset">RESET</button><br>
    <button type="button" name="bt1" >	<a href="home.html"><b><i>Go To Home</i></b></a></button>
  </form>
  </center>
  </body>
  </html>
