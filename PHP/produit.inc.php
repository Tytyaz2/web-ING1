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

                while($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
                    echo "<div class='produit'>
                            <div class='zoom-container'>
                                <img class='zoom-img' src='/IMAGE/".$row["nom"].".png' alt='".$row["nom"]."'>
                                <div class='text-container'>".$row["nom"]." - ".$row["prix"]."€<br>".$row["description"]."</div>
                            </div>";
                    echo '  <div class="panier"> 
                                <input type="number" id="quantity_'.$row["id"].'" name="quantity_'.$row["id"].'" min="1" value="1" style="width: 30px; margin-left: 20px">
                                <button onclick="decreaseQuantity('.$row["id"].')">-</button>
                                <button onclick="increaseQuantity('.$row["id"].')">+</button>
                                <button onclick="addToCart('.$row["id"].')">Ajouter au panier</button>
                            </div>
                         </div>';

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
