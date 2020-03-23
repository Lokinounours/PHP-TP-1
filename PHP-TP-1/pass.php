<?php
    $login = isset($_POST["identifiant"])? $_POST["identifiant"] : "";
    $pass = isset($_POST["passw"])? $_POST["passw"] : "";

    //mot de passe stockés dans le serveur
    $logs = array(
        "toto" => "totomdp",
        "titi" => "titimdp",
        "tutu" => "tutu123",
    );

    $connexion = false;
    // $log.foreach ($e) {
    //     if ($pass == $e)$connexion = true;
    // }
    for ($i = 0; $i < count($logs); $i++) {
        if ($logs[$login] == $pass) {
            $connexion = true;
            break;
        }
    }

    if ($connexion) {
        echo "Connexion valid";
    }
    else echo "Connexion failed"
?>

