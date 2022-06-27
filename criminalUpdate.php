<?php
include("connection.php");
$id = $_GET['CID'];
$query11 = "SELECT * FROM Criminal where Criminal_ID ='$id'";
$data11 = mysqli_query($conn,$query11);
$result = mysqli_fetch_assoc($data11);
$CCID=$result['Criminal_ID'];
 ?>
<!DOCTYPE html>
<html>

<head>
  <title>Update Criminal Details</title>
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
    select{
      margin: 20px 0 0 50px;
      padding: 16px 20px;
      margin: 8px 0;
      cursor: pointer;
      width: 50%;
      font-size: 15px;
    }
    .CID_fix{
      font-size: 20px;
    }
  </style>
</head>

<body>
  <form method="post">
    <div class="container">
      <center>
        <h1>Update Criminal Details</h1>
      </center>
      <hr>
      <div class="CID_fix">
        <label><b> Criminal ID : </b></label><?php echo $result['Criminal_ID']; ?>
      </div>
      <br>
      <br>
      <label><b> Criminal Name </b></label>
      <input type="text" name="Name" placeholder="Enter Criminal Name" value="<?php echo $result['Criminal_name']; ?> " required >


      <label for="Address"><b>Address</b></label>
      <textarea cols="80" rows="3" placeholder="Enter Address" name="Address" value="<?php echo $result['Address']; ?> " required><?php echo $result['Address']; ?>
      </textarea>

      <div>
        <label><b>
          State
        </b></label><br>
        <select class="selectstate" name="State">
          <option value="-" <?php if ($result['State'] == '-') echo 'selected="selected"'; ?> >-</option>
          <option value="Maharashtra" <?php if ($result['State'] == 'Maharashtra') echo 'selected="selected"'; ?> >Maharashtra</option>
          <option value="Tamil Nadu" <?php if ($result['State'] == 'Tamil Nadu') echo 'selected="selected"'; ?> >Tamil Nadu</option>
          <option value="Goa" <?php if ($result['State'] == 'Goa') echo 'selected="selected"'; ?> >Goa</option>
          <option value="Bihar" <?php if ($result['State'] == 'Bihar') echo 'selected="selected"'; ?> >Bihar</option>
          <option value="Gujarat" <?php if ($result['State'] == 'Gujarat') echo 'selected="selected"'; ?> >Gujarat</option>
          <option value="Karnataka" <?php if ($result['State'] == 'Karnataka') echo 'selected="selected"'; ?> >Karnataka</option>
          <option value="Punjab" <?php if ($result['State'] == 'Punjab') echo 'selected="selected"'; ?> >Punjab</option>
          <option value="Telangana" <?php if ($result['State'] == 'Telangana') echo 'selected="selected"'; ?> >Telangana</option>
          <option value="Uttar Pradesh" <?php if ($result['State'] == 'Uttar Pradesh') echo 'selected="selected"'; ?> >Uttar Pradesh</option>
          <option value="Kerala" <?php if ($result['State'] == 'Kerala') echo 'selected="selected"'; ?> >Kerala</option>
        </select>
       </div>

       <label for="State"><b>Other State</b></label>
       <input type="text" placeholder="Enter State Name" value="<?php echo $result['State']; ?> " name="State" >


      <label for="Country"><b>Country</b></label>
      <input type="text" placeholder="Enter Country Name" name="Country" value="<?php echo $result['Country']; ?> " required>

      <label for="PinCode"><b>Pin_Code</b></label>
      <input type="number" placeholder="Enter Pin-Code of city" name="Pnumber" value=<?php echo $result['Pincode']; ?> required>

      <label for="Height"><b>Height</b></label>
      <input type="number" placeholder="Enter Height in cm" name="Hnumber" value=<?php echo $result['Height']; ?>  required>

      <label for="Weight"><b>Weight</b></label>
      <input type="number" placeholder="Enter Weight in kg" name="Wnumber" value=<?php echo $result['Weight']; ?>  required>

<?php
    echo "  <label >
            <center>
            <a href='crimeAddOn.php?Criminal_ID=$CCID'><h2>Add Crime</h2></a>
            </center>
          </label>
      ";
?>

      <button type="submit" class="registerbtn" name="save">Update</button>
  </form>
</body>

</html>


<?php

  include("connection.php");

  if(isset($_POST['save']))
  {
    $Criminal_Name = $_POST['Name'];
  	$Address = $_POST['Address'];
  	$State = $_POST['State'];
    $Country = $_POST['Country'];
    $pin_code = $_POST['Pnumber'];
    $Height = $_POST['Hnumber'];
  	$Weight= $_POST['Wnumber'];

    $query1="UPDATE Criminal set Criminal_Name='$Criminal_Name',Address='$Address',State='$State',Country='$Country',Pincode='$pin_code', Height='$Height' , Weight='$Weight' where Criminal_ID='$id'";

      if (mysqli_query($conn, $query1))
      {
  		echo ' <script>alert("Criminal Details added successfully")</script>';
      ?>

      <meta http-equiv ="refresh" content = "0; url = http://localhost/project/criminalDetails.php" >

      <?php
  	}
  	mysqli_close($conn);
}
?>
