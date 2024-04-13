<?php
if(isset($_POST["changepwdbtn"])){   $connect= mysqli_connect("localhost","root","","abhidb");

$un=$_POST["username"];
$cpwd=$_POST["cpassword"];
$npwd=md5($_POST["npassword"]);

$qry="SELECT * FROM `project 5` WHERE username='$un' AND password='$cpwd'";

$result=mysqli_query($connect, $qry);
$data=mysqli_fetch_assoc($result);
$id=$data["id"];
$row=mysqli_num_rows($result);


if($row>0)
{
   $qry=" UPDATE `project 5` SET `password`='$npwd' WHERE id='$id'";
   $result=mysqli_query($connect, $qry);
   if($result){
    ?> <script>alert("password cahnge successfully");</script><?php
   }else{    
    ?> <script>alert("somthing went wrong");</script><?php

   }
}
else{
    ?> <script>alert("invalid username or pasword");</script><?php

}



}








?>























<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-success text-light">password change form</div>
                    <div class="card-body">
                        <form method="post">
                            <div class="class-group"> <label>username</label><input type="text" name="username" class="form-control"></div>
                            <div class="class-group"> <label>current password</label><input type="password" name="cpassword" class="form-control"></div>
                            <div class="class-group"> <label>new password</label><input type="password" name="npassword" class="form-control"></div>
                            <div class="class-group">  <button class="btn btn-success" name="changepwdbtn"> change password</button></div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>