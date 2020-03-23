<?php
    $database = "family";

    $db_handle = mysqli_connect('localhost', 'root', '');
    $db_found = mysqli_select_db($db_handle, $database);

    if ($db_found) {
        // $sql = "SELECT * FROM member"; // tous
        // $sql = "SELECT * FROM member WHERE DateNaissance < '1960-01-01'"; // née avant 1960
        // $sql = "SELECT * FROM member where Prenom LIKE '%ma%'"; // Ou il y a ma dans le prenom
        $sql = "SELECT * FROM member ORDER BY Prenom DESC"; // DESC pour décroissant
        $result = mysqli_query($db_handle, $sql);
        while ($data = mysqli_fetch_assoc($result)) {
            echo "ID: " .$data['ID']. "<br>";
            echo "Nom: " .$data['Nom']. "<br>";
            echo "Prenom: " .$data['Prenom']. "<br>";
            echo "Statut: " .$data['Statut']. "<br>";
            echo "DateNaissance: " .$data['DateNaissance']. "<br>";
            echo "<br>";
        }
    } else {
        echo "Database not found";
    }

    mysqli_close($db_handle);
?>