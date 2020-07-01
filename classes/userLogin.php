<?php

class UserLogin {
    public $username;
    private $password;
    public $con;

    function __construct($username, $password, $con) {
        $this->un = $username;
        $this->pw = $password;
        $this->con = $con;
    }

    function __destruct() {
        $sql = "SELECT pw FROM user WHERE username='$this->un'";
        $result = $this->con->query($sql);
        $row = $result->fetch_assoc();
        $hash = $row["pw"];
        if (password_verify($this->pw, $hash)) {
            session_start();
            $_SESSION["username"] = $this->un;
            header('Location: /PHPLANNER');
        } else {
            echo "noooo";
           
        }
    }

}