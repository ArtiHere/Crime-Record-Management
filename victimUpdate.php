<?php
include("connection.php");
$id = $_GET['VID'];
$query12 = "SELECT * FROM victim where Victim_ID ='$id'";
$data12 = mysqli_query($conn,$query12);
$result = mysqli_fetch_assoc($data12);

 ?>
<!DOCTYPE html>
<html>

<head>
  <title>Update Victim Details</title>
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
        <h1>Update Victim Details</h1>
      </center>
      <hr>
      <label><b> Victim ID : </b></label> <?php echo $result['Victim_ID']; ?>
      <br>
      <br>
      <label><b> Victim Name </b></label>
      <input type="text" name="Victim_Name" placeholder="Enter Victim Name" value="<?php echo $result['Victim_Name']; ?> " required >
      <label><b> Crime ID </b></label>
      <input type="text" name="crime_ID" placeholder="Enter Crime ID" value="<?php echo $result['crime_ID']; ?> " required >
      <label><b> National ID </b></label>
      <input type="text" name="National_ID" placeholder="Enter National ID" value="<?php echo $result['National_ID']; ?> " required >

      <label><b> Address </b></label>
      <input type="text" name="address" placeholder="Enter Address" value="<?php echo $result['Address']; ?> " required >

      <label><b> State </b></label>
      <input type="text" name="State" placeholder="Enter State " value="<?php echo $result['State']; ?> " required >
      <label><b> Country</b></label>
      <input type="text" name="Country" placeholder="Enter Country " value="<?php echo $result['Country']; ?> " required >

      <label><b> Pincode </b></label>
      <input type="text" name="Pincode" placeholder="Enter pincode of city" value="<?php echo $result['Pincode']; ?> " required >

      <button type="submit" class="registerbtn" name="save">Update</button>
  </form>
</body>

</html>


<?php

  include("connection.php");

  if(isset($_POST['save']))
  {
  	$Victim_Name = $_POST['Victim_Name'];
    $National_ID= $_POST['National_ID'];
    $address= $_POST['address'];
    $State= $_POST['State'];
    $Country= $_POST['Country'];
    $Pincode= $_POST['Pincode'];

    $query2="UPDATE Victim set Victim_Name='$Victim_Name', National_ID='$National_ID', address='$address', State='$State',Country = '$Country',Pincode='$Pincode' where Victim_ID='$id'";

      if (mysqli_query($conn, $query2))
      {
  		  echo ' <script>alert("Update has been successfully Done !!")</script>';
        ?>

        <meta http-equiv ="refresh" content = "0; url = http://localhost/project/victimDetails.php" >

        <?php
    }else {
      echo "Failed to Update!";
    }
  	mysqli_close($conn);
}
?>
