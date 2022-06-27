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
    .registerbtn {
  display: inline;
  background-color: #4CAF50;
  color: white;
  padding: 6px 5px;
  margin: 8px 10px;
    margin-left: 60px;
  border: none;
  cursor: pointer;
  width: 17%;
  height: 5%;
  opacity: 0.9;
  font-size: 20px;
}
.registerbtn:hover {
  background-color: #005555;

}
    .searchCID{
  display: inline-block;
  width: 40%;
  margin-right: -10%;
}
.nameIn{
  padding: 14px;
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

  <div class="">

  <h2>Case Details</h2>
  <br>

  <form class="searchCID" action="searchCaseCriminal.php" method="post">
  <div class="searchCID">
    <label class="crime"><b>
      Criminal ID
    </b></label><br>
    <input  class="nameIn" type="name" name="CriminalID" >
  </div>
<button type="submit" class="registerbtn" name="save">Search</button>
</form>
<br>
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
  $query01 = "SELECT * FROM cases";
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

                 <td ><a href='caseUpdate.php?CID=$result[Case_ID]'><input type='submit' value='Update' class='update' ></a>

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
