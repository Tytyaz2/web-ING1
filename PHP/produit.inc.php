<link rel="stylesheet" href="../CSS/produit.css">
<script src="../JS/produit..js"></script>
<div id="produit">
    <?php

    if (isset($_GET['categorie'])) {
        try {
            $nomcategorie = $_GET['categorie'];
            $dbh = new PDO('mysql:host=127.0.0.1;port=3306;dbname=PommeStore', 'root', "");

            $sql = "SELECT id, nom, prix, description, stock FROM produit WHERE type=('$nomcategorie')";
            $resultat = $dbh->query($sql);

            if ($resultat->rowCount() > 0) {

                if ($_SESSION["status"] === "admin" ){
                    while($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
                        echo "<div class='produit'>
                                <div class='zoom-container'>
                                    <img class='zoom-img' src='/IMAGE/".$row["nom"].".png' alt='".$row["nom"]."'>
                                    <div class='text-container'>".$row["nom"]." - ".$row["prix"]."€<br>".$row["description"]."<br>Stock: ".$row["stock"]."</div>
                                </div>";
                        echo "  <div class='panier'> 
                                <form action='/PHP/SavePanier.php' method='post'>
                                Article : <input type='text' name = 'str' value = '".$row["nom"]."' ><br>
                                Quantité voulue : <input type='number' name='nbrarticles' value ='1' min='1' max='".$row["stock"]."'><br> 
                                    <input type='submit' value = 'Ajouter au panier'></form></td>
                                </div>
                             </div>";

                    }
                }else{
                    while($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
                        echo "<div class='produit'>
                                <div class='zoom-container'>
                                    <img class='zoom-img' src='/IMAGE/".$row["nom"].".png' alt='".$row["nom"]."'>
                                    <div class='text-container'>".$row["nom"]." - ".$row["prix"]."€<br>".$row["description"]."</div>
                                </div>";
                        echo "  <div class='panier'> 
                                <form action='/PHP/SavePanier.php' method='post'>
                                Article : <input type='text' name = 'str' value = '".$row["nom"]."' ><br>
                                Quantité voulue : <input type='number' name='nbrarticles' value ='1' min='1' max='".$row["stock"]."'><br> 
                                    <input type='submit' value = 'Ajouter au panier'></form></td>
                                </div>
                             </div>";

                    }
                }
            } else {
                echo "Aucun résultat trouvé";
            }

            $dbh = null;
        } catch (PDOException $e) {
            echo "Erreur: ".$e->getMessage()."<br/>";
            die();
        }
    }

    ?>
</div>
