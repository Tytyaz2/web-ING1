<?php

if (isset($_GET['categorie'])) {
    $nomcategorie = $_GET['categorie'];
    $xml = simplexml_load_file("PHP/produit.xml");
    //naviguer dans chaque categorie
    foreach ($xml->categorie as $categorie) {
        //si la categorie correspond au nom passer dans L'URL
        if ($categorie->nom == $nomcategorie) {
            //pour chaque produit afficher ses infos dans un tableau
            foreach ($categorie->produits->produit as $produit) {
                echo '<table>';
                echo '<tr><td>Nom : </td><td>' . $produit->nom . '</td></tr>';
                echo '<tr><td>Prix : </td><td>' . $produit->prix . '</td></tr>';
                echo '</table>';
            }
        }
    }
}
?>