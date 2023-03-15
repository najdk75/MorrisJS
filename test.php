<?php
    //Lister le contenu de la table pays

    //1° - Connexion à la BDD
    $base = new PDO('mysql:host=localhost; dbname=id20205717_coronavirus2', 'id20205717_najd', '1uy&B(t{m7_#|>*H');
    $base->exec("SET CHARACTER SET utf8");

    //2° - Préparation de requête et exécution
    $sql = "SELECT * FROM pays";
    $result = $base->query($sql);

    if ($result->rowCount() > 0) {
        // Parcourir les résultats et afficher chaque tuple (pays, nombre de cas)
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "Pays: " . $row['nom'] ."nombre de cas : ". $row['total_cas'] . "<br>";
        }
    } else {
        echo "0 résultats";
    }
?>