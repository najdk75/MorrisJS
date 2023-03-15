<?php
        //Lister le coeeentenu de la table movies

        //1° - Connexion à la BDD
        $base = new PDO('mysql:host=localhost; dbname=id20205717_coronavirus', 'id20205717_najd_kacem', 'u0/?#Y7S%37Cy\=i');
        $base->exec("SET CHARACTER SET utf8");

        //2° - Prépareation de requette et execution
        $sql = "SELECT * FROM Covid";

        $result = $base->query($sql)

        if ($result->num_rows > 0) {
            // Parcourir les résultats et afficher chaque tuple (continent, nombre de cas)
            while($row = $result->fetch_assoc()) {
                echo "Continent: " . $row["Continent"] . "<br>";
            }
        } else {
            echo "0 résultats";
        }
        

    ?>