<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en" dir ="ltr">
    <head>
        <meta charset="utf-8">
        <title>LifeConnect</title>
    </head>
    <body>
        <nav>
            <div class="wrapper">
                <ul>
                    <li><a href="index.php">LifeConnect</a></li>

                    <?php
                        if (isset($SESSION["donorsUsername"])) {
                            echo "<li><a href='profile.php'>Profile Page</a></li>";
                            echo "<li><a href='logout.php'>Logout</a></li>";
                        } else {
                            echo "<li><a href='signupdonor.php'>Sign Up as a Donor</a></li>";
                            echo "<li><a href='signupuser.php'>Sign Up as a User</a></li>";
                            echo "<li><a href='logindonor.php'>Login</a></li>";
                            echo "<li><a href='loginuser.php'>Login</a></li>";
                        }
                    ?>
                </ul>
            </div>
        </nav>

<div class="wrapper">