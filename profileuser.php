<!-- includes header -->
<?php
    include_once 'header.php';
?>

<section class="profileuser-form">
    <?php
        $tryUser = $_SESSION["userUsername"];

        require_once 'includes/dbh.inc.php';
        require_once 'includes/functionsloginuser.inc.php';

        $user = uidExists($conn, $tryUser);

        echo "<h3>Hello, $user[usersName]</h3>";
    ?>

    <form action="includes/profileuser.inc.php" method="post">
        <input type="submit" name="button1" class="button" value="Find a Donor" />
    </form>    

</section>

<!-- includes footer -->
<?php
    include_once 'footer.php';
?>