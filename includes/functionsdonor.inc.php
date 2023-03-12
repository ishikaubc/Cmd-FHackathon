<?php

function emptyInputSignup($username, $password, $name, $email, $location, $bloodtype, $history) {
    if (empty($username) || empty($password) || empty($name) || empty($email) || empty($location) || empty($bloodtype) || empty($history)) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

function invalidUid($username) {
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

function invalidEmail($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

function uidExists($conn, $username, $email) {
    $sql = "SELECT * FROM donors WHERE donorsUsername = ? OR donorsEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signupdonor.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
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

function createUser($conn, $username, $password, $name, $email, $location, $bloodtype, $history) {
    $sql = "INSERT INTO donors (donorsUsername, donorsPassword, donorsName, donorsEmail, donorsLocation, donorsBloodtype, donorsHistory) VALUES (?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signupdonor.php?error=stmtfailed");
    }

    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssssss", $username, $hashedPwd, $name, $email, $location, $bloodtype, $history);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signupdonor.php?error=none"); 
    exit();
}