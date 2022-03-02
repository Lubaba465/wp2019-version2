<?php

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);


include "usermodul.php";



try
{


    if(isset($_POST["login"]))
    {
        if(empty($_POST["email"]) || empty($_POST["password"]))
        {
            $message = '<label>All fields are required</label>';
        }
        else
        {
         einloggen($_POST["email"],$_POST["password"]);
         if(isteingeloggt()){
             header('Location: http://localhost/wp2019/castles/admin.php');
             //echo "Hallo " . isteingeloggt();
         }
        }
    }
}
catch(PDOException $error)
{
    $message = $error->getMessage();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Webslesson Tutorial | PHP Login Script using PDO</title>
    <link rel="stylesheet" type="text/css" href="css/logine.css">

</head>

<body>
<?php
include "templates/header.php";
?>
<br />
<div class="container" style="width:500px; action="admin.php">
    <?php
    if(isset($message))
    {
        echo '<label class="text-danger">'.$message.'</label>';
    }
    ?>
<form action="admin.php" method="post">

<div class="login">

    <input type="email-Adresse" name="email" placeholder="Email-adresse" id="emailadresse">


    <input type="password" name="password" placeholder="Password" id="password">
    <input type="submit" value="Login">
    <a href="recoverpw-formularanfrage.php" class="forgot">forgot
        password?</a>


    <p>Sind Sie neu? <a
                href="signup.php">Registrieren</a></p>
</div>
</form>
</body>

</html>
