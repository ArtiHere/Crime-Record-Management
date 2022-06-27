<?php
include("connection.php");
$id = $_GET['CID'];
$query11 = "SELECT * FROM cases where Case_ID ='$id'";
$data11 = mysqli_query($conn,$query11);
$result = mysqli_fetch_assoc($data11);
$CCID=$result['Case_ID'];
 ?>
<!DOCTYPE html>
<html>

<head>
  <title>Update Criminal Details</title>
  <style media="screen">
    body {
      font-family: Calibri, Helvetica, sans-serif;
    background-image: linear-gradient(45deg, #632626, #9D5353, #BF8B67, #DACC96);
      margin: 50px 400px;
    }

    .container {
      padding: 50px;;
      background-color: white;
      opacity: 0.7;
    }

    input[type=text],
    input[type=number],
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
    input[type=number]:focus,
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
        <h1>Update Case Details</h1>
      </center>
      <hr>
      <div class="CID_fix">
        <label><b> Case ID </b></label><?php echo " :   "; ?>
        <?php echo $result['Case_ID']; ?>
      </div>
      <br>
      <br>
      <label><b> Case Name </b></label>
      <input type="text" name="Name" placeholder="Enter Case Name" value="<?php echo $result['Case_name']; ?> " required >

      <label><b> Status </b></label>
      <input type="text" name="Status" placeholder="Enter Status" value="<?php echo $result['Status']; ?> " required >

      <label><b> FIR ID </b></label>
      <input type="text" name="FIR_ID" placeholder="Enter FIR ID" value="<?php echo $result['FIR_ID']; ?> " required >

      <label><b>Police ID</b></label>
      <input type="text" name="Police_ID" placeholder="Enter Police ID" value="<?php echo $result['Police_ID']; ?> " required >

      <label for="Crime ID "><b>Crime ID</b></label>
      <input type="text" name = "Crime_ID" placeholder="Enter Crime ID" value="<?php echo $result['Crime_ID']; ?> " required>

      <label for="Victim ID"><b>Victim ID</b></label>
      <input type="text"  name = "Victim_ID" placeholder="Enter Victim ID" value="<?php echo $result['Victim_ID']; ?>" required>

      <label for="Criminal ID"><b>Criminal ID</b></label>
      <input type="text"  name = "Criminal_ID" placeholder="Enter Criminal ID" value="<?php echo $result['Criminal_ID']; ?>" required>

      <label for="Judge ID "><b>Judge ID</b></label>
      <input type="text" name = "Judge_ID" placeholder="Enter Judge ID" value="<?php echo $result['Judge_ID']; ?>"  required>

      <label for="Case Registration Date "><b>Case Registration Date</b></label>
      <input type="date" name = "Case_registration_date" placeholder="Enter Case Registration Date" value="<?php echo $result['Case_registration_date']; ?>"  required>

      <label for="Case_closed_date"><b>Case closed date</b></label>
      <input type="date" name = "Case_closed_date" placeholder="Enter Case Closed Date" value="<?php echo $result['Case_closed_date']; ?>"  >


      <button type="submit" class="registerbtn" name="save">Update</button>
  </form>
</body>

</html>


<?php

  include("connection.php");

  if(isset($_POST['save']))
  {
  	$Case_Name = $_POST['Name'];
  	$Status = $_POST['Status'];
    $FIR_ID = $_POST['FIR_ID'];
    $Police_ID = $_POST['Police_ID'];
    $Crime_ID = $_POST['Crime_ID'];
  	$Victim_ID= $_POST['Victim_ID'];
    $Criminal_ID = $_POST['Criminal_ID'];
    $Judge_ID= $_POST['Judge_ID'];
    $Case_registration_date= $_POST['Case_registration_date'];
    $Case_closed_date= $_POST['Case_closed_date'];




    $query1="UPDATE cases set Case_Name='$Case_Name',Status='$Status',FIR_ID='$FIR_ID',Police_ID='$Police_ID', Crime_ID='$Crime_ID' , Victim_ID='$Victim_ID',Criminal_ID='$Criminal_ID' ,Judge_ID ='$Judge_ID', Case_registration_date= '$Case_registration_date',Case_closed_date='$Case_closed_date' where Case_ID='$id'";

      if (mysqli_query($conn, $query1))
      {
  		echo ' <script>alert("Case Details added successfully")</script>';
      ?>

      <meta http-equiv ="refresh" content = "0; url = http://localhost/project/caseDetails.php" >

      <?php
  	}
  	mysqli_close($conn);
}
?>
