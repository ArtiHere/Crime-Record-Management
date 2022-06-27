<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <title>Crime Details</title>
  <style media="screen">
    th, td {
    border: 1px solid black;
    padding: 10px;
    }
    table {
      border: 1px solid black;
      border-spacing: 3px;
      padding: 5px;
    }
    body{
      margin: 20px;
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
    .back{
     margin: 40px 10px 0 750px;
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
      <a class="backa" href="OfficerPage.php">Back to Officer Page</a>
    </div>
  </header>
  <br>
  <div class="">

  <h2>Crime Details</h2>
  <br>
  <table border="2" >
    <tr>
      <th>Crime ID</th>
      <th>Crime Name</th>
      <th>Crime Description</th>
    </tr>

<?php
  include("connection.php");
  $query01 = "SELECT * FROM Crime";
  $data1 = mysqli_query($conn,$query01);
  $total = mysqli_num_rows($data1);

   if($total != 0){
     while($result = mysqli_fetch_assoc($data1)){

       echo "<tr>
                 <td>".$result['crime_ID']."</td>
                 <td>".$result['Crime_Name']."</td>
                 <td>".$result['crime_Description']."</td>

                 </td>
         </tr>";
     }
   }else{
     echo "<h2>NO Recordes in database!!!</h2>";
   }


  mysqli_close($conn);
 ?>

</table>

</body>

</html>
