<?php
//session_unset();

include "dbconn.php";

session_start();


//ist der user eingeloggt (überprüft cookie)
function isteingeloggt (){
    if (isset($_SESSION['eingeloggt']) && $_SESSION['eingeloggt'] == true){
        return true;
    }else{
        return false;
    }
}


function einloggen($email, $password){
    $email = $_POST["email"];
    $password = $_POST["password"];

    global $conn;
    $query = "SELECT count(*) as count FROM Signu WHERE email = :email AND password = :password";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    $row = $stmt->fetch();
    $count = $row["count"];

    if($count > 0)
    {
            $_SESSION['eingeloggt'] = true;
            $_SESSION['email'] = $email;

    }
    else
    {
        return false;
    }






}


//user ausloggen

function ausloggen (){
$_SESSION['eingeloggt'] = false;
$_SESSION['email'] = "";
}

function datenvonbenutzer(){
    global $conn;
    $query = "SELECT * FROM Signu WHERE email = :email";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':email', $_SESSION["email"]);
    $stmt->execute();
    $row = $stmt->fetch();
    return $row;

}



?>
