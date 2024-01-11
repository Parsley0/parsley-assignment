<?php
   include_once("header.php");
?>
        <section class="signup-form">
           <h2>Log In</h2>
           <div class="signup-form-form">
           <form action="includes/login.inc.php" method="post">
            <input type="text" name="uid" placeholder="username/email"><br>
            <input type="password" name="pwd" placeholder="password..."><br>
             <button type="submit" name="submit" class="button">Log in
             </button>
             <p class="signup-link">
        Don't have an account?
             <a href="signup.php" class="signup-link link"> Sign up now</a></p>
             <span class="animation"></span>
            </form>
           </div>
           <?php
if (isset($_GET["error"])) {
   if ($_GET["error"] == "emptyinput"){
      echo "<p>Fill in all the fields!</p>";
   }
   else if ($_GET["error"] == "wronglogin"){
      echo "<p>Incorrect login information!</p>";
   }
}
?>
        </section>

 <?php
   include_once("footer.php");
?>