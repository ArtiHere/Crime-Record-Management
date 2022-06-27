<?php
include("connection.php");
$id = $_GET['PID'];
$query12 = "SELECT * FROM Admin where Admin_ID ='$id'";
$data12 = mysqli_query($conn,$query12);
$result = mysqli_fetch_assoc($data12);

 ?>
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
        <h1>Update Admin Details</h1>
      </center>
      <hr>
      <label><b> Admin ID : </b></label> <?php echo $result['Admin_ID']; ?>
      <br><br>
      <label><b> Admin Name </b></label>
      <input type="text" name="Name" placeholder="Enter Full Name" value="<?php echo $result['Admin_name']; ?> " required >
      <label><b> Username </b></label>
      <input type="text" name="Username" placeholder="Enter User Name" value="<?php echo $result['Admin_Username']; ?> " required >
      <label><b> Password </b></label>
      <input type="text" name="password" placeholder="Enter Password" value="<?php echo $result['Password']; ?> " required >
      <label><b> Email ID </b></label>
      <input type="email" name="emailId" placeholder="Enter Email ID" value="<?php echo $result['Admin_Email']; ?> " required >
      <label><b> Address </b></label>
      <input type="text" name="address" placeholder="Enter Address" value="<?php echo $result['Admin_Address']; ?> " required >

      <label><b> City </b></label>
      <input type="text" name="city" placeholder="Enter City" value="<?php echo $result['City']; ?> " required >

      <button type="submit" class="registerbtn" name="save">Update</button>
  </form>
</body>

</html>


<?php

  include("connection.php");

  if(isset($_POST['save']))
  {
  	$Admin_Name = $_POST['Name'];
  	$Username= $_POST['Username'];
  	$Password= $_POST['password'];
    $emailId= $_POST['emailId'];
    $address= $_POST['address'];
    $city= $_POST['city'];

    $query2="Update Admin set Admin_Name='$Admin_Name', Admin_Username='$Username', Password='$Password', Admin_Email='$emailId', Admin_Address='$address', city='$city' where Admin_ID='$id'";

      if (mysqli_query($conn, $query2))
      {
  		  echo ' <script>alert("Update has been successfully Done !!")</script>';
        ?>

        <meta http-equiv ="refresh" content = "0; url = http://localhost/project/adminDetails.php" >

        <?php
    }else {
      echo "Failed to Update!";
    }
  	mysqli_close($conn);
}
?>
