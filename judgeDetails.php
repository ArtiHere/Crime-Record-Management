<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">

  <title>Judge Details</title>
  <style media="screen">

    th, td {
      padding: 15px;
      text-align: left;
    }
    tr:nth-child(even) {background-color: #f2f2f2;}
    th {
      background-color: #069A8E;
      color: white;
    }

    .title{
      margin-top:19px;
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
      <a class="backa" href="adminPage.php">Back to Admin Page</a>
    </div>
  </header>
  <br>
  <div class="">

  <h2>Judge Details</h2>
  <br>
  <table >
    <tr>
      <th>Judge ID</th>
      <th>Judge Name</th>
      <th>Court</th>
      <th colspan="2">Operations</th>
    </tr>

<?php
  include("connection.php");
  $query01 = "SELECT * FROM Judge";
  $data1 = mysqli_query($conn,$query01);
  $total = mysqli_num_rows($data1);

   if($total != 0){
     while($result = mysqli_fetch_assoc($data1)){

       echo "<tr>
                 <td>".$result['Judge_ID']."</td>
                 <td>".$result['Judge_Name']."</td>
                 <td>".$result['Court']."</td>
                 <td ><a href='judgeUpdate.php?PID=$result[Judge_ID]'><input type='submit' value='Update' class='update' ></a>

                 <a href='judgeDelete.php?PID=$result[Judge_ID]'><input type='submit' value='Delete' onclick='return checkDelete()'>
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
