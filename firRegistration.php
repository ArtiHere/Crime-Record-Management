<!DOCTYPE html>
<html>

<head>
  <title>FIR Registeration</title>
  <style media="screen">
    body {
      font-family: Calibri, Helvetica, sans-serif;
      background-image: linear-gradient(135deg, #005555, #069A8E, #A1E3D8);
      margin: 50px 400px;
    }

    .container {
      padding: 50px;;
      background-color: #A1E3D8;
    }

    input[type=text],
    input[type=date],
    textarea {
      width: 95%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: #f1f1f1;
    }

    input[type=text]:focus,
    input[type=date]:focus,
    textarea:focus {
      background-color: #F9CEEE;
      outline: none;
    }

    div {
      padding: 10px 0;
      margin-bottom: 15px;
    }

    hr {
      border: 1px solid #f1f1f1;
      margin-bottom: 25px;
    }

    .registerbtn {
      background-color: #4CAF50;
      color: white;
      padding: 16px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
      font-size: 20px;
    }

    .registerbtn:hover {
      opacity: 1;
      background-color: #4CAA90;
      font-weight: 600;
    }
  </style>
</head>

<body>
  <form method="post">
    <div class="container">
      <center>
        <h1> FIR Registeration Form</h1>
      </center>
      <hr>

      <div>
        <label><b>
          FIR Status
        </b></label><br><br>
        <input type="radio" value="Valid" name="FIR_Status" checked> Valid
        <input type="radio" value="Invalid" name="FIR_Status"> Invalid
      </div>


      <label for="Address"><b>Description</b></label>
      <textarea cols="80" rows="5" placeholder="Enter FIR Description" name="Description" required></textarea>

      <label><b>Reported Date </b></label>
      <input type="Date" placeholder="Enter FIR Reported Date"  Name = "Registration_Date" required >

      <button type="submit" class="registerbtn" name="save">Register</button>

  </form>
</body>

</html>


<?php

  include("connection.php");

  if(isset($_POST['save']))
  {
  	$FIR_Status = $_POST['FIR_Status'];
  	$Description = $_POST['Description'];
  	$Date = $_POST['Registration_Date'];

  	$query1="INSERT INTO fir (FIR_Status,FIR_Description, date_reported) VALUES ('$FIR_Status','$Description','$Date')";
      if (mysqli_query($conn, $query1))
      {
  		echo ' <script>alert("New Registration successfully Done !!")</script>';
      ?>

      <meta http-equiv ="refresh" content = "0; url = http://localhost/project/officerPage.php" >

      <?php
  	}
  	mysqli_close($conn);
}
?>
