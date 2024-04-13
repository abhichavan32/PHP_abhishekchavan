<?php
 include("connection.php");

 if(isset($_POST["sub_btn"])){

    $fn=$_POST["username"];
    $pwd=$_POST["password"];


	$qry = "SELECT * FROM `registation` WHERE `name`='$fn' AND `password`='$pwd'";

	$result = mysqli_query($connect, $qry); 

	$rows = mysqli_num_rows($result);

	if($rows > 0)	
	{
		?><h1>Welcome<h1><?php
		exit(); 
	}
	else
	{
		?> <script> alert("Invalid Username OR Password"); </script> <?php
	}
}

 



?>














<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <style>
    body {
      background-color: #000;
      color: #fff;
    }
    .login-container {
      width: 100%;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .login-form {
      max-width: 400px;
      padding: 20px;
      background-color: rgba(0, 0, 0, 0.8);
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
    }
    .form-group {
      position: relative;
    }
    .form-group input {
      width: 100%;
      padding: 10px;
      background-color: transparent;
      border: none;
      border-bottom: 2px solid #fff;
      outline: none;
      color: #fff;
    }
    .form-group label {
      position: absolute;
      top: 12px;
      left: 0;
      color: #aaa;
      transition: 0.3s;
    }
    .form-group input:focus + label,
    .form-group input:valid + label {
      top: -10px;
      font-size: 12px;
      color: #fff;
    }
    .btn-login {
      width: 100%;
      padding: 10px;
      margin-top: 20px;
      background-color: #007bff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .btn-login:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

<div class="login-container">
  <form class="login-form" method="post">
    <div class="form-group">
      <input type="text" id="username" required name="username">
      <label for="username">Username</label>
    </div>
    <div class="form-group">
      <input type="password" id="password" required name="password">
      <label for="password">Password</label>
    </div>
    <button type="submit" class="btn btn-login" name="sub_btn">Login</button>
  </form>
</div>

</body>
</html>
