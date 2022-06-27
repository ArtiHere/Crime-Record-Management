<?php
include("connection.php");
$id = $_GET['PID'];
$query11 = "SELECT * FROM Police where Police_ID ='$id'";
$data11 = mysqli_query($conn,$query11);
$result = mysqli_fetch_assoc($data11);

 ?>
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
        <h1>Update Officer Details</h1>
      </center>
      <hr>
      <label><b> Police ID : </b></label> <?php echo $result['Police_ID']; ?>
      <br>
      <br>
      <label><b> Police Name </b></label>
      <input type="text" name="Name" placeholder="Enter Full Name" value="<?php echo $result['Police_Name']; ?> " required >
      <label><b> Station Name </b></label>
      <input type="text" name="Station" placeholder="Enter Police Station Name" value="<?php echo $result['Police_Station']; ?> " required >

      <label><b>
        Phone Number
      </b></label>
      <input type="phone" name="Phone1" placeholder="Enter Phone Number" value="<?php echo $result['Phone_num']; ?> " required>

      <label for="Address"><b>Address</b></label>
      <textarea cols="80" rows="5" placeholder="Enter Current Address" name="Address" required>
      <?php echo $result['Address']; ?>
      </textarea>

      <label for="City"><b>City</b></label>
      <input type="text" placeholder="Enter City Name" name="City" value="<?php echo $result['City']; ?> " required>

      <label for="UserName"><b>UserName</b></label>
      <input type="text" placeholder="Enter Login User Name" name="Username" value="<?php echo $result['Police_Username']; ?>" required>

      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="Email" value="<?php echo $result['Police_Email']; ?> " required>

      <button type="submit" class="registerbtn" name="save">Update</button>
  </form>
</body>

</html>


<?php

  include("connection.php");

  if(isset($_POST['save']))
  {
  	$Police_ID = $_POST['ID'];
  	$Police_Name = $_POST['Name'];
  	$Police_Station= $_POST['Station'];
    $Police_Email = $_POST['Email'];
    $Address = $_POST['Address'];
    $City = $_POST['City'];
    $Login_Username = $_POST['Username'];

    $phone=$_POST['Phone1'];


    $query2="Update Police set Police_ID='$Police_ID',Police_Name='$Police_Name',Police_Station='$Police_Station',Phone_num='$phone',Police_Email='$Police_Email',Address='$Address',City='$City',Police_Username='$Login_Username' where Police_ID='$id'";

      if (mysqli_query($conn, $query2))
      {
  		  echo ' <script>alert("Update has been successfully Done !!")</script>';
        ?>

        <meta http-equiv ="refresh" content = "0; url = http://localhost/project/policeDetails.php" >

        <?php
    }else {
      echo "Failed to Update!";
    }
  	mysqli_close($conn);
}
?>
