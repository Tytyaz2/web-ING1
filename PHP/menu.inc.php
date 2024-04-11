<link rel="stylesheet" href="../CSS/menu.css">
<div id="menu">

    <?php
    $xml = simplexml_load_file("PHP/produit.xml");
    //naviguer dans les categories
    foreach ($xml->categorie as $cat) {
        //obtenir le nom de chaque categorie
        $nomcat = $cat->nom;
        //ecrire dans lhtml le nom de la categorie et envoyer en GET la categorie
        echo "<a href='?categorie=$nomcat'>$nomcat</a>";
    }
    ?>

</div>

