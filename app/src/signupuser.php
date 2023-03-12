<!-- includes header -->
<?php
    include_once 'header.php';
?>

<section class="signupuser-form">
    <h1>Sign Up as a User</h1>
    <link rel="stylesheet" href="SignUpForms\donorlogin.css" />
    <form action="includes/signupuser.inc.php" method="post">
        <input type="text" name="username" placeholder="Enter a username...">
        <input type="password" name="password" placeholder="Password...">
        <input type="text" name="name" placeholder="Full Name...">
        <input type="text" name="email" placeholder="Email...">
        
        <!-- drop down menu to select location -->
        <?php
            require_once 'includes/dbh.inc.php';

            $result=mysqli_query($conn,"select * from canadacities");
            echo"<select name='location'>";
            echo"<option>-- Select Location -- </option>";
                while($row=mysqli_fetch_array($result)) {
                    echo"<option>$row[city]</option>";
                }
            echo"</select>";
        ?>

        <input type="text" name="bloodtype" placeholder="Blood Type...">
        <input type="text" name="description" placeholder="Description...">
        <button type="submit" name="submit">Sign Up</button>
    </form> 

    <!-- error handling for form input -->
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
    
<!-- includes footer -->
<?php
    include_once 'footer.php';
?>