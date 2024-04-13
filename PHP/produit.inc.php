<?php

if (isset($_GET['categorie'])){
    try {
        $nomcategorie = $_GET['categorie'];
        $dbh = new PDO('mysql:host=127.0.0.1;port=3306;dbname=PommeStore', 'root', "");


        $sql = "SELECT id, nom, prix, description, stock FROM produit WHERE type=('$nomcategorie')";
        $resultat = $dbh->query($sql);

        if ($resultat->rowCount() > 0) {
            // Affichage des résultats sous forme de tableau
            echo "<table border='1'>
            <tr>
                <th>Image</th>
                <th>Nom</th>
                <th>Prix</th>
                <th>Description</th>
                <th>Stock</th>
            </tr>";

            // Parcourir les lignes de résultats
            while($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>
                <td><a href='/IMAGE/".$row["nom"].".jpg' target='_blank'><img src='/IMAGE/".$row["nom"].".jpg' alt='".$row["nom"].".jpg'style='height:180px; width:240px')></a></td>
                <td>".$row["nom"]."</td>
                <td>".$row["prix"]."€</td>
                <td>".$row["description"]."</td>
                <td>".$row["stock"]."</td>
              </tr>";
            }
            echo "</table>";
        } else {
            echo "Aucun résultat trouvé";
        }


        $dbh = null;
    }

    catch (PDOException $e) {
        echo "Erreur: ".$e->getMessage()."<br/>" ;
        die() ;
    }
}


?>