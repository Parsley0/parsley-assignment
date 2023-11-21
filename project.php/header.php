<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php project</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body >
    <nav>
        <div class="wrapper"  id="header">
            <ul>
                <li><a href="index.php">home</a></li>
                <li><a href="#Contact">Contact</a></li>
                <?php
                if(isset($_SESSION["useruid"])){
                    echo"<li><a href='profile.php'>profile page</a></li>";
                    echo "<li><a href='includes/logout.inc.php'>log out</a></li>";
                }
                else{
                    echo "<li><a href='signup.php'>sign up</a></li>";
                    echo " <li><a href='login.php'>log in</a></li>";
                }
                ?>
            </ul>
        </div>
    </nav><br>
   
    