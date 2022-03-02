<?php
include "templates/header.php";
include "usermodul.php";

session_start();
//echo $_SESSION['eingelgoggt'];

if(!isteingeloggt() && !empty($_POST['password'])){
    //echo "Einlogversuch";
    echo einloggen($_POST['email'],$_POST['password']);
}


if(!isteingeloggt()){
    header('Location: http://localhost/wp2019/castles/login.php?loginfailed=true');
    exit;
}


?>

<?php
include "datenbank.php";
if(!empty($_POST['add'])){
    array_push($db,
        array("name"=> $_POST['name'],
            "text"=> $_POST['text'],
            "bild"=> $_POST['bild'],
            "bundesland"=> $_POST['bundesland'],
            "stadt"=> $_POST['stadt']));
}
?>
<?php

if(!(empty($_POST['delete']))){
    unset($db[(int)$_POST['id']]);
}
?>

<?php

if(!(empty($_POST['update']))){
    $db[(int)$_POST['id']] = array(
        "name"=> $_POST['name'],
        "text"=> $_POST['text'],
        "bild"=> $_POST['bild'],
        "bundesland"=> $_POST['bundesland'],
        "stadt"=> $_POST['stadt']);
}
?>
<!DOCTYPE html>
<html>
<body>

<div id="wrapper">
    <div id="textbereich">
        <h1>Administrator Menu</h1>

        <form
                action="admin.php" method="post">


            <h2>Meine Einträge</h2>

            <table>
                <tr>
                    <th>Titel</th>
                    <th>Bild</th>
                    <th>Stadt</th>
                    <th>Bundesland</th>

                    <th>Beschreibung</th>
                    <th>Aktionen</th>
                </tr>
                <?php

                foreach ($db as $id => $schloss){


                    ?>
                    <tr>
                        <td><?php echo $schloss['name'];?></td>
                        <td><img src="<?php echo $schloss['bild'];?>" height="100px" ></td>
                        <td><?php echo $schloss['stadt'];?></td>
                        <td><?php echo $schloss['bundesland'];?></td>
                        <td><?php echo $schloss['text'];?></td>

                        <td>
                            <form method="post" action="admin.php">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <button name="delete" value="Löschen">Löschen</button>
                            </form>
                        </td>
                        <td>
                            <form method="post" action="admin.php">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <button name="edit" value="Bearbeiten">Bearbeiten</button>
                            </form>
                        </td>
                    </tr>
                    <?php

                }

                ?>

                <!--
                <tr>
                    <th>Titel</th>
                    <th>Bild</th>
                    <th>Beschreibung</th>
                </tr>
                <tr>
                    <td>Heidelberg</td>
                    <td><img height="300px" width="400px" src="img/content/heidelberg.jpg"></td>
                    <td width="300px">Das Heidelberger Schloss ist eine der berühmtesten Ruinen Deutschlands und das
                        Wahrzeichen der Stadt Heidelberg.
                        Bis zu seiner Zerstörung im Pfälzischen Erbfolgekrieg war es die Residenz der Kurfürsten von der
                        Pfalz.
                    </td>
                </tr>
                <tr>
                    <td>Hohenzollern</td>
                    <td><img height="300px" width="400px" src="img/content/hohenzollern.jpg"></td>
                    <td width="300px">Hohenzollern Castle is the ancestral seat of the imperial House of Hohenzollern.
                        The third of three
                        hilltop castles built on the site, it is located atop Mount Hohenzollern, above and south of
                        Hechingen, on the edge of
                        the Swabian Jura of central Baden-Württemberg, Germany.
                    </td>
                </tr>
                <tr>
                    <td>Schweriner Schloss</td>
                    <td><img height="300px" width="400px" src="img/content/schwerin.jpg"></td>
                    <td width="300px">Das Schweriner Schloss war jahrhundertelang die Residenz der mecklenburgischen
                        Herzöge und Großherzöge
                        und ist heute Sitz des Landtages von Mecklenburg-Vorpommern.
                    </td>
                </tr>
                -->
            </table>

            <br>

            <?php
            if(empty($_POST['edit'])) {

                ?>
                <div>
                    <h3>Neuer Eintrag</h3>
                    <form method="post" action="admin.php">

                        <input name="name">Name</input><br>
                        <input name="bild">Bild</input><br>
                        <input name="bundesland">Bundesland</input><br>
                        <input name="stadt">Stadt</input><br>
                        <textarea name="text" name rows="10" cols="50">Beschreibung</textarea>
                        <br>

                        <input type="submit" name="add" value="Hinzufügen">
                    </form>
                </div>
                <?php

            }

            ?>

            <div>

                <?php
                if(!(empty($_POST['edit']))){

                    ?>
                    <form method="post" action="admin.php">
                        <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
                        <input name="name" value="<?php echo $db[(int)$_POST['id']]['name'] ?>"> </input><br>
                        <input name="bild" value="<?php echo $db[(int)$_POST['id']]['bild'] ?>"></input><br>
                        <input name="bundesland" value="<?php echo $db[(int)$_POST['id']]['bundesland'] ?>"></input><br>
                        <input name="stadt" value="<?php echo $db[(int)$_POST['id']]['stadt'] ?>"></input><br>
                        <textarea  name ="text"name rows="10" cols="50"><?php echo $db[(int)$_POST['id']]['text'] ?></textarea>
                        <br>

                        <input type="submit" name="update" value="Update">
                    </form>
                    <?php
                }
                ?>

            </div>

    </div>
</div>
<footer>


</footer>
<?php
include "templates/footer.php";
?>
</body>
</html>
