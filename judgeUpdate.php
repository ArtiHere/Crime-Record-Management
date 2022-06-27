<?php
include("connection.php");
$id = $_GET['PID'];
$query12 = "SELECT * FROM Judge where Judge_ID ='$id'";
$data12 = mysqli_query($conn,$query12);
$result = mysqli_fetch_assoc($data12);

 ?>
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
        <h1>Update Judge Details</h1>
      </center>
      <hr>
      <label><b> Judge ID : </b></label>value="<?php echo $result['Judge_ID']; ?>
      <br>
      <br>
      <label><b> Judge Name </b></label>
      <input type="text" name="Name" placeholder="Enter Full Name" value="<?php echo $result['Judge_Name']; ?> " required >
      <label><b> Court </b></label>
      <input type="text" name="Court" placeholder="Enter Police Station Name" value="<?php echo $result['Court']; ?> " required >

      <button type="submit" class="registerbtn" name="save">Update</button>
  </form>
</body>

</html>


<?php

  include("connection.php");

  if(isset($_POST['save']))
  {
  	$Judge_Name = $_POST['Name'];
  	$Court= $_POST['Court'];

    $query2="Update Judge set Judge_Name='$Judge_Name',Court='$Court' where Judge_ID='$id'";

      if (mysqli_query($conn, $query2))
      {
  		  echo ' <script>alert("Update has been successfully Done !!")</script>';
        ?>

        <meta http-equiv ="refresh" content = "0; url = http://localhost/project/judgeDetails.php" >

        <?php
    }else {
      echo "Failed to Update!";
    }
  	mysqli_close($conn);
}
?>
