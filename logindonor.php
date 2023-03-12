<!-- includes header -->
<?php
    include_once 'header.php';
?>

<section class="logindonor-form">
    <h1>Login as Donor</h1>
    <link rel="stylesheet" href="SignUpForms\donorlogin.css" />
    <form action="includes/logindonor.inc.php" method="post">
        <input type="text" name="username" placeholder="Username...">
        <input type="password" name="password" placeholder="Password...">
        <button type="submit" name="submit">Login</button>
    </form> 

    <!-- error handling for form inputs -->
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
    
<!-- includes footer -->
<?php
    include_once 'footer.php';
?>