<?php
        //Lister le coeeentenu de la table movies

        //1° - Connexion à la BDD
        $base = new PDO('mysql:host=localhost; dbname=id20205717_coronavirus2', 'id20205717_najd', '|Jwa]c44ek(]A0cl');
        $base->exec("SET CHARACTER SET utf8");

        //2° - Prépareation de requette et execution
        $sql = "SELECT * FROM pays";

        $result = $base->query($sql)

        if ($result->num_rows > 0) {
            // Parcourir les résultats et afficher chaque tuple (continent, nombre de cas)
            while($row = $result->fetch_assoc()) {
                echo "Pays: " . $row['nom'] ."nombre de cas : ". $row['total_cas'] . "<br>";
            }
        } else {
            echo "0 résultats";
        }
        

    ?>