<?php
$servername="localhost";
$username="root";
$password="";
$dbname="hospital";
$conn=mysqli_connect($servername,$username,$password,$dbname);
//echo("connection");

if(isset($_POST['Login'])){

	$user=$_POST['user'];
	$pass=$_POST['pass'];

	$query="SELECT email,password FROM `register` WHERE email='".$user."'";
	$result=mysqli_query($conn,$query);
	$row=mysqli_fetch_array($result);
if($row["email"]==$user && $row["password"]==$pass)
{
echo '<script>alert("Successfully logged in")</script>';
?>
<script>
window.location.href="appt1.php"</script>
<?php
}
else 
{
	echo '<script>alert("Invalid user")</script>';
}
}
?>


<html>
<head>
<meta charset="utf-8">
<title>Login page</title>
<style>
    /*set border to the form*/

    form {
        border: 3px solid #f1f1f1;
    }

    input[type=email],
    input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    button:hover {
        opacity: 0.8;
    }


    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }

		.hmpg {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }

    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
    }


    img.avatar {
        width: 40%;
        border-radius: 50%;
    }

    .container {
        padding: 16px;
    }


    span.psw {
        float: right;
        padding-top: 16px;
    }
		form{
			width:50%;
			background-color:white;
		}
body{
	background-repeat: no-repeat;
	width:90%;
	height:90%;
}
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }

        .cancelbtn {
            width: 100%;
        }
    }
</style>
</head>

<body background="back1.jpg">


<center><br><br><br><br><br><br>
	    <form method="post" >
				 <div class="imgcontainer">

	        </div>

	        <div class="container">
	            <label><b>Username/Email Id</b></label>
	            <input type="email" placeholder="Enter Username" name="user" required>

	            <label><b>Password</b></label>
	            <input type="password" placeholder="Enter Password" name="pass" required>
<button type="submit" name="Login">Login</button>
	            <a href="signup.php"><i>Not a member? Register  here</i></a>
							<br><br>
								<a href="home.html"><i>GoTo Home</i></a>
	        </div>

	        <div class="container" style="background-color:#f1f1f1">
	           <center> <button type="reset" class="cancelbtn">Cancel</button><br>


	        </div>
	    </form>
		</center>
</body>
</html>
