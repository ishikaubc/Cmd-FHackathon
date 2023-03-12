<?php

if (isset($_POST["submit"])) {
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $location = $_POST["location"];
    $bloodtype = $_POST["bloodtype"];
    $history = $_POST["history"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($username, $password, $name, $email, $location, $bloodtype, $history) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    if (invalidUid($username) !== false) {
        header("location: ../signup.php?error=invaliduid");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }

    if (uidExists($conn, $username, $email) !== false) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $username, $password, $name, $email, $location, $bloodtype, $history);

} else {
    header("location: ../signup.php");
    exit();
}