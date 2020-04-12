<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="hicon.jpg">
<title>Chennai</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script>
  function appt()
  {
    alert("To book an appointment, call 9663918822");
  }
  </script>
  <style>
  .button {
  background-color: black;
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
  <div class="container">

<br><br>
    <div class="card" style="width:400px">
      <center>
      <img class="card-img-top" src="chedr1.jpg" alt="Card image" style="width:90%">
    </center>
      <div class="card-body">
        <h4 class="card-title">Dr Atul</h4>
        <p class="card-text">
              DIRECTOR<br>
              BLOOD DISORDER/HAEMATOLOGY<br>
              SANJIVANI HOSPITAL,CHENNAI
        </p>
        <center><a href="#" class="btn btn-primary stretched-link" onClick="return appt(); return false;">Book Appointment</a></center>
      </div>
</div>

      <br><br><br>
      <div class="card" style="width:400px">
        <center><img class="card-img-top" src="chedr2.jpg" alt="Card image" style="width:90%"></center>
        <div class="card-body">
          <h4 class="card-title">Dr Armaan</h4>
          <p class="card-text">
            DIRECTOR<br>
            ALLERGY AND CLINICAL IMMUNOLOGY<br>
            SANJIVANI HOSPITAL,CHENNAI
          </p>
          <center><a href="#" class="btn btn-primary stretched-link" onClick="return appt(); return false;">Book Appointment</a></center>
        </div>
  </div>

  <br><br><br>
  <div class="card" style="width:400px">
    <center><img class="card-img-top" src="chedr3.jpg" alt="Card image" style="width:90%"></center>
    <div class="card-body">
      <h4 class="card-title">Dr Ranjan</h4>
      <p class="card-text">
        DIRECTOR<br>
        NON INVASIVE CARDIOLOGY<br>
        SANJIVANI HOSPITAL,CHENNAI
      </p>
      <center><a href="#" class="btn btn-primary stretched-link" onClick="return appt(); return false;">Book Appointment</a></center>
    </div>
</div>
<button type="button" class="button" id="bt2">
<a href="appt1.php"><b><i>Go Back</i></b></a>
</body>
</html>
