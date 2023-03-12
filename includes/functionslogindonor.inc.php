<?php

function emptyInputLogin($username, $password) {
    if (empty($username) || empty($password)) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

function uidExists($conn, $username) {
    $sql = "SELECT * FROM donors WHERE donorsUsername = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../logindonor.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function loginUser($conn, $username, $password) {
    $uidExists = uidExists($conn, $username);

    if ($uidExists == false) {
        header("location: ../logindonor.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["donorsPassword"];
    $checkPassword = password_verify($password, $pwdHashed);

    if ($checkPassword == false) {
        header("location: ../logindonor.php?error=wronglogin"); // SOMETHING WRONG HERE
        exit();
    } else if ($checkPassword == true) {
        session_start();
        $_SESSION["donorsUsername"] = $uidExists["donorsUsername"];
        header("location: ../index.php");
        exit();
    }
}