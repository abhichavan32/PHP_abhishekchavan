<?php
include("connection.php");
if(isset($_POST["reg"])){
$fn=$_POST["fullname"];
$eid=$_POST["emailid"];
$con=$_POST["mono"];
$pwd=$_POST["pwd"];


$qry="INSERT INTO `registation`(`id`, `name`, `email`, `mo.no`, `password`) VALUES (NULL,'$fn','$eid','$con','$pwd')";

$result=mysqli_query($connect,$qry);
if($result) {
    ?> <script> alert("Registration Successful"); </script> <?php
    header("location:user.php");
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
  <title>Registration Page</title>
  <
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .form-container {
      max-width: 500px;
      margin: 50px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="form-container">
          <h2 class="text-center mb-4">Registration Form</h2>
          <form method="post">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" id="name" placeholder="Enter your name" name="fullname">
            </div>
            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email" name="emailid">
            </div>
            <div class="form-group">
              <label for="contact">Contact Number:</label>
              <input type="text" class="form-control" id="contact" placeholder="Enter contact number" name="mono">
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" class="form-control" id="password" placeholder="Enter password" name="pwd">
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="reg">Register</button>
            <a href="login.php" class="form-control">login here</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
