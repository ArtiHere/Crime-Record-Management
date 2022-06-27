<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Officer Incharge</title>
    <link rel="stylesheet" href="style.css">

    <style media="screen">

    body{
      background-color: white;
      margin: 10px;
    }
    .title{
      margin-top: -15px;
    }
    .rlink{
      padding:0;
      margin-right: 5px;
    }

.navlinks{
  padding:0;
}
    .navbar1{
     margin-left: 404px;
    }
    .navbar2{
     margin-right: 15px
    }
    ul{
      list-style: none;
    }
    li{
      margin-top: 15px;
      font-family: serif;
      font-weight: 500;
      font-size: 25px;
      padding: 15px;
      text-align: center;
    }

    .dp_menu:hover{
      background-color: #A1E3D8;
      cursor: pointer;
    }
    a{
      color: white;
      text-decoration: none;
    }
    .rlink:hover{
      color: #005555;
      font-weight: bolder;
    }

    .dropdown_opts{
      display: none;
      margin:0;
      padding:0;
    }
    ul li:hover > ul{
      display: block;
    }
    ul ul .dp_menu:hover{
    background-color: #A1E3D8;


    }
    .dp_menu{
      width:140px;
      font-size: 20px;
      margin:10px 0 0 0;
      text-align: center;
    }
    .register_ops{
      width: 150px;
    }
    .register_ops:hover{
      background-color: #005555;
    }
    .opts {
      margin: 0;
      padding: 0;
      text-align: left;
    }
    .optslist{
      display:flex;
    }
    .detail_tbl{
       padding: 80px 0 0 250px;
    }

    th, td {
    padding: 10px;
    font-size: 20px;
    margin: 10px;
    }
    table {
      border-spacing: 3px;
      padding: 5px;
    }
    .a_tbl{
      color: Darkblue;
    }
    .a_tbl:hover{
      color: red;
    }
    .logout{
      margin: 50px 20px 20px 20px;
      font-size: 20px;
    }
    .logout a:hover{
      background-color: #069A8E;
    }

    </style>
  </head>
  <body>
    <header>
      <div class="logo">
        <img class="imglogo" src="Logo.png" alt="Logo">
      </div>
        <p class="title">
          <br>
          <nobr>National Crime Record <br />And Control Bureau</nobr>
        </p>
        <nav class="navbar1">
          <ul class="navlinks">
          <li class="register_ops"><a href="#">Add</a>
            <ul class="dropdown_opts">
              <li class="dp_menu"><a class="rlink" href="criminalAdd.php"><nobr>Criminal</nobr></a></li>
              <li class="dp_menu"><a class="rlink" href="victimAdd.php"><nobr>Victim</nobr></a></li>
            </ul>
            </ul>
          </li>
        </nav>
        <nav class="navbar2">
          <ul class="navlinks">
          <li class="register_ops"><a href="#">Register</a>
            <ul class="dropdown_opts">
              <li class="dp_menu"><a class="rlink" href="caseRegistration.php"><nobr>Case</nobr></a></li>
              <li class="dp_menu"><a class="rlink" href="firRegistration.php"><nobr>Fir</nobr></a></li>
            </ul>
            </ul>
          </li>
        </nav>
        <div class="logout"><a href="index.php">Log Out</a></div>
    </header>
    <br>

    <div class="detail_tbl">
      <h3>DETAILS</h3>
      <table class="tblopts">
        <tr>
          <td><a class="a_tbl" href="firDetails.php">FIR</a></td>
        </tr>
        <tr>
          <td><a class="a_tbl" href="victimDetails.php">Victim</a></td>
        </tr>
        <tr>
          <td><a class="a_tbl" href="criminalDetails.php">Criminal</a></td>
        </tr>
        <tr>
          <td><a class="a_tbl" href="caseDetails.php">Case</a></td>
        </tr>
      </table>
    </div>


  </body>
</html>
