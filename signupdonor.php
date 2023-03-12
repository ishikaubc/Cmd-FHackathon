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
</section>

<?php
    include_once 'footer.php';
?>
    