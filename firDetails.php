<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">

  <link rel="stylesheet" href="style.css">
    <title>FIR Details</title>
  <style media="screen">

    th, td {
      padding: 15px;
      text-align: left;
    }

    .title{
      margin-top:19px;
    }
    tr:nth-child(even) {background-color: #f2f2f2;}
    th {
      background-color: #069A8E;
      color: white;
    }
    th, td {
    border-bottom: 1px solid #ddd;
  }
    body{
      margin: 10px;
    }
    .back{
     margin: 40px 10px 0 750px;
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
      <a class="backa" href="officerPage.php">Back to Officier Page</a>
    </div>
  </header>
  <br>
  <div class="">

  <h2>FIR Officers Details</h2>
  <br>
  <table>
    <tr>
      <th> FIR ID </th>
      <th> FIR Status </th>
      <th> FIR Date </th>
      <th>Description</th>
      <th>Operations</th>
    </tr>

<?php
  include("connection.php");
  $query01 = "SELECT * FROM Fir";
  $data1 = mysqli_query($conn,$query01);
  $total = mysqli_num_rows($data1);

   if($total != 0){
     while($result = mysqli_fetch_assoc($data1)){

       echo "<tr>
                 <td>".$result['FIR_ID']."</td>
                 <td>".$result['FIR_Status']."</td>
                 <td>".$result['date_reported']."</td>
                 <td>".$result['FIR_Description']."</td>
                 <td ><a href='firUpdate.php?FID=$result[FIR_ID]'><input type='submit' value='Update' class='update' ></a></td>
         </tr>";
     }
   }else{
     echo "<h2>NO Recordes in database!!!</h2>";
   }


  mysqli_close($conn);
 ?>

</table>

<script>
  function checkDelete(){
    return confirm('Are you sure you want to delete this record?');
  }
</script>
</body>

</html>
