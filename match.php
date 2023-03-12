<!-- includes header -->
<?php
    include_once 'header.php';
?>

<section class="matchuser-form">
    <?php
        $tryUser = $_SESSION["userUsername"];

        require_once 'includes/dbh.inc.php';
        require_once 'includes/functionsloginuser.inc.php';

        $user = uidExists($conn, $tryUser);

        echo "<h3>Congrats, $user[usersName]</h3>";
        echo "<h3>We found a match!</h3>";
    ?>

    <form action="includes/match.inc.php" method="post">
        <input type="submit" name="button1" class="button" value="Accept Donor" />
    </form>
    
</section>

<!-- includes footer -->
<?php
    include_once 'footer.php';
?>