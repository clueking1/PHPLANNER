<?php
spl_autoload_register(function ($class_name) {
    include '../classes/' . $class_name . '.php';
});
include('../config/config.php');

if ($_POST["unLog"]!== '' &&  $_POST["pwLog"] !== '') {
    
        $loginUser = new UserLogin($_POST["unLog"], $_POST["pwLog"], $conn);
        
    
} else {

}