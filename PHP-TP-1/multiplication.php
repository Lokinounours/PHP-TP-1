<?php

    // Code .php permettant l'affichage d'une table de multiplication

    $lignemin = isset($_POST["ligneMin"]) ? $_POST["ligneMin"] : "";
    $lignemax = isset($_POST["ligneMax"]) ? $_POST["ligneMax"] : "";
    $colonnemin = isset($_POST["colonneMin"]) ? $_POST["colonneMin"] : "";
    $colonnemax = isset($_POST["colonneMax"]) ? $_POST["colonneMax"] : "";

    if ($lignemax <= $lignemin) {
        echo "Erreur ligne max";
        return;
    }
    if ($colonnemax <= $colonnemin) {
        echo "Erreur colonne max";
        return;
    }

    // Afficher la colonne
    echo "<table>";

    echo "<tr><td>x</td>";
    for ($col = $colonnemin ; $col <= $colonnemax ; $col++) {
        echo "<td>" .$col. "</td>";  
    }
    echo "</tr>";

    // Affichage du reste du tableau de multiplication 
    for ($ligne = $lignemin ; $ligne <= $lignemax ; $ligne++) {
        echo "<tr>";
        echo "<td>" .$ligne. "</td>";
        for ($col = $colonnemin ; $col <= $colonnemax ; $col++) {
            echo "<td>" .($ligne * $col). "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
?>