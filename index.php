<?php
session_start();
spl_autoload_register(function ($class_name) {
    include './classes/' . $class_name . '.php';
});
include('./config/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/signup.css">
    <title>Plan It</title>
</head>
<body>
    <?php include("addOns/navBar/navBar.php");?>
    <?php include("addOns/loginModal/loginModal.php");?>
    <?php include("addOns/signupModal/signupModal.php");?>
    <?php 
        echo $_SESSION["username"];
        if(isset($_SESSION["username"])) {
            include("addOns/logOut/logOut.php");
        }
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./JS/modal.js"></script>
    <script src="./JS/form.js"></script>
</body>
</html>