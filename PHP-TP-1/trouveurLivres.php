<?php
    // Recuperer les données de formulaire
    $titre = isset($_POST["titre"])?$_POST["titre"] : "";
    $auteur = isset($_POST["auteur"])?$_POST["auteur"] : "";
    $annee = isset($_POST["annee"])?$_POST["annee"] : "";
    $editeur = isset($_POST["editeur"])?$_POST["editeur"] : "";

    //identification BDD
    $database = "livre";

    //connection
    $db_handle = mysqli_connect('localhost', 'root', '');
    $db_found = mysqli_select_db($db_handle, $database);

    if ($_POST["button1"]) {
        // Si la BDD existe et qu'on a pu si connecter
        if ($db_found) {
            $sql = "SELECT * FROM books";
            if ($titre != "") {
                $sql .= " WHERE Titre LIKE '%$titre%'";
                if ($auteur != "") {
                    $sql .= " AND Auteur LIKE '%$auteur%'";
                }
            }
            $result = mysqli_query($db_handle, $sql);
            if (mysqli_num_rows($result) == 0) {
                echo "Book not found";
            } else {
                while ($data = mysqli_fetch_assoc($result)) {
                    echo "ID: " .$data["ID"]. "<br>";
                    echo "Titre: " .$data["Titre"]. "<br>";
                    echo "Auteur: " .$data["Auteur"]. "<br>";
                    echo "Année: " .$data["Annee"]. "<br>";
                    echo "Editeur: " .$data["Editeur"]. "<br>";
                    echo "<br>";
                }
            }
        } else { // Sinon
            echo "Database not found";
        }
    }

    mysqli_close($db_handle);

?>