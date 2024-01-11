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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head> 
<body >
    <nav>
        <div class="wrapper"  id="header">
            <ul>
                <?php
                if(isset($_SESSION["useruid"])){
                    echo"<li><a href='home.php'>home</a></li";
                    echo"<li><a href='#Contact'>Contact</a></li>";
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
   
    