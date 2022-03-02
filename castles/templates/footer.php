<?php

include "../usermodul.php";
?>

<footer class="footer-container">
    <nav class="navbar navbar-default navbar-fixed-nav navbar-nav-center">
        <a class="about" href="about.php#about-us">Über uns</a>
        <a class="about" href="about.php#impressum">Impressum</a>
        <a class="about" href="about.php#dataProtection">Datenschutz</a>
<br>
        <?php
            if(isteingeloggt()){
                echo "Sie sind angemeldet als ". datenvonbenutzer()["vorname"] . ".";
            }
        ?>
    </nav>
</footer>