<div id="menu">

    <?php
    $xml = simplexml_load_file("PHP/produit.xml");

    foreach ($xml->categorie as $cat) {
        $nomcat = $cat->nom;
        echo "<a href='?categorie=$nomcat'>$nomcat</a>";
    }
    ?>
</div>

