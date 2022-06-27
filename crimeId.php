<!DOCTYPE html>
<html>

<head>
  <title>Crime ID Name</title>
  <style media="screen">
    body {
      font-family: Calibri, Helvetica, sans-serif;
      background-color: #4444;
      margin: 50px 400px;
    }

    .container {
      padding: 50px;
      background-color: #F7ECDE;
    }

    input[type=text]{
      width: 95%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: #f1f1f1;
    }

    input[type=text]:focus{
      background-color: #ffddee;
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
      background-color: #12CC90;
      font-weight: 600;
    }
  </style>
</head>

<body>
  <form method="post">
    <div class="container">
      <center>
        <h1> Crime ID - Name</h1>
      </center>
      <hr>
      <label><b> Crime ID </b></label>
      <input type="text" name="ID" placeholder="Enter crime ID" size="15" required>

      <label><b> crime Name </b></label>
      <input type="text" name="Name" placeholder="Enter crime Name" required>

      <label ><b>Discription</b></label>
      <input type="text" placeholder="Enter discription" name="Discription" required>

      <button type="submit" class="registerbtn" name="save">ADD</button>
  </form>
</body>

</html>


<?php

  include("connection.php");
  if(isset($_POST['save']))
  {
  	$crime_ID = $_POST['ID'];
  	$Crime_Name = $_POST['Name'];
    $crime_Description = $_POST['Discription'];

  	$query2="INSERT INTO Crime (crime_ID,Crime_Name,crime_Description) VALUES ('$crime_ID','$Crime_Name', '$crime_Description')";

      if (mysqli_query($conn, $query2))
      {
  		echo ' <script>alert("Crime log added")</script>';
      ?>

      <meta http-equiv ="refresh" content = "0; url = http://localhost/project/adminPage.php" >

      <?php
  	  }else{
      	echo ' <script>alert("Judge with given ID has been aleready registered !!")</script>';
      }
  	mysqli_close($conn);
}
?>
