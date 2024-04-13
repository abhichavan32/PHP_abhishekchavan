<?php
$connect = mysqli_connect("localhost", "root", "", "abhidb");

if(isset($_POST["submit"])) {
    $nots = $_POST["notice"];    
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }

   
    $qry = "INSERT INTO `admin` (`id`, `notice`) VALUES (NULL, '$nots')";
    $result = mysqli_query($connect, $qry);

    if($result) {
        header("Location: ".$_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "<script> alert('Something went wrong, try again later'); </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>
    <form method="post">
        <label for="notice">Add Notice/News:</label><br>
        <textarea id="notice" name="notice" rows="4" cols="50" required></textarea><br><br>
        
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
