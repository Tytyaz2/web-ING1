<link rel="stylesheet" href="../CSS/menu.css">
    <?php
        try {
            $dbh = new PDO('mysql:host=127.0.0.1;port=3306;dbname=PommeStore', 'root', "");
            $sql = "SELECT DISTINCT type FROM produit";
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $types = $stmt->fetchAll(PDO::FETCH_ASSOC);
            echo "<div id='menu'>";
            if ($types) {
                foreach ($types as $type) {
                    $nomType = $type['type'];
                    echo "<a class ='bouton_menu' id='$nomType' href='index.php?categorie=" . urlencode($nomType) . "'>" . htmlspecialchars($nomType) . "</a>";
                }
                echo "<a class ='bouton_menu' href='index.php?panier'>Panier</a>";
            } else {
                echo "Aucun type trouvé.";
            }
        } catch (PDOException $e) {
            // Gestion des erreurs de connexion
            die("Erreur de connexion à la base de données: " . $e->getMessage());
        }
        echo"<a class ='bouton_menu' id='contact' href='index.php?contact'>Contact</a></div>";
        echo '<script src="JS/index.js"></script>

        <button  id="bouton-menu" class="btn">
            <span class="icon">
                <svg viewBox="0 0 175 80" width="40" height="40">
                    <rect width="80" height="15" fill="#f0f0f0" rx="10"></rect>
                    <rect y="30" width="80" height="15" fill="#f0f0f0" rx="10"></rect>
                    <rect y="60" width="80" height="15" fill="#f0f0f0" rx="10"></rect>
                </svg>
            </span>
            <span class="text">MENU</span>
        </button>
        <div id="menu1" class="menu-cache">
            <a href="index.php?categorie=Rose">Rose</a>
            <a href="index.php?categorie=Bleue">Bleue</a>
            <a href="index.php?categorie=Verte">Verte</a>
            <a href="index.php?panier">Panier</a>
            
            
            
        </div>';;
    ?>