<?php
   include_once("header.php");
?>
<div class="wrapping" >
        <section class="index-intro">
        <?php
                if(isset($_SESSION["useruid"])){
                    echo"<p> Hello there ".$_SESSION["useruid"]."</p>";
                }
                ?>
            <header><h1>Safari Adventures</h1>
            <p>Explore the beauty of the wild</p>
            </header>
        </section>
        <section class="index-categories">
        <h3>Welcome to our Safari Adventure!</h3>
        <p>
        Join us for an unforgettable journey into the heart of the wilderness.<br>
        Witness majestic animals, experience breathtaking landscapes, <br>
        and create memories that will last a lifetime.<br>
        Experience the thrill of a safari adventure and, <br>
        witness the stunning wildlife in their natural habitat. <br>
        From majestic lions to graceful giraffes,<br>
         a safari offers a unique opportunity to observe and <br>
          appreciate the wonders of the animal kingdom.<br>
        Whether it's a game drive through the savannah,<br>
        a guided walking safari, or a hot air balloon ride over the plains,<br>
         there are endless ways to immerse yourself in the safari experience.<br> 
         With knowledgeable guides and comfortable accommodations,<br>
          your safari adventure promises to be unforgettable.
        </p>
        </section>

        <section>
        <h3>Our Safari Packages</h3>
        <p>Choose from our exciting safari packages tailored to meet your preferences:</p>
        <ul>
            <li>Classic Safari</li>
            <li>Photographic Safari</li>
            <li>Adventure Safari</li>
        </ul>
        </section>

        <section>
            <h3>Some photos</h3>
            <div class="flex-container">
            <img href="images/" src="images/Leopard climbing over a Defender in Namibia.jpeg" >
            <img href="images/" src="images/Lion Safari Africa - Free photo on Pixabay.jpeg">
            <img href="images/" src="images/Pin on Wildlife.jpeg"><br>
            <img href="images/" src="images/Taronga Western Plains Zoo.jpeg">
            <img href="images/" src="images/The Ultimate Guide to Wildlife Safari in South Africa.jpeg">
            <img href="images/" src="images/Uganda Safari, Best Safari in Uganda Safaris & Tours Places.jpeg">
            <img href="images/" src="images/Winter is_ Breathtaking sunsets - Londolozi Blog.jpeg">
            </div>
        </section>

        <section>
        <h3 id= Contact>Contact Us</h3>
        <p>Ready to embark on your safari adventure?<br>
         Contact us to book your trip!</p>
        <p>Email:@safariadventures.co.ke</p>
        <p>Phone: +254722345687</p>
        </section>
        <section>
        <footer> &copy; 2023 Safari Adventures by parsley</footer>
        </section>

 <?php
   include_once("footer.php");
?>
