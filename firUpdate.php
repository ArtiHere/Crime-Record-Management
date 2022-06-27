<?php
include("connection.php");
$id = $_GET['FID'];
$query11 = "SELECT * FROM Fir where FIR_ID ='$id'";
$data11 = mysqli_query($conn,$query11);
$result = mysqli_fetch_assoc($data11);

 ?>
<!DOCTYPE html>
<html>

<head>
  <title>Fir Update</title>
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
        <h1>Update FIR Details</h1>
      </center>
      <hr>
      <label><b> FIR ID : </b></label> <?php echo $result['FIR_ID']; ?>
      <br>
      <br>
      <label><b> Description </b></label>
      <textarea name="FIR_Description" cols="80" rows="5" placeholder="Enter FIR Description"  value="<?php echo $result['FIR_Description']; ?>" required> <?php echo $result['FIR_Description']; ?> </textarea>

      <div>
        <label><b>
           FIR Status
        </b></label><br><br>
        <input type="radio" value="Valid" <?php if ($result['FIR_Status'] == 'Valid') echo 'checked="checked"'; ?>" name="FIR_Status"> valid
        <input type="radio" value="Invalid" <?php if($result['FIR_Status'] == 'Invalid') echo  'checked="checked"'; ?> name="FIR_Status"> Invalid
      </div>

      <button type="submit" class="registerbtn" name="save">Update</button>
  </form>
</body>

</html>


<?php

  include("connection.php");

  if(isset($_POST['save']))
  {
  	$FIR_Status = $_POST['FIR_Status'];
    $FIR_Description = $_POST['FIR_Description'];



    $query2="UPDATE FIR set FIR_Status='$FIR_Status', FIR_Description='$FIR_Description' where FIR_ID='$FIR_ID'";

      if (mysqli_query($conn, $query2))
      {
  		  echo ' <script>alert("Update has been successfully Done !!")</script>';
        ?>

        <meta http-equiv ="refresh" content = "0; url = http://localhost/project/firDetails.php" >

        <?php
    }else {
      echo "Failed to Update!";
    }
  	mysqli_close($conn);
}
?>
