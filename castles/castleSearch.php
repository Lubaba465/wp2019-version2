<!DOCTYPE html>
<html>
<link rel="stylesheet" href="css/components/main.css">
<body>
<?php
include "templates/header.php";
?>
<section class="" id="">
    <div class="grid-container">
        <div class="left" style="background-color:#aaa;">
            <div class="left-grid">
                <form action="/action_page.php">
                    <label for="county">Bundesland</label>
                    <select id="county" name="county">
                        <option value="niedersachsen">Niedersachsen</option>
                        <option value="bremen">Bremen</option>
                        <option value="hamburg">Hamburg</option>
                        <option value="berlin">Berlin</option>
                    </select>
                    <label for="city">Stadt</label>
                    <select id="city" name="Stadt">
                        <option value="oldenburg">Oldenburg</option>
                        <option value="bremen">Bremen</option>
                        <option value="hamburg">Hamburg</option>
                        <option value="berlin">Berlin</option>
                    </select>

                    <form class="">
                        Umgebung
                        <p>
                            <input class="w3-check" type="checkbox">
                            <label>See</label></p>
                        <p>
                            <input class="w3-check" type="checkbox">
                            <label>Wald</label></p>
                        <p>
                            <input class="w3-check" type="checkbox">
                            <label>Gebirge</label></p>
                    </form>

                    <input type="submit" value="Suche">
                </form>
            </div>

        </div>
        <div class="middle" style="background-color:#bbb;">
            <div class="container">
        <!--

                <center>
                    <h2 style="color:dimgray" id="Schloss Moyland, Nordrhein-Westfalen">
                        <li> Schloss Moyland, Nordrhein-Westfalen</li>
                    </h2>
                    <p style="text-align:center"><img src="img/content/moyland.jpg" width="800" height="400">
                    <h5 style="color:#170D09">Das romantische Schloss Moyland mit seinen Türmchen und Balkonen wurde bereits 1307
                        urkundlich erwähnt. <br>Seither wurde es mehrmals umgestaltet, sogar zerstört und ab 1987 wieder aufgebaut.
                        Heute beherbergt es ein <br>Museum für moderne und zeitgenössische Kunst.Das Schloss ist umgeben von einer
                        bezaubernden Parkanlage<br>, die einen Skulpturenpark und auch einen Kräutergarten bietet. Definitiv
                        sehenswert<br><a href="sites/moyland.html"> mehr informationen dazu finden sie hier </a></h5></center>


                <center>
                    <h2 style="color:dimgrey">
                        <li> Löwenburg, Kassel, Hessen</li>
                    </h2>
                    <p style="text-align:center"><img src="img/content/loewenburg.jpg" width="800" height="400"><h5
                            style="color:#170D09 ">Keine Festung sondern ein Lustschloss ist die Löwenburg, die von Landgraf Wilhelm IX. von
                        Hessen-Kassel erbaut <br>wurden. Mit ihren vielen Türmchen, Erkern und Nischen, ist die Burg ein absolutes
                        Traumschloss, das heute als Muse<br>um dient. So kann man sich neben den früheren Wohnräumen, auch eine umfangreiche
                        Waffensammlung sowie<br> mittelalterliche Glasfenster ansehen. <br><a href="sites/loewenburg.html"> mehr informationen
                            dazu finden sie hier </a></h5></center>


                <center>
                    <h2 style="color:dimgrey">
                        <li>Schloss Hohenschwangau, Bayern</li>
                    </h2>
                    <p style="text-align:center" ><img src="img/content/hohenschwangau.jpg" width="800" height="400"><h5
                            style="color:#170D09 ">Genau direkt gegenüber von Schloss Neuschwanstein liegt diese Perle: Schloss
                        Hohenschwangau. Bereits im 12. <br>Jahrhundert war von einer Burg Schwanstein die Rede, aber erst 1832 wurde das
                        Schloss von Kronprinz Maxim<br>ilian von Bayern in seiner heutigen Form wieder aufgebaut. König Ludwig II., der für
                        den Bau von Schloss <br>Neuschwanstein sowie zahlreicheandere Schlösser verantwortlich ist, verbrachte auf Schloss
                        Hohenschwangau <br>seine Jugend. Wer also die ultimative Schlosstour unternehmen möchte, ist in der Gegend genau
                        richtig.
                        <br><a href="sites/hohenschwangau.html"> mehr informationen dazu finden sie hier </a></h5></center>


                <center>
                    <h2 style="color:dimgrey">
                        <li>Schloss Lichtenstein, Baden-Württemberg</li>
                    </h2>
                    <p style="text-align:center"><img src="img/content/lichtenstein.jpg" width="800" height="400"><h5
                            style="color:#170D09 ">Eine dramatischere Lage kann man sich für ein Schloss kaum mehr vorstellen – direkt auf
                        einem steilen Felsen, <br>scheinbar nur über eine Brücke erreichbar. Schloss Lichtenstein galt im Mittelalter als
                        unbezwingbar, verlor aller<br>dings später immer mehr an Bedeutung und wurde sogar abgetragen. Erst 1837 wurde es
                        neu aufgebaut, so wie es <br>heute aussieht, was auch die Nebengebäude mit einschließt. Ein waschechtes
                        Ritterschloss wie aus dem Bilderbuch.<br><a href="sites/lichtenstein.html">mehr informationen dazu finden sie hier</a>

                    </h5></center>


                <center>
                    <h2 style="color:dimgrey">
                        <li>Schloss Schwerin, Mecklenburg-Vorpommern</li>
                    </h2>
                    <p style="text-align:center"><img src="img/content/schwerin.jpg" width="800" height="400"><h5
                            style="color:#170D09 ">Pompös und prächtig liegt Schloss Schwerin auf einer Insel des Schweriner Sees inmitten
                        einer schönen Seenland<br> schaft. Aber nicht nur die glamouröse Fassade, auch die prunkvollen Räumlichkeiten können
                        Besucher aus nächster<br> Nähe betrachten. Übrigens hat auch der Landtag von Mecklenburg-Vorpommern seinen Sitz in
                        einem Teil von<br> Schloss Schwerin.<br>
                        <a href="sites/schwerin.html">mehr informationen dazu finden sie hier</a>

                    </h5></center>

-->

        <?php

        include "datenbank.php";


        foreach ($db as $schloss){

            if(stripos($schloss['name'], $_POST['suchtext']) !== false || empty($_POST['suchtext'])){
                ?>
                <center>
                <h2><?php echo $schloss['name']; echo ", "; echo $schloss['stadt']; echo " "; echo $schloss['bundesland']; ?></h2>
                <p>
                    <img src="<?php echo $schloss['bild']; ?>" width="80%" >
                    <br>
                    <?php echo $schloss['text']; ?>
                </p>
                    </center>
            <?php
            }


        }


        ?>

            </div>

        </div>

    </div>
</section>
<?php
include "templates/footer.php";
?>

</body>
</html>
