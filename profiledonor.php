<!-- includes header -->
<?php
    include_once 'header.php';
?>

<section class="profiledonor-form">

<?php
    $tryUser = $_SESSION["donorUsername"];

    require_once 'includes/dbh.inc.php';
    require_once 'includes/functionslogindonor.inc.php';

    $donor = uidExists($conn, $tryUser);

    echo "<h3>Hello, $donor[donorsName]</h3>";

    $result1 = mysqli_query($conn, "select * from matches");

    $match = NULL;

    while ($row = mysqli_fetch_array($result1)) {
        $donorUsername = $row["donor"];

        if ($donor["donorsUsername"] == $donorUsername) {
            $match = $row;
        }
    }

    if ($match !== NULL) {
        echo "<h3>$match[donor] has matched with $match[user]</h3>";
    }
    ?>

</section>

<!-- includes footer -->
<?php
    include_once 'footer.php';
?>