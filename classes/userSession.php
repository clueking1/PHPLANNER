<?php

include("userLogin.php");

class UserSession extends UserLogin {
    function hi() {
        echo $this->un;
    }
}