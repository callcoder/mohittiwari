<html>
<head>
<title>Sanjivani</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
h1{
  font-family:cursive;
  color:#446600;
}
select {
                outline: 0;
                background: #f44336;;
                background-image: none;
                border:1px solid black;
            }
            .select {
                position: relative;
                display: block;
                width: 200em;
                height: 3em;
                line-height: 3;
                background: #2C3E50;
                overflow: hidden;
                border-radius: .25em;
            }
            select {
                width: 100%;
                height: 100%;
                margin: 0;
                padding: 0 0 0 .5em;
                color: #fff;
                cursor: pointer;
            }
            select::-ms-expand {
                display: none;
            }
            .select::after {
                content: '\25BC';
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                padding: 0 1em;
                background: #34495E;
                pointer-events: none;
            }
            .select:hover::after {
                color: #F39C12;
            }
            .button {
  background-color: #008CBA;;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
          </style>

</head>
<body>

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="hospital";
$conn=mysqli_connect($servername,$username,$password,$dbname);
//echo("connection");

if(isset($_POST['next']))
{
  	$opt=$_POST['slctd'];
    switch($opt)
      {
        case '1':
        ?>
        <script>
        window.location.href="delhi.php"</script>
        <?php
        break;
        case '2':
        ?>
        <script>
        window.location.href="kolkata.php"</script>
        <?php
        break;
        case '3':
        ?>
        <script>
        window.location.href="bengaluru.php"</script>
        <?php
        break;
        case '4':
        ?>
        <script>
        window.location.href="mumbai.php"</script>
        <?php
        break;
        case '5':
        ?>
        <script>
        window.location.href="chennai.php"</script>
        <?php
        break;
      }
}
 ?>

<header class="main-header">
            <nav class="navbar navbar-expand-md navbar-light p-0">
                <a class="navbar-brand" href="/">
                    <img class="img-fluid" src="hos.png" alt="logo" />
                </a>
            </nav>
        </header>
        <center>
          <h1>BOOK AN APPOINTMENT</h1><br><br>
          <form name="fm"   onsubmit="city()" method="post">
            <div class="select" style="width:600px;">
              <select name="slctd" id="slct">
                <option value="ct">Select city:</option>
                <option value="1">Delhi</option>
                <option value="2">Kolkata</option>
                <option value="3">Bengaluru</option>
                <option value="4">Mumbai</option>
                <option value="5">Chennai</option>
              </select>
            </div><br><br><br><br><br><br>
<input type="submit" class="button" value="Submit" id="bt1" name="next">
<br><br><br>
<button type="button" class="button" id="bt2">
  <a href="home.html"><b><i>Go To Home</i></b></a></button>
        </center>


      </form>
        </body>
        </html>
