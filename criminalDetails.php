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
    select{
      margin: 20px 0 0 50px;
      padding: 16px 20px;
      margin: 8px 0;
      cursor: pointer;
      width: 30%;
      font-size: 15px;
    }
    div {
    display: inline;
}
.registerbtn {
  display: inline;
  background-color: #4CAF50;
  color: white;
  padding: 6px 5px;
  margin: 8px 0;
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
.state{
  font-size: 20px;
}

.select_Crime {
  display: inline-block;
  width: 40%;
  margin-right: -15%;
}
.select_State{
      display: inline-block;
      width: 40%;
      margin-right: -15%;
}
.searchCname{
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
      <a class="backa" href="OfficerPage.php">Back to Officer Page</a>
    </div>
  </header>
  <br>
  <div class="">

  <h2>Criminals Details</h2>

  <form class="select_State" action="searchState.php" method="post">
    <div>
      <label class="state"><b>
        State
      </b></label><br>
      <select class="selectstate" name="State" >
        <option value="-">-</option>
        <option value="Maharashtra">Maharashtra</option>
        <option value="Tamil Nadu">Tamil Nadu</option>
        <option value="Goa">Goa</option>
        <option value="Bihar">Bihar</option>
        <option value="Gujarat">Gujarat</option>
        <option value="Karnataka">Karnataka</option>
        <option value="Punjab" >Punjab</option>
        <option value="Telangana">Telangana</option>
        <option value="Uttar Pradesh">Uttar Pradesh</option>
        <option value="Kerala">Kerala</option>

      </select>
    </div>

  <button type="submit" class="registerbtn" name="save">Search</button>
</form>

<form class="select_Crime" action="searchCrime.php" method="post">
  <div>
    <label class="crime"><b>
      Crime
    </b></label><br>
    <select class="selectcime" name="Crime_ID">
      <option value="-"  >-</option>
      <option value="100" >100 Robbery </option>
      <option value="101" >101 Theft</option>
      <option value="102" >102 kidnapping</option>
      <option value="103" >103 Rape</option>
      <option value="104" >104 Trafficking</option>
      <option value="105" >105 Smuggling</option>
      <option value="106" >106 Assassination</option>
      <option value="107" >107 Shoplifting</option>
    </select>
  </div>

<button type="submit" class="registerbtn" name="save">Search</button>
</form>

<form class="searchCname" action="searchCriminalName.php" method="post">
  <div>
    <label class="crime"><b>
      Criminal Name
    </b></label><br>
    <input  class="nameIn" type="name" name="name" >
  </div>

<button type="submit" class="registerbtn" name="save">Search</button>
</form>

<form class="order" action="orderbycount.php" method="post">
<button type="submit" class="registerbtn" name="save">Display Details by most Count</button>
</form>

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
  $query01 = "SELECT * FROM Criminal";
  $data1 = mysqli_query($conn,$query01);
  $total = mysqli_num_rows($data1);

   if($total != 0){
     while($result = mysqli_fetch_assoc($data1)){

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
