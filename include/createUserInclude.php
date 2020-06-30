<?php
spl_autoload_register(function ($class_name) {
    include '../classes/' . $class_name . '.php';
});
include('../config/config.php');

if ($_POST["unSig"]!== '' && $_POST["emailSig"] !== '' && $_POST["pwSig"] !== '') {
    if($_POST["pwSig"] === $_POST["conPwSig"]) {
        $createUser = new CreateUser($_POST["unSig"], $_POST["emailSig"], $_POST["pwSig"], $conn);
        $createUser->create();
    }
} else {

}
