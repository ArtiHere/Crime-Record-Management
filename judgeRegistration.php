<!DOCTYPE html>
<html>

<head>
  <title>Judge Registeration</title>
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
        <h1> Judge Registeration Form</h1>
      </center>
      <hr>

      <label><b> Judge Name </b></label>
      <input type="text" name="Name" placeholder="Enter Full Name" required>

      <label for="Court"><b>Court</b></label>
      <input type="text" placeholder="Enter Court Name" name="Court" required>

      <button type="submit" class="registerbtn" name="save">Register</button>
  </form>
</body>

</html>


<?php

  include("connection.php");
  if(isset($_POST['save']))
  {
  	$Judge_Name = $_POST['Name'];
    $Court = $_POST['Court'];

  	$query2="INSERT INTO Judge (Judge_Name,Court) VALUES ('$Judge_Name', '$Court')";

      if (mysqli_query($conn, $query2))
      {
  		echo ' <script>alert("New Judge Registration successfully Done !!")</script>';
      ?>

      <meta http-equiv ="refresh" content = "0; url = http://localhost/project/adminPage.php" >

      <?php
  	  }else{
      	echo ' <script>alert("Judge with given ID has been aleready registered !!")</script>';
      }
  	mysqli_close($conn);
}
?>
