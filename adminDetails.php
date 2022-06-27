<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">

  <title>Admin Details</title>
  <style media="screen">

    
    .title{
      margin-top:19px;
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

  <h2>Admin Details</h2>
  <br>
  <table>
    <tr>
      <th>Admin ID</th>
      <th>Admin Name</th>
      <th>Admin Username</th>
      <th>Password</th>
      <th>Admin Email</th>
      <th>Admin Address</th>
      <th>City</th>
      <th colspan="2">Operations</th>
    </tr>

<?php
  include("connection.php");
  $query01 = "SELECT * FROM Admin";
  $data1 = mysqli_query($conn,$query01);
  $total = mysqli_num_rows($data1);

   if($total != 0){
     while($result = mysqli_fetch_assoc($data1)){

       echo "<tr>
                 <td>".$result['Admin_ID']."</td>
                 <td>".$result['Admin_name']."</td>
                 <td>".$result['Admin_Username']."</td>
                 <td>".$result['Password']."</td>
                 <td>".$result['Admin_Email']."</td>
                 <td>".$result['Admin_Address']."</td>
                 <td>".$result['City']."</td>
                 <td ><a href='adminUpdate.php?PID=$result[Admin_ID]'><input type='submit' value='Update' class='update' ></a>

                 <a href='adminDelete.php?PID=$result[Admin_ID]'><input type='submit' value='Delete' onclick='return checkDelete()'>
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
