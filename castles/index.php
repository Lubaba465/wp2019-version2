<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Deutsche Schloesser</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/components/carousel.css">

    <meta name="viewport" content="initial-scale=1.0; width=device-width">
</head>
<body>

<!-- Header -->
<?php
include "templates/header.php";
?>

<!-- The flexible grid (content) -->
<div class="column">
    <div class="side">
    </div>

    <div class="main">
        <div class="row">
            <div class="thumbnail">
                <div class="slider-container">
                    <div class="menu">
                        <label for="slide-dot-1"></label>
                        <label for="slide-dot-2"></label>
                        <label for="slide-dot-3"></label>
                    </div>

                    <input  id="slide-dot-1" type="radio" name="slides" checked>
                    <div class="slide slide-1">
                        <img class="portrait" src="img/content/hohenschwangau.jpg">
                    </div>

                    <input id="slide-dot-2" type="radio" name="slides">
                    <div class="slide slide-2">
                        <img class="portrait" src="img/content/schwerin.jpg">
                    </div>

                    <input id="slide-dot-3" type="radio" name="slides">
                    <div class="slide slide-3">
                        <img class="portrait" src="img/content/heidelberg.jpg">
                    </div>
                </div>
            </div>
            <div class="thumbnail">
                <img class="portrait" src="img/content/loewenburg.jpg">
            </div>
            <div class="thumbnail">
                <img class="portrait" src="img/content/map.jpg">
            </div>
        </div>
    </div>
    <div class="side">
    </div>
</div>

<!-- Footer -->
<?php
include "templates/footer.php";
?>

</body>
</html>
