<!DOCTYPE html>
<html>

<head>
  <title>Add Criminal</title>
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
  </style>
</head>

<body>
  <form method="post" enctype="multipart/form-data">
    <div class="container">
      <center>
        <h1>Add Criminal Details</h1>
      </center>
      <hr>

      <label><b> Criminal Name </b></label>
      <input type="text" name="Name" placeholder="Enter Criminal Name" required >

      <label><b> Criminal Image </b></label><br>
      <input type ="file" name="uploadfile" ><br><br>

      <label for="Address"><b>Address</b></label>
      <textarea cols="80" rows="2" placeholder="Enter Address" name="Address" required>
   </textarea>

   <div>
     <label><b>
       State
     </b></label><br>
     <select class="selectstate" name="State">
       <option value="Maharashtra">Maharashtra</option>
       <option value="Tamil Nadu">Tamil Nadu</option>
       <option value="Goa">Goa</option>
       <option value="Bihar">Bihar</option>
       <option value="Gujarat">Gujarat</option>
       <option value="Karnataka">Karnataka</option>
       <option value="Punjab" >Punjab</option>
       <option value="Telangana">Telangana</option>
       <option value="Uttar Pradesh">Uttar Pradesh</option>
       <option value="Kerala">Kerala</option>
       <option value="">Enter your state in Other field</option>
     </select>
   </div>

   <label for="State"><b>Other State</b></label>
   <input type="text" placeholder="Enter State Name" name="State" >

      <label for="Country"><b>Country</b></label>
      <input type="text" placeholder="Enter Country Name" name="Country" required>

      <label for="PinCode"><b>Pin_Code</b></label>
      <input type="number" placeholder="Enter Pin-Code of city" name="Pnumber" required>

      <label for="Height"><b>Height</b></label>
      <input type="number" placeholder="Enter Height in cm" name="Hnumber" required>

      <label for="Weight"><b>Weight</b></label>
      <input type="number" placeholder="Enter Weight in kg" name="Wnumber" required>



      <button type="submit" class="registerbtn" name="Next">Next</button>
  </form>
</body>

</html>


<?php

  include("connection.php");

  if(isset($_POST['Next']))
  {
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "images/".$filename;
    move_uploaded_file($tempname,$folder );

    $Criminal_Name = $_POST['Name'];
  	$Address = $_POST['Address'];
  	$State = $_POST['State'];
    $Country = $_POST['Country'];
    $pin_code = $_POST['Pnumber'];
    $Height = $_POST['Hnumber'];
  	$Weight= $_POST['Wnumber'];


  	$query1="INSERT INTO Criminal (Criminal_name,criminal_img,Address,State,Country,Pincode,Height,Weight) VALUES ( '$Criminal_Name','$folder','$Address','$State','$Country','$pin_code','$Height','$Weight')";

      if (mysqli_query($conn, $query1))
      {
        header("Location: http://localhost/project/criminalCrime.php?Criminal_ID=$Criminal_ID");



  	}
  	mysqli_close($conn);
}
?>
