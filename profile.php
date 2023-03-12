<!-- includes header -->
<?php
    include_once 'header.php';
?>

<section class="profile-form">
    <form method="post">
        <input type="submit" name="button1" class="button" value="Find a Donor" />
    </form>

    <!-- in progress, will redirect to matches page -->
    <?php
        if(array_key_exists('button1', $_POST)) {
    
            $tryUser = $_SESSION["userUsername"];

            require_once 'includes/matchuser.inc.php';

            $matchedDonorUsername = matchUser($tryUser);

            echo "$matchedDonorUsername";
        }
    ?>

</section>

<!-- includes footer -->
<?php
    include_once 'footer.php';
?>