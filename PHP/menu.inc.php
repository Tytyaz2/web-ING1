<link rel="stylesheet" href="../CSS/menu.css">

    <?php
        try {
            // Créer l'objet PDO pour la connexion à la base de données
            $dbh = new PDO('mysql:host=127.0.0.1;port=3306;dbname=PommeStore', 'root', "");

            // Définir la requête SQL pour obtenir les types distincts
            $sql = "SELECT DISTINCT type FROM produit"; // Notez l'utilisation de backticks si nécessaire

            // Préparer la requête SQL
            $stmt = $dbh->prepare($sql);

            // Exécuter la requête
            $stmt->execute();

            // Récupérer tous les résultats
            $types = $stmt->fetchAll(PDO::FETCH_ASSOC);
            echo "<div id='menu'>";
            // Vérifier si des types ont été trouvés et les afficher
            if ($types) {
                foreach ($types as $type) {
                    $nomType = $type['type']; // Assurez-vous que la clé correspond au nom de votre colonne dans la base de données
                    // Créer un lien pour chaque type
                    echo "<a class ='bouton_menu' id='$nomType' href='index.php?type=" . urlencode($nomType) . "'>" . htmlspecialchars($nomType) . "</a>";
                }
            } else {
                echo "Aucun type trouvé.";
            }
        } catch (PDOException $e) {
            // Gestion des erreurs de connexion
            die("Erreur de connexion à la base de données: " . $e->getMessage());
        }
        echo"<a class ='bouton_menu' id='contact' href='index.php?contact'>Contact</a></div>";
        echo '<script src="JS/index.js"></script>
        <button id="bouton-menu">Menu</button>
        <div id="menu1" class="menu-cache">
            <a href="index.php?categorie=Rose">Rose</a>
            <a href="index.php?categorie=bleu">Bleu</a>
            <a href="index.php?categorie=verte">Verte</a>
        </div>';;
    ?>




