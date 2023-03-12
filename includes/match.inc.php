<?php

function createMatch($conn, $userUsername, $donorUsername) {
    $sql = "INSERT INTO matches (user, donor) VALUES (?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signupuser.php?error=stmtfailed");
    }

    mysqli_stmt_bind_param($stmt, "sssssss", $username, $hashedPwd, $name, $email, $location, $bloodtype, $description);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signupuser.php?error=none"); 
    exit();
}

if (array_key_exists('button1', $_POST)) {


    session_start();
    $tryUser = $_SESSION["userUsername"];

    require_once 'matchuser.inc.php';

    $matchedDonorUsername = matchUser($tryUser);

    echo "$matchedDonorUsername";
}

header("location: ../match.php");
exit();
