<!-- includes header -->
<?php
    include_once 'header.php';
?>

<link rel = "stylesheet" stylesheet = "donorlogin.css">
<section >

<div class = "login-image">
    <image src = "1.jpg" alt="donor">
</div>

   <div class = "sign-up-form">
    <h1>Donor Registration Form</h1>
    <p>Please fill out this form with the required information</p>
    <form method="post">
      <fieldset>
        <label for="first-name">Enter Your First Name: <input id="first-name" name="first-name" type="text" required /></label>
        <label for="last-name">Enter Your Last Name: <input id="last-name" name="last-name" type="text" required /></label>
        <label for="email">Enter Your Email: <input id="email" name="email" type="email" required /></label>
        <label for="username">Create a username <input id="username" name="username" type="text" required /></label>
        <label for="new-password">Create a New Password: <input id="new-password" name="new-password" type="password" pattern="[a-z0-5]{8,}" required /></label>
      </fieldset>

    <fieldset>
      <label for="location">Enter your Location: <input id="location" name="location" type="text"></label>
      <select name= "location" id= "location">
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

<label for="username">Enter your blood group<input id="bloodgroup" name="bloodgroup" type="text" required /></label>
        <label for="medical-history">Any past medical history <input id="medical-history" name="medical history" type="text"  required /></label>
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
    </div>

</section>

<!-- includes footer -->
<?php
    include_once 'footer.php';
?>