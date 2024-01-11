<?php
   include_once("header.php");
?>
        <section class="signup-form">
           <h2>Sign Up</h2>
           <div class="signup-form-form">
           <form action="includes/signup.inc.php" method="post">
            <input type="text" name="name" placeholder="full name..."><br>
            <input type="text" name="email" placeholder="email..."><br>
            <input type="text" name="uid" placeholder="username"><br>
            <input type="password" name="pwd" placeholder="password..."><br>
            <input type="password" name="pwdrepeat" placeholder="repeat password"><br>
            <button type="submit" name="submit" class="button">Sign Up
            </button>
            <span class="animation"></span>
            <?php
if (isset($_GET["error"])) {
   if ($_GET["error"] == "emptyinput"){
      echo "<p>Fill in all the fields!</p>";
   }
   else if ($_GET["error"] == "invaliduid"){
      echo "<p>Choose proper username!</p>";
   } 
   else if ($_GET["error"] == "invalidemail"){
      echo "<p>Choose a proper email!</p>";
   }
    else if ($_GET["error"] == "passwordsdontmatch"){
      echo "<p>Password doesn't match!</p>";
   } else if ($_GET["error"] == "stmtfailed"){
      echo "<p>Something went wrong try again!</p>";
   }else if ($_GET["error"] == "usernamealreadytaken"){
      echo "<p>Username already taken!</p>";
   } else if ($_GET["error"] == "none"){
      echo "<p>You have signed in successfully!</p>";
   }
}
?>
         </form>
           </div>
</section>
 <?php
   include_once("footer.php");
?>