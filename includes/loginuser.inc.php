<?php

if (isset($_POST["submit"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once 'dbh.inc.php';
    require_once 'functionsloginuser.inc.php';

    if (emptyInputLogin($username, $password)) {
        header("location: ../loginuser.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $username, $password);
} else {
    header("location: ../loginuser.php");
    exit();
}