
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">

  <title>Criminals Details</title>
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
    th, td {
    border-bottom: 1px solid #ddd;
  }
    body{
      margin: 10px;
    }

.title{
  margin-top: 19px;
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
      <a class="backa" href="criminalDetails.php">Back to Criminal Details</a>
    </div>
  </header>
  <br>
  <div class="">

  <h2>Criminals Details</h2>
  <br>
  <table >
    <tr>
      <th>Criminal ID</th>
      <th>Criminal Image</th>
      <th>Criminal Name</th>
      <th>Crime ID</th>
      <th>Address</th>
      <th>Height</th>
      <th>Weight</th>
      <th>Operations</th>
    </tr>

<?php
    include("connection.php");

    if(isset($_POST['save']))
    {
      $Crime_ID = $_POST['Crime_ID'];
      $query = "SELECT * FROM Criminal natural join criminalCrime where Crime_ID='$Crime_ID'";
      $data = mysqli_query($conn,$query);

      $total = mysqli_num_rows($data);

   if($total >0){

     while(($result = mysqli_fetch_assoc($data))){

       $Criminal_ID = $result['Criminal_ID'];

         $query02 = "SELECT * FROM criminalCrime where Criminal_ID='$Criminal_ID'";
         $data2 = mysqli_query($conn,$query02);
         $total2 = mysqli_num_rows($data2);

       echo "<tr>
                 <td>".$result['Criminal_ID']."</td>
                 <td><img src= '".$result['criminal_img']."' height='100px' width='100px' ></td>
                 <td>".$result['Criminal_name']."</td>
                 <td>";

                   while($result2 = mysqli_fetch_assoc($data2)){

                     echo " ".$result2['Crime_ID']." ";
                   }

                echo "</td>
                 <td>".$result['Address'].", ".$result['State'].", ".$result['Country'].", ".$result['Pincode']."</td>
                 <td>".$result['Height']."</td>
                 <td>".$result['Weight']."</td>
                 <td ><a href='criminalUpdate.php?CID=$result[Criminal_ID]'><input type='submit' value='Update' class='update' ></a>
                 </td>
         </tr>";
       }
     }else {
       echo "<h2>NO Recordes in database!!!</h2>";
     }
  mysqli_close($conn);
}
 ?>

</table>
</body>

</html>
