<?php

if (isset($_GET['categorie'])) {
    $nomcategorie = $_GET['categorie'];
    $xml = simplexml_load_file("PHP/produit.xml");
    foreach ($xml->categorie as $categorie) {
        if ($categorie->nom == $nomcategorie) {
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