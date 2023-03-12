<?php
    include_once 'header.php';
?>

<section class="loginuser-form">
    <h2>Login</h2>
    <form action="includes/loginuser.inc.php" method="post">
        <input type="text" name="username" placeholder="Username...">
        <input type="password" name="password" placeholder="Password...">
        <button type="submit" name="submit">Login</button>
    </form> 

    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields.</p>";
        } else if ($_GET["error"] == "wronglogin") {
            echo "<p>Incorrect username or password.</p>";
        } 
    }
    ?>

</section>
    