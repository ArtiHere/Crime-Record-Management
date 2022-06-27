<!DOCTYPE html>
<html>

<head>
  <title>Admin Registeration</title>
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
    input[type=email]:focus,
    input[type=password]:focus,
    textarea:focus {
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
        <h1> Admin Registeration Form</h1>
      </center>
      <hr>

      <label><b> Admin Name </b></label>
      <input type="text" name="Name" placeholder="Enter Full Name" required>

      <label for="UserName"><b>UserName</b></label>
      <input type="text" placeholder="Enter Login User Name" name="Username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="Email" required>

      <label for="Address"><b>Address</b></label>
      <textarea cols="80" rows="5" placeholder="Enter Current Address" name="Address" required>
   </textarea>

      <label for="City"><b>City</b></label>
      <input type="text" placeholder="Enter City Name" name="City" required>


      <button type="submit" class="registerbtn" name="save">Register</button>
  </form>
</body>

</html>


<?php

  include("connection.php");

  if(isset($_POST['save']))
  {

  	$Admin_name = $_POST['Name'];
    $Admin_username = $_POST['Username'];
  	$Password= $_POST['psw'];
    $Admin_Email = $_POST['Email'];
    $Admin_Address = $_POST['Address'];
    $City = $_POST['City'];

  	$query2="INSERT INTO Admin (Admin_name,Admin_username,Password,Admin_Email,Admin_Address,City) VALUES ('$Admin_name', '$Admin_username','$Password','$Admin_Email','$Admin_Address','$City')";

      if (mysqli_query($conn, $query2))
      {
  		echo ' <script>alert("New Admin Registration successfully Done !!")</script>';
      ?>

      <meta http-equiv ="refresh" content = "0; url = http://localhost/project/adminPage.php" >

      <?php

  	}
  	mysqli_close($conn);
}
?>
