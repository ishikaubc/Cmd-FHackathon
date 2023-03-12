<?php
    include_once 'header.php';
?>

<section class="signupdonor-form">
    <h2>Sign Up as a Donor</h2>
    <form action="includes/signupdonor.inc.php" method="post">
        <input type="text" name="username" placeholder="Enter a username...">
        <input type="password" name="password" placeholder="Password...">
        <input type="text" name="name" placeholder="Full Name...">
        <input type="text" name="email" placeholder="Email...">
        <input type="text" name="location" placeholder="Location...">
        <input type="text" name="bloodtype" placeholder="Blood Type...">
        <input type="text" name="history" placeholder="Medical History...">
        <button type="submit" name="submit">Sign Up</button>
    </form> 

    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields.</p>";
        } else if ($_GET["error"] == "invaliduid") {
            echo "<p>Choose a proper username.</p>";
        } else if ($_GET["error"] == "invalidemail") {
            echo "<p>Choose a proper email.</p>";
        } else if ($_GET["error"] == "usernametaken") {
            echo "<p>Username already taken.</p>";
        } else if ($_GET["error"] == "stmtfailed") {
            echo "<p>Something went wrong!</p>";
        } else if ($_GET["error"] == "none") {
            echo "<p>You have signed up!</p>";
        } 
    }
    ?>

</section>

<?php
    include_once 'footer.php';
?>
    