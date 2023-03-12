<?php

/** https://stackoverflow.com/a/10054282
* Calculates the great-circle distance between two points, with
* the Haversine formula.
* @param float $latitudeFrom Latitude of start point in [deg decimal]
* @param float $longitudeFrom Longitude of start point in [deg decimal]
* @param float $latitudeTo Latitude of target point in [deg decimal]
* @param float $longitudeTo Longitude of target point in [deg decimal]
* @param float $earthRadius Mean earth radius in [m]
* @return float Distance between points in [m] (same as earthRadius)
*/
function haversineGreatCircleDistance($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo, $earthRadius = 6371000)
{
// convert from degrees to radians
$latFrom = deg2rad($latitudeFrom);
$lonFrom = deg2rad($longitudeFrom);
$latTo = deg2rad($latitudeTo);
$lonTo = deg2rad($longitudeTo);

$latDelta = $latTo - $latFrom;
$lonDelta = $lonTo - $lonFrom;

$angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
return $angle * $earthRadius;
}

function findLocationByUser($conn, $username) {
    $sql = "SELECT * FROM users WHERE usersUsername = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index.php"); // CHANGE THIS
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row["usersLocation"];
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function findCityByName($conn, $city) {
    $sql = "SELECT * FROM canadacities WHERE city = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index.php"); // CHANGE THIS
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $city);
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

// given user's username, find username of donor closest to them
function matchUser($username) {
    require_once 'dbh.inc.php';
    require_once 'functionsloginuser.inc.php';

    $userCity = findLocationByUser($conn, $username);
    $userLocation = findCityByName($conn, $userCity);
    $userLatitude = $userLocation["lat"];
    $userLongitude = $userLocation["lng"];

    $minDistance = -1;
    $minDistanceDonor = "";

    $result1=mysqli_query($conn,"select * from donors");

    while($row=mysqli_fetch_array($result1)) {
        $donorCity = $row["donorsLocation"];
        $donorLocation = findCityByName($conn, $donorCity);
        $donorLatitude = $donorLocation["lat"];
        $donorLongitude = $donorLocation["lng"];

        $distance = haversineGreatCircleDistance($userLatitude, $userLongitude, $donorLatitude, $donorLongitude, 6371000);
        
        // CHECK THAT BLOOD TYPE MATCHES

        if ($minDistance == -1) {
            $minDistance = $distance;
            $minDistanceDonor = $row["donorsName"];
        } else if ($distance < $minDistance) {
            $minDistance = $distance;
            $minDistanceDonor = $row["donorsName"];
        }
    }

    return $minDistanceDonor;
}