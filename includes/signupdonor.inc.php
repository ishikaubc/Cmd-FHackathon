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
    require_once 'functionsdonor.inc.php';

    if (emptyInputSignup($username, $password, $name, $email, $location, $bloodtype, $history) !== false) {
        header("location: ../signupdonor.php?error=emptyinput");
        exit();
    }

    if (invalidUid($username) !== false) {
        header("location: ../signupdonor.php?error=invaliduid");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("location: ../signupdonor.php?error=invalidemail");
        exit();
    }

    if (uidExists($conn, $username, $email) !== false) {
        header("location: ../signupdonor.php?error=usernametaken");
        exit();
    }

    createUser($conn, $username, $password, $name, $email, $location, $bloodtype, $history);

} else {
    header("location: ../signupdonor.php");
    exit();
}