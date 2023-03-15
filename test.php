<?php
        //Lister le coeeentenu de la table movies

        //1° - Connexion à la BDD
        $base = new PDO('mysql:host=localhost; dbname=id20205717_coronavirus2', 'id20205717_najd', '1uy&B(t{m7_#|>*H');
        $base->exec("SET CHARACTER SET utf8");

        //2° - Prépareation de requette et execution
        $sql = "SELECT * FROM pays";

        $result = $base->query($sql);

        while($row = $result->fetch_assoc()) {
                echo "Pays: " . $row['nom'] ."nombre de cas : ". $row['total_cas'] . "<br>";
            }
        
        

    ?>