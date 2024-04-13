<?php

if(isset($_POST["resetbtn"])){         $connect= mysqli_connect("localhost", "root", "", "abhidb");


$un=$_POST["username"];
$mob=$_POST["mobile"];


$qry="SELECT * FROM `project4` WHERE username='$un' AND mobile='$mob'";

$result = mysqli_query($connect,$qry);
$data=mysqli_fetch_assoc($result);
$id=$data["id"];

$row=mysqli_num_rows($result);

if($row>0){
 $pwd = randomPassword();
 $qry="UPDATE `project4` SET `password`='$pwd' WHERE id='$id'";
 $result=mysqli_query($connect,$qry);
 echo "password Reset successfully";
}
else{
    echo"invalid username or password";
}

}




function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

?>


























<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <table cellspacing="30">
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>

            <tr>
                <td>Mobile</td>
                <td><input type="tel" name="mobile"> </td>
            </tr>

            <tr>
                <td colspan="2" align="center"><button name="resetbtn">RESET PASSWORD</button></td>
            </tr>
            <tr>
                <td colspan="2">Password -<?php  echo $pwd ?> Kindly use this password</td>
            </tr>
        </table>
    </form>
</body>
</html>