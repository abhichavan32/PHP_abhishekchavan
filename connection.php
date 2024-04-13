<?php
$connect=mysqli_connect("localhost","root","","abhidb");
if($connect){
    echo "connected";
}
else{
    echo "nope";
}
?>