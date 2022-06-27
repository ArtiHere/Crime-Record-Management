<!DOCTYPE html>
<html>

<head>
  <title>Add Victim</title>
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
    input[type=number],
    textarea {
      width: 95%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: #f1f1f1;
    }

    input[type=text]:focus,
    input[type=number]:focus,
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
        <h1>Add Victim Details</h1>
      </center>
      <hr>

      <label><b> Victim Name </b></label>
      <input type="text" name="Victim_Name" placeholder="Enter Victim Name" required >
      <label><b> Crime ID </b></label>
      <input type="text" name="crime_ID" placeholder="Enter Crime ID" size="15" required >


      <label for="National_ID"><b> National_ID </b></label>
      <input type="text" placeholder="Enter National ID" name="National_ID" required>
     </textarea>

      <label for="Victim_Birthdate"><b> Birth Date </b></label><br />
      <input type="date" placeholder="Enter Birth Date" name="Victim_Birthdate" required>

       <br /><br />
      <label for="Address"><b> Address </b></label>
      <input type="text" placeholder="Enter Address" name="VAddress" required>


      <label for="State"><b> State </b></label>
      <input type="text" placeholder="Enter State" name="VState" required>


      <label for="Country"><b> Country </b></label>
      <input type="text" placeholder="Enter Country Name" name="VCountry" required>


      <label for="PinCode"><b> Pin_Code </b></label>
      <input type="number" placeholder="Enter Pin-Code of city" name="VPnumber" required>


      <button type="submit" class="registerbtn" name="save">Register</button>
  </form>
</body>

</html>


<?php

  include("connection.php");

  if(isset($_POST['save']))
  {
    $Victim_Name = $_POST['Victim_Name'];
    $crime_ID = $_POST['crime_ID'];
    $National_ID = $_POST['National_ID'];
    $Victim_Birthdate = $_POST['Victim_Birthdate'];
  	$VAddress = $_POST['VAddress'];
  	$VState = $_POST['VState'];
    $VCountry = $_POST['VCountry'];
    $Vpin_code = $_POST['VPnumber'];

  	$query1="INSERT INTO Victim (Victim_Name,crime_ID,National_ID, Victim_Birthdate, Address,State,Country,Pincode) VALUES ( ' $Victim_Name','$crime_ID','$National_ID','$Victim_Birthdate','$VAddress','$VState','$VCountry','$Vpin_code')";

      if (mysqli_query($conn, $query1))
      {
  		echo ' <script>alert("Victim Details added successfully")</script>';
      ?>

      <meta http-equiv ="refresh" content = "0; url = http://localhost/project/OfficerPage.php" >

      <?php
  	}
  	mysqli_close($conn);
}
?>
