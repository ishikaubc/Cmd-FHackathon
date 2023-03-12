<?php

if (isset($_POST["submit"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once 'dbh.inc.php';
    require_once 'functionslogindonor.inc.php';

    if (emptyInputLogin($username, $password)) {
        header("location: ../logindonor.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $username, $password);
} else {
    header("location: ../logindonor.php");
    exit();
}