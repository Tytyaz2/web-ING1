<?php

if (isset($_GET['categorie'])){
    try {
        $nomcategorie = $_GET['categorie'];
        $dbh = new PDO('mysql:host=127.0.0.1;port=3306;dbname=product', 'root', "");
        echo " connexion faite<br/>";
        $dbh->query('DROP TABLE produit');

        $dbh->query(' CREATE TABLE produit ( 
					id INT PRIMARY KEY NOT NULL, 
					nom VARCHAR(255),
					stock INT,
					description VARCHAR(500),
					prix FLOAT,
					type VARCHAR(255)
				);');

        $count = $dbh ->query("SELECT COUNT(type) FROM `produit` WHERE type = ('$nomcategorie')");
        echo " <script>alert($count)</script>";
        $dbh = null;
    }

    catch (PDOException $e) {
        echo "Erreur: ".$e->getMessage()."<br/>" ;
        die() ;
    }
}


?>