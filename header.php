<!-- ignore, starts session -->
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

                    <!-- inside quotation marks " " dictates what is shown in the header -->
                        <!-- LifeConnect (redirect to main menu), Profile Page, and Logout button when logged in  -->
                        <!-- LifeConnect (redirect to main menu), Sign Up as a Donor, Sign Up as a User, Login as Donor, Login as User otherwise -->
                    <?php
                        if (isset($_SESSION["userUsername"])) { 
                            echo "<li><a href='profileuser.php'>Profile Page</a></li>";
                            echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
                        } else if (isset($_SESSION["donorUsername"])) {
                            echo "<li><a href='profiledonor.php'>Profile Page</a></li>";
                            echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
                        } else {
                            echo "<li><a href='signupdonor.php'>Sign Up as a Donor</a></li>";
                            echo "<li><a href='signupuser.php'>Sign Up as a User</a></li>";
                            echo "<li><a href='logindonor.php'>Login as Donor</a></li>";
                            echo "<li><a href='loginuser.php'>Login as User</a></li>";
                        }
                    ?>
                </ul>
            </div>
        </nav>

<div class="wrapper">