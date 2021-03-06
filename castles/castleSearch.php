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
                    <h5 style="color:#170D09">Das romantische Schloss Moyland mit seinen T??rmchen und Balkonen wurde bereits 1307
                        urkundlich erw??hnt. <br>Seither wurde es mehrmals umgestaltet, sogar zerst??rt und ab 1987 wieder aufgebaut.
                        Heute beherbergt es ein <br>Museum f??r moderne und zeitgen??ssische Kunst.Das Schloss ist umgeben von einer
                        bezaubernden Parkanlage<br>, die einen Skulpturenpark und auch einen Kr??utergarten bietet. Definitiv
                        sehenswert<br><a href="sites/moyland.html"> mehr informationen dazu finden sie hier </a></h5></center>


                <center>
                    <h2 style="color:dimgrey">
                        <li> L??wenburg, Kassel, Hessen</li>
                    </h2>
                    <p style="text-align:center"><img src="img/content/loewenburg.jpg" width="800" height="400"><h5
                            style="color:#170D09 ">Keine Festung sondern ein Lustschloss ist die L??wenburg, die von Landgraf Wilhelm IX. von
                        Hessen-Kassel erbaut <br>wurden. Mit ihren vielen T??rmchen, Erkern und Nischen, ist die Burg ein absolutes
                        Traumschloss, das heute als Muse<br>um dient. So kann man sich neben den fr??heren Wohnr??umen, auch eine umfangreiche
                        Waffensammlung sowie<br> mittelalterliche Glasfenster ansehen. <br><a href="sites/loewenburg.html"> mehr informationen
                            dazu finden sie hier </a></h5></center>


                <center>
                    <h2 style="color:dimgrey">
                        <li>Schloss Hohenschwangau, Bayern</li>
                    </h2>
                    <p style="text-align:center" ><img src="img/content/hohenschwangau.jpg" width="800" height="400"><h5
                            style="color:#170D09 ">Genau direkt gegen??ber von Schloss Neuschwanstein liegt diese Perle: Schloss
                        Hohenschwangau. Bereits im 12. <br>Jahrhundert war von einer Burg Schwanstein die Rede, aber erst 1832 wurde das
                        Schloss von Kronprinz Maxim<br>ilian von Bayern in seiner heutigen Form wieder aufgebaut. K??nig Ludwig II., der f??r
                        den Bau von Schloss <br>Neuschwanstein sowie zahlreicheandere Schl??sser verantwortlich ist, verbrachte auf Schloss
                        Hohenschwangau <br>seine Jugend. Wer also die ultimative Schlosstour unternehmen m??chte, ist in der Gegend genau
                        richtig.
                        <br><a href="sites/hohenschwangau.html"> mehr informationen dazu finden sie hier </a></h5></center>


                <center>
                    <h2 style="color:dimgrey">
                        <li>Schloss Lichtenstein, Baden-W??rttemberg</li>
                    </h2>
                    <p style="text-align:center"><img src="img/content/lichtenstein.jpg" width="800" height="400"><h5
                            style="color:#170D09 ">Eine dramatischere Lage kann man sich f??r ein Schloss kaum mehr vorstellen ??? direkt auf
                        einem steilen Felsen, <br>scheinbar nur ??ber eine Br??cke erreichbar. Schloss Lichtenstein galt im Mittelalter als
                        unbezwingbar, verlor aller<br>dings sp??ter immer mehr an Bedeutung und wurde sogar abgetragen. Erst 1837 wurde es
                        neu aufgebaut, so wie es <br>heute aussieht, was auch die Nebengeb??ude mit einschlie??t. Ein waschechtes
                        Ritterschloss wie aus dem Bilderbuch.<br><a href="sites/lichtenstein.html">mehr informationen dazu finden sie hier</a>

                    </h5></center>


                <center>
                    <h2 style="color:dimgrey">
                        <li>Schloss Schwerin, Mecklenburg-Vorpommern</li>
                    </h2>
                    <p style="text-align:center"><img src="img/content/schwerin.jpg" width="800" height="400"><h5
                            style="color:#170D09 ">Pomp??s und pr??chtig liegt Schloss Schwerin auf einer Insel des Schweriner Sees inmitten
                        einer sch??nen Seenland<br> schaft. Aber nicht nur die glamour??se Fassade, auch die prunkvollen R??umlichkeiten k??nnen
                        Besucher aus n??chster<br> N??he betrachten. ??brigens hat auch der Landtag von Mecklenburg-Vorpommern seinen Sitz in
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
