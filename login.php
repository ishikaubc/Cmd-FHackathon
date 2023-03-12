<?php
    include_once 'header.php';
?>

<section class="login-form">
    <h2>Login</h2>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="username" placeholder="Username/Email...">
        <input type="password" name="password" placeholder="Password...">
        <button type="submit" name="submit">Login</button>
    </form> 
</section>
    