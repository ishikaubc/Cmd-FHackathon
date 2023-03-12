<?php

if (array_key_exists('button1', $_POST)) {


    session_start();
    $tryUser = $_SESSION["userUsername"];

    require_once 'matchuser.inc.php';

    $matchedDonorUsername = matchUser($tryUser);

    echo "$matchedDonorUsername";

    $serverName = "localhost";
    $dBUsername = "root";
    $dBPassword = "";
    $dBName = "lifeconnect";

    $conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error()); // kill
    }

    $sql = "INSERT INTO matches (user, donor) VALUES (?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signupuser.php?error=stmtfailed");
    }

    mysqli_stmt_bind_param($stmt, "ss", $tryUser, $matchedDonorUsername);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../profileuser.php");
    exit();
}
