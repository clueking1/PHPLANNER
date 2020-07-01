<?php

class UserLogin {
    private $username;
    private $password;
    private $con;

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
            echo "yesss";
        } else {
            echo "noooo";
        }
    }

}