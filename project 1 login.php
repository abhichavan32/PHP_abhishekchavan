<?php

 include("connection.php");
if(isset($_POST["login"]))
{
	$eid = $_POST["emailid"];
	$pwd = $_POST["password"];

  if($eid =="admin@gmail.com" && $pwd=="admin"){
    header("location: temp.php");
    exit; 
  }

	$qry = "SELECT * FROM `registation` WHERE `email`='$eid' AND `password`='$pwd'";
  

	$result = mysqli_query($connect, $qry); 

	$rows = mysqli_num_rows($result);

	if($rows > 0)	
	{
		header("location:user.php");
		exit(); 
	}
	else
	{
		?> <script> alert("Invalid Email OR Password"); </script> <?php
	}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    body {
      background-color: #000;
      color: #fff;
    }
    .login-container {
      max-width: 400px;
      margin: 100px auto;
      padding: 20px;
      background-color: #111;
      border-radius: 10px;
      box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.5);
    }
    .form-group {
      margin-bottom: 20px;
    }
    .form-group input {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: none;
      background-color: #222;
      color: #fff;
    }
    .form-group input:focus {
      outline: none;
      box-shadow: 0px 0px 5px 0px rgba(255,255,255,0.5);
    }
    .btn-login {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: none;
      background-color: #007bff;
      color: #fff;
      cursor: pointer;
    }
    .btn-login:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="login-container">
      <h2 class="text-center mb-4">Login</h2>
      <form method="post">
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" placeholder="Enter email"name="emailid">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Password" name="password">
        </div>
        <button type="submit" class="btn btn-login" name="login">Login</button>
      </form>
    </div>
  </div>
</body>
</html>
