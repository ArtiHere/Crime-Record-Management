<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Crime Management Home Page</title>
  <link rel="stylesheet" href="style.css">
</head>

<style media="screen">
.title{
  margin-top: 20px;
}
.pr1{
  margin-top:70px;
}
.countcalc{
  margin: 20px  0  0  20px;
  font-size: 40px;
font:italic small-caps bold 30px georgia;
background: linear-gradient(to right, #A1E3D8 0%, #069A8E 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  display: inline-block;
}
.imgnews{
  margin-top: 85px;
  width:410px;
}
</style>

<body class="indexpg">

  <header >
    <div class="logo">
      <img class="imglogo" src="Logo.png" alt="Logo">
    </div>
    <p class="title">
      National Crime Record <br>And Control Bureau
    </p>
    <nav class="navbar">
      <ul class="navlinks">
        <li class="loginops"><a>Login</a>
          <ul class="dropdown_opts">
            <li class="dp_menu"><a class="rlink" href="adminLogin.php">Login as Administrator</a></li>
            <li class="dp_menu"><a class="rlink" href="officerLogin.php">Login as Officer</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>



  <div class="info">
<div class="countcalc">

    <?php
      include("connection.php");
      $query01 = "SELECT COUNT(*) AS count
FROM criminal
INNER JOIN
criminalcrime
ON criminal.Criminal_ID=criminalcrime.Criminal_ID;";

      $data1 = mysqli_query($conn,$query01);
      $total = mysqli_num_rows($data1);

       if($total != 0){
         while($result = mysqli_fetch_assoc($data1)){

           echo "CRIME COUNT : ".$result['count']."";
         }
       }else{
         echo "<h2>NO Recordes in database!!!</h2>";
       }


      mysqli_close($conn);
     ?>

     </div>
    <p class="pr1">      Crime is not only a malafide occurrence which violates the law of state, but
also a negative externality with enormous social and economic costs. Rapid changes
in how people interact with each other especially on global scale enhanced by the
internet, create a social dynamic which criminals can easily take advantage of in
extending their reach. The statistics presented in the report will help in data based
analysis and understanding the complex phenomenon of crime.
</p>
    <p class="pr">      The general objective of the report is to present the statistics on crime that
can be used as a tool in helping law enforcement officials in its controlling. Data
based policing can help focus on a specific area and allow police resources to be
used more effectively.
</p>
<p class="pr">
  <b>Salient Fields</b><br />
The report contains statistical information on cognizable crimes as reported in police stations during the reference year. Information on police casualties and police firing, police & civilians casualties is given in separate chapters to ensure adequate focus to these issues. Information on complaints against police personnel and custodial crimes has also been given in separate chapters. It has been our constant endeavour to improve the scope, coverage, content and presentation of the publication. In this connection, the Bureau has started publication of dedicated chapters on cyber crimes, human trafficking, crime against senior citizens, crime against foreigners inter-alia foreign tourists, offences against the State, environment related offences and seizures of arms & drugs by police. Besides, data on economic crimes, recidivism and crime in railways has also been given in separate chapters. Information on kidnapping and abduction is presented in respect of total population, women & girls and children separately.
</p>

<p class="pr">
  <b>Data Generates Research and Decision Making:</b><br />
The report is the only, and most comprehensive, databank available with the
Government of India on the subject.
The data contained in the report is used by policy makers, NGOs,
 researchers and public at large. Keeping in view the extensive, and increasing, dependence of
 various stakeholders on the information contained in the report, we have, on our own initiative,
  digitised all the editions of the report from 1953 to 2019 and made them available on our website.
</p>
  </div>


  <div class="row">
    <div class="column">


        <h1>&emsp;&emsp;Crime Details</h1>
          <br>

          <table class="table1" >

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
    </div>
    <div class="column">
      <img class="imgnews" src="crimenews.png" alt="news">
    </div>

    <div class="column">
      <img class="imgnews" src="crimenews3.png" alt="news">
    </div>
    </div>


</body>

</html>
