
<!DOCTYPE html>
<html lang="de">
<head>

    <meta charset="UTF-8">
    <title>Signup</title>

    <link rel="stylesheet" type="text/css" href="css/signup.css">

<body>

<header>

    <?php
    include "templates/header.php";
    ?>

</header>  <?php
                   if (isset($_POST["vorname"]) &&
                       isset($_POST["nachname"]) &&
                       isset($_POST["email"]) &&
                       isset($_POST["password"])) {

                       try {
                           $user = "root";
                           $pw = null;

                           $dsn = "sqlite:Signup.db";
                           $db = new PDO($dsn, $user, $pw);

                           $sql = "INSERT INTO Signu
                          (vorname, 
                           nachname,
                           email,
                          password)
                          VALUES (?, ?, ?, ?)";
                           $werte = array(
                               $_POST["vorname"],
                               $_POST["nachname"],
                               $_POST["email"],
                               $_POST["password"]
                           );
                           $kommando = $db->prepare($sql);
                           $kommando->execute($werte);
                           echo "Eintrag hinzugef&uuml;gt.";
                       } catch (PDOException $e) {
                           echo 'Fehler: ' . htmlspecialchars($e->getMessage());
                       }
                   }
                   ?>


<div class="signup">
    <form method="post">

    <input type="text" id="vorname" placeholder="Vorname" name="vorname" required>


    <input type="text" id="nachname" placeholder="Nachname" name="nachname" required>


    <input type="email" id="besuchermail" placeholder="Email-Adresse" name="email" required>


    <input type="password" id="password" placeholder="Password" name="password" required>

    <input type="submit" value="Registrieren">

    <p>Sind Sie bereits Mitglied?<a href="login.php">Anmelden</a></p>
    </form>
</div>
</form>
</div>

</body>

</html>
