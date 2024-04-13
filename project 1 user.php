<?php


include("connection.php");

$sql = "SELECT `notice` FROM `admin` order by id desc limit 5";
$result = mysqli_query($connect, $sql);




mysqli_close($connect);
?>


<style>
    .cardbody{
        padding-left:0px;
    }
    ul li{
        line-height:40px;
        font-size:20px;
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <h3>welcome user</h3>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">notice</div>
                    <marquee direction="up">
                    <div class="card-body">
                       <ul>

                      <?php
                      
                       if (mysqli_num_rows($result) > 0) {
    
                             while(
                             $data = mysqli_fetch_assoc($result))
                             {?>
                                  <li><?php echo $data["notice"];?></li>

                            <?php }
  
                                 mysqli_free_result($result);
                                         } else
                                         
                                         {
                            ?>
                                <li>no notice found</li>

                                    <?php   }  ?>


                       </ul> 
                    </div>
                </div>
                                         </marquee>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
