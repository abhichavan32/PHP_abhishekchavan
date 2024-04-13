<?php
include("connection.php");
if(isset($_POST["reg"])){
$fn=$_POST["fullname"];

$con=$_POST["contact"];
$pwd=$_POST["password"];


$qry="INSERT INTO `reg`(`id`, `username`, `password`, `contact`) VALUES (NULL,'$fn','$con','$pwd')";

$result=mysqli_query($connect,$qry);
if($result) {
    ?> <script> alert("Registration Successful"); </script> <?php
    exit;
} else {
    ?> <script> alert("Something went wrong, try again later"); </script> <?php
}
}
?>












<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <style>
    body {
      background-color: #000;
      color: #fff;
    }
    .registration-container {
      width: 100%;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .registration-form {
      max-width: 400px;
      padding: 20px;
      background-color: rgba(0, 0, 0, 0.8);
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
    }
    .form-group {
      position: relative;
      margin-bottom: 20px;
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
    .btn-register {
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .btn-register:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

<div class="registration-container">
  <form class="registration-form"   method="post">
    <div class="form-group">
      <input type="text" id="username" required name="fullname">
      <label for="username">Username</label>
    </div>
    <div class="form-group">
      <input type="password" id="password" required name="password">
      <label for="password">Password</label>
    </div>
    <div class="form-group">
      <input type="tel" id="phone"  required  name="contact">
      <label for="phone">Phone Number </label>
    </div>
    <button type="submit" class="btn btn-register" name="reg">Register</button>
  </form>
</div>

</body>
</html>
