<?php

class CreateUser {
    private $username;
    private $email;
    private $password;
    private $con;

    function __construct($username, $email, $password, $con) {
        $this->un = $username;
        $this->email = $email;
        $this->pw = password_hash($password, PASSWORD_BCRYPT);
        $this->conn = $con;
    }

    function create() {
        $sql = "INSERT INTO user (username, email, pw)
        VALUES ('$this->un', '$this->email', '$this->pw')";
        if (mysqli_query($this->conn, $sql)) {
            header('Location: /PHPLANNER');
        } else {
            return "Error: " . $sql . "<br>" . mysqli_error($this->conn);
        }
        mysqli_close($conn);
    }
}