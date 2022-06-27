<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">

  <title>Case Details</title>
  <style media="screen">

    .back{

       margin: 40px 10px 0 750px;

    }
    .title{
      margin-top:19px;
    }
    .backa{
      padding: 5px 5px 5px 5px;
      color: white;
      text-decoration: none;
      font-size: 20px;
     font-family: serif;
    }
    .backa:hover{
      background-color: #A1E3D8;
      color:#005555;

    }

    </style>
</head>

<body>
  <header>
    <div class="logo">
      <img class="imglogo" src="Logo.png" alt="Logo">
    </div>
    <p class="title">
      National Crime Record <br>And Control Bureau
    </p>
    <div class="back">
      <a class="backa" href="officerPage.php">Back to Police Page</a>
    </div>
  </header>
  <br>
  <div class="">

  <h2>Case Details</h2>
  <br>
  <table>
    <tr>
      <th>Case ID</th>
      <th>Case Name</th>
      <th>Status</th>
      <th>FIR ID</th>
      <th>Police ID</th>
      <th>Crime ID</th>
      <th>Victim ID</th>
      <th>Criminal ID</th>
      <th>Judge ID</th>
      <th>Case Registration Date</th>
      <th>Case Closed Date</th>
      <th colspan="2">Operations</th>
    </tr>

<?php
  include("connection.php");

  if(isset($_POST['save']))
    {
  $Criminal_ID = $_POST['CriminalID'];
  $query01 = "SELECT * FROM Cases where Criminal_ID='$Criminal_ID'";
  $data1 = mysqli_query($conn,$query01);
  $total = mysqli_num_rows($data1);

   if($total != 0){
     while($result = mysqli_fetch_assoc($data1)){


       echo "<tr>
                 <td>".$result['Case_ID']."</td>
                 <td>".$result['Case_name']."</td>
                 <td>".$result['Status']."</td>
                 <td>".$result['FIR_ID']."</td>
                 <td>".$result['Police_ID']."</td>
                 <td>".$result['Crime_ID']."</td>
                 <td>".$result['Victim_ID']."</td>
                 <td>".$result['Criminal_ID']."</td>
                 <td>".$result['Judge_ID']."</td>
                 <td>".$result['Case_registration_date']."</td>
                 <td>".$result['Case_closed_date']."</td>

                 <td ><a href='caseUpdate.php?PID=$result[Case_ID]'><input type='submit' value='Update' class='update' ></a>

               </td>
         </tr>";
     }
   }else{
     echo "<h2>NO Recordes in database!!!</h2>";
   }
  }

  mysqli_close($conn);
 ?>

</table>

</body>

</html>
