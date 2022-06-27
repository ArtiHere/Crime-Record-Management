<!DOCTYPE html>
<html>

<head>
  <title>Police Officer Registeration</title>
  <style media="screen">
    body {
      font-family: Calibri, Helvetica, sans-serif;
      background-image: linear-gradient(135deg, #005555, #069A8E, #A1E3D8);
      margin: 50px 400px;
    }

    .container {
      padding: 50px;
      background-color: #A1E3D8;
    }

    input[type=text],
    input[type=password],
    input[type=phone],
    input[type=email],
    textarea {
      width: 95%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: #f1f1f1;
    }

    input[type=text]:focus,
    input[type=phone]:focus,
    input[type=email]:focus,
    input[type=password]:focus,
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
        <h1> Police Officer Registeration Form</h1>
      </center>
      <hr>
      <label><b> Police Name </b></label>
      <input type="text" name="Name" placeholder="Enter Full Name" required >
      <label><b> Station Name </b></label>
      <input type="text" name="Station" placeholder="Enter Police Station Name" required >

      <div>
        <label><b>
          Gender
        </b></label><br><br>
        <input type="radio" value="Male" name="Gender" checked> Male
        <input type="radio" value="Female" name="Gender"> Female
      </div>
      <label><b>
        Phone Number
      </b></label>
      <input type="phone" name="Phone1" placeholder="Enter Phone Number" size="10"  required>

      <label for="Address"><b>Address</b></label>
      <textarea cols="80" rows="5" placeholder="Enter Current Address" name="Address" required>
   </textarea>

      <label for="City"><b>City</b></label>
      <input type="text" placeholder="Enter City Name" name="City" required>

      <label for="UserName"><b>UserName</b></label>
      <input type="text" placeholder="Enter Login User Name" name="Username" required>

      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="Email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button type="submit" class="registerbtn" name="save">Register</button>
  </form>
</body>

</html>


<?php

  include("connection.php");

  if(isset($_POST['save']))
  {
  	$Police_Name = $_POST['Name'];
  	$Police_Station= $_POST['Station'];
  	$Gender = $_POST['Gender'];
    $Police_Email = $_POST['Email'];
    $Address = $_POST['Address'];
    $City = $_POST['City'];
    $Login_Username = $_POST['Username'];
  	$Password= $_POST['psw'];

    $phone1=$_POST['Phone1'];

  	$query1="INSERT INTO Police (Police_Name,Police_Station,Gender,Phone_num,Police_Email,Address,City,Police_Username,Password) VALUES ('$Police_Name', '$Police_Station','$Gender','$phone1','$Police_Email','$Address','$City','$Login_Username','$Password')";

      if (mysqli_query($conn, $query1))
      {
  		echo ' <script>alert("New Registration successfully Done !!")</script>';
      ?>

      <meta http-equiv ="refresh" content = "0; url = http://localhost/project/adminPage.php" >

      <?php
  	}
  	mysqli_close($conn);
}
?>
