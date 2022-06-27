<!DOCTYPE html>
<html>

<head>
  <title>Case Registeration</title>
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
    input[type=phone]:focus,
    input[type=email]:focus,
    input[type=password]:focus,
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
  </style>
</head>

<body>
  <form method="post">
    <div class="container">
      <center>
        <h1> Case Registeration Form</h1>
      </center>
      <hr>

      <label><b> Case Name </b></label>
      <input type="text" name="Name" placeholder="Enter Full Name" required >

      <div>
        <label><b>
          Case Status
        </b></label><br><br>
        <input type="radio" value="Open" name="Status" checked> Open
        <input type="radio" value="Close" name="Status"> Close
      </div>


      <label><b> FIR ID </b></label>
      <input type="text" name="FIR_ID" placeholder="Enter FIR ID" required >

      <label><b> Police ID </b></label>
      <input type="text" name="Police_ID" placeholder="Enter Police ID" required >

      <label><b> Crime ID </b></label>
      <select class="" name="Crime_ID">
        <option value="100" >100 Robbery </option>
        <option value="101" >101 Theft</option>
        <option value="102" >102 kidnapping</option>
        <option value="103" >103 Rape</option>
        <option value="104" >104 Trafficking</option>
        <option value="105" >105 Smuggling</option>
        <option value="106" >106 Assassination</option>
        <option value="107" >107 Shoplifting</option>
      </select>
      <br>
      <label><b> Victim ID </b></label>
      <input type="text" name="Victim_ID" placeholder="Enter Victim ID" required >

      <label><b> Criminal ID </b></label>
      <input type="text" name="Criminal_ID" placeholder="Enter Criminal ID" required >

      <label><b> Judge ID </b></label>
      <input type="text" name="Judge_ID" placeholder="Enter Judge ID" required >

      <label><b>Registration Date </b></label>
      <input type="Date" placeholder="Enter Case Registraton Date"  Name = "Case_registration_date" required >

      <label><b>Case Closed Date </b></label>
      <input type="Date" placeholder="Enter Case Closed Date"  Name = "Case_closed_date" >

      <button type="submit" class="registerbtn" name="save">Register</button>
  </form>
</body>

</html>


<?php
  include("connection.php");

  if(isset($_POST['save']))
  {
  	$Case_name = $_POST['Name'];
  	$Status= $_POST['Status'];
  	$FIR_ID = $_POST['FIR_ID'];
    $Police_ID = $_POST['Police_ID'];
    $Crime_ID = $_POST['Crime_ID'];
    $Victim_ID = $_POST['Victim_ID'];
    $Criminal_ID = $_POST['Criminal_ID'];
    $Judge_ID = $_POST['Judge_ID'];
  	$Case_registration_date= $_POST['Case_registration_date'];
    $Case_closed_date = $_POST['Case_closed_date'];

    $phone1=$_POST['Phone1'];

  	$query1="INSERT INTO Cases (Case_name,Status,FIR_ID,Police_ID,Crime_ID,Victim_ID,Criminal_ID,Judge_ID,Case_registration_date,Case_closed_date) VALUES ('$Case_name', '$Status','$FIR_ID','$Police_ID','$Crime_ID','$Victim_ID','$Criminal_ID','$Judge_ID','$Case_registration_date','$Case_closed_date')";

      if (mysqli_query($conn, $query1))
      {
  		echo ' <script>alert("New Cases successfully registered !!")</script>';
      ?>

      <meta http-equiv ="refresh" content = "0; url = http://localhost/project/officerPage.php" >

      <?php
  	}
  	mysqli_close($conn);
}
?>
