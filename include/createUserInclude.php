<?php
spl_autoload_register(function ($class_name) {
    include '../classes/' . $class_name . '.php';
});
include('../config/config.php');

$createUser = new CreateUser($_POST["unSig"], $_POST["emailSig"], $_POST["pwSig"], $conn);
echo $createUser->create();