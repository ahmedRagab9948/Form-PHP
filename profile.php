<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/index.css" />
</head>
<body>
<div class="frist-form">
      <div class="container text-center pb-5">
      <?php
            ob_start(); 
            session_start();
            if(!empty($_SESSION['f_name'])){
                echo "Hello" . " " . $_SESSION['f_name'] . " " . $_SESSION['s_name'] . "<br>" ."<br>";
                echo "Your First Name Is => " . " " . $_SESSION['f_name'] . "<br>" . "<br>";
                echo "Your Last Name Is => " . " " . $_SESSION['s_name'] . "<br>" . "<br>";
                echo "Your Email Is => " . " " . $_SESSION['email'] . "<br>" . "<br>";
                echo "Your Phone Is => " . " " . $_SESSION['phone'] . "<br>" . "<br>";
            }else{
                header("Location:login.php");
            }
      ?>
            <a class="btn btn-primary" style = "width: 100%; margin-top: 20px;" href="logout.php">logout</a>
      </div>
</div>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>
</body>
</html>


<?php


ob_end_flush();
?>