<?php
    include_once 'header.php';
?>

<section class="profile-form">
    <form method="post">
        <input type="submit" name="button1" class="button" value="Find a Donor" />
    </form>

    <?php
        if(array_key_exists('button1', $_POST)) {
    
            $tryUser = $_SESSION["userUsername"];

            require_once 'includes/matchuser.inc.php';

            $matchedDonorUsername = matchUser($tryUser);

            echo "$matchedDonorUsername";
        }
    ?>

</section>

<?php
    include_once 'footer.php';
?>