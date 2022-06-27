<?php
include("connection.php");
$id = $_GET['PID'];
$query1="DELETE FROM Judge where Judge_ID='$id'";
$data1 = mysqli_query($conn,$query1);

      if ($data1)
      {
  		  echo '<script>alert("Deletion of record has been successfully Done !!")</script>';
        ?>

        <meta http-equiv ="refresh" content = "0; url = http://localhost/project/judgeDetails.php" >

        <?php
    }else {
      echo '<script>alert("Failed to Delete!")</script>';
    }
  	mysqli_close($conn);

?>
