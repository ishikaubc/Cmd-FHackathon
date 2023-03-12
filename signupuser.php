<?php
    include_once 'header.php';
?>

<section class="signupuser-form">
    <h2>Sign Up as a User</h2>
    <form action="includes/signupuser.inc.php" method="post">
        <input type="text" name="username" placeholder="Enter a username...">
        <input type="password" name="password" placeholder="Password...">
        <input type="text" name="name" placeholder="Full Name...">
        <input type="text" name="email" placeholder="Email...">
        <input type="text" name="location" placeholder="Location...">
        <input type="text" name="bloodtype" placeholder="Blood Type...">
        <input type="text" name="description" placeholder="Description...">
        <button type="submit" name="submit">Sign Up</button>
    </form> 
</section>
    