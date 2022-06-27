<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">

  <title>Police Details</title>
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
     margin-left:30px;
     margin-top:40px;
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
      <a class="backa" href="adminPage.php">Back to Admin Page</a>
    </div>
  </header>
  <br>
  <div class="">

  <h2>Police Officers Details</h2>
  <br>
  <table >
    <tr>
      <th>Police ID</th>
      <th>Police Name</th>
      <th>Police Station</th>
      <th>Gender</th>
      <th>Phone Number</th>
      <th>Email</th>
      <th>Address</th>
      <th>City</th>
      <th>Username</th>
      <th>Password</th>
      <th colspan="2">Operations</th>
    </tr>

<?php
  include("connection.php");
  $query01 = "SELECT * FROM Police";
  $data1 = mysqli_query($conn,$query01);
  $total = mysqli_num_rows($data1);

   if($total != 0){
     while($result = mysqli_fetch_assoc($data1)){

       echo "<tr>
                 <td>".$result['Police_ID']."</td>
                 <td>".$result['Police_Name']."</td>
                 <td>".$result['Police_Station']."</td>
                 <td>".$result['Gender']."</td>
                 <td>".$result['Phone_num']."</td>
                 <td>".$result['Police_Email']."</td>
                 <td>".$result['Address']."</td>
                 <td>".$result['City']."</td>
                 <td>".$result['Police_Username']."</td>
                 <td>".$result['Password']."</td>
                 <td ><a href='officerUpdate.php?PID=$result[Police_ID]'><input type='submit' value='Update' class='update' ></a>

                 <a href='officerDelete.php?PID=$result[Police_ID]'><input type='submit' value='Delete' onclick='return checkDelete()'>
                 </a></td>
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
