<?php

if (array_key_exists('button1', $_POST)) {


    session_start();
    $tryUser = $_SESSION["userUsername"];

    require_once 'matchuser.inc.php';

    $matchedDonorUsername = matchUser($tryUser);

    echo "$matchedDonorUsername";
}

header("location: ../match.php");
exit();
