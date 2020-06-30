<?php 
    spl_autoload_register(function ($class_name) {
        include './classes' . $class_name . '.php';
    });
    include('config/config.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Plan It</title>
</head>
<body>
    <?php include("addOns/navBar/navBar.php");?>
</body>
</html>