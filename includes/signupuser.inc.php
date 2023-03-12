<?php

if (isset($_POST["submit"])) {
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $location = $_POST["location"];
    $bloodtype = $_POST["bloodtype"];
    $description = $_POST["description"];

    require_once 'dbh.inc.php';
    require_once 'functionsuser.inc.php';

    if (emptyInputSignup($username, $password, $name, $email, $location, $bloodtype, $description) !== false) {
        header("location: ../signupuser.php?error=emptyinput");
        exit();
    }

    if (invalidUid($username) !== false) {
        header("location: ../signupuser.php?error=invaliduid");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("location: ../signupuser.php?error=invalidemail");
        exit();
    }

    if (uidExists($conn, $username, $email) !== false) {
        header("location: ../signupuser.php?error=usernametaken");
        exit();
    }

    createUser($conn, $username, $password, $name, $email, $location, $bloodtype, $description);

} else {
    header("location: ../signupuser.php");
    exit();
}