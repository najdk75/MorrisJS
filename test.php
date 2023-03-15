<?php
        //Lister le contenu de la table movies

        //1° - Connexion à la BDD
        $base = new PDO('mysql:host=localhost; dbname=id20205717_coronavirus', 'id20205717_najd_kacem', 'u0/?#Y7S%37Cy\=i');

        //2° - Prépareation de requette et execution
        $sql = "SELECT Continent, SUM(TotalCases) as total_cas_par_continent
        FROM Covid
        GROUP BY Continent";

        $result = $base->query($sql)

        if ($result->num_rows > 0) {
            // Parcourir les résultats et afficher chaque tuple (continent, nombre de cas)
            while($row = $result->fetch_assoc()) {
                echo "Continent: " . $row["continent"]. " - Nombre de cas: " . $row["total_cas_par_continent"]. "<br>";
            }
        } else {
            echo "0 résultats";
        }
        

    ?>