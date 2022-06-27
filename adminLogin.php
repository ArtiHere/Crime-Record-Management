<!DOCTYPE html>
<html>

<head>
  <title>Admin Login</title>

  <link rel="stylesheet" href="styles.css">

  <style media="screen">
    body {
      font-family: Calibri, Helvetica, sans-serif;
      background-color: #005555;
      margin: 50px 400px;

      background-image: linear-gradient(135deg, #005555, #069A8E, #A1E3D8);
       }

    .container {
      padding: 70px;
      width: 500px;
      background-color: #A1E3D8;
    }

    input[type=text],
    input[type=password]{
      width: 95%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: #f1f1f1;
    }

    div {
      padding: 10px 0;
      margin-bottom: 15px;
    }

    hr {
      border: 1px solid #f1f1f1;
      margin-bottom: 25px;
    }

    .loginbtn {
      background-color: #632626;
      color: white;
      padding: 16px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
      font-size: 20px;
    }

    .loginbtn:hover {
      opacity: 1;
      background-color: #4CAA90;
      font-weight: 600;
    }


  </style>
</head>

<body>
  <form method="post">
    <div class="container">
      <center>
        <h1> Admin Login</h1>
      </center>
      <hr>
      <label><b> Admin Username </b></label>
      <input type="text" name="Username" placeholder="Enter Your User Name" required >

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Your Password" name="psw" required>

      <button type="submit" class="loginbtn" name="save">Login</button>
  </form>
</body>

</html>


<?php
  include("connection.php");

if(isset($_POST['save']))
{
  $UserName = $_POST['Username'];
  $Password= $_POST['psw'];

	$query4="SELECT * FROM Admin where Admin_Username='$UserName' and Password='$Password' ";

	if ($result= mysqli_query($conn, $query4))
	{
	 $count=mysqli_num_rows($result);
		if($count==1){
				echo ' <script>alert("You have logged in successfully")</script>';
        header('location:adminPage.php');
		}
		else {
      echo ' <script>alert("Password or Username is Invalid  !!!")</script>';
		}

	}
	else
	{
	echo "Error: " . $sql . "" . mysqli_error($var_connection);
	}
	mysqli_close($conn);

}

?>
