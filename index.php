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
    <title>Plan It</title>
</head>
<body>
    <h2>Hi</h2>
</body>
</html>