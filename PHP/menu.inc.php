<link rel="stylesheet" href="../CSS/menu.css">
<div id="menu">

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

        // Vérifier si des types ont été trouvés et les afficher
        if ($types) {
            foreach ($types as $type) {
                $nomType = $type['type']; // Assurez-vous que la clé correspond au nom de votre colonne dans la base de données
                // Créer un lien pour chaque type
                echo "<a id='$nomType' href='index.php?categorie=" . $nomType . "'>" . $nomType . "</a>";
            }
        } else {
            echo "Aucun type trouvé.";
        }
    } catch (PDOException $e) {
        // Gestion des erreurs de connexion
        die("Erreur de connexion à la base de données: " . $e->getMessage());
    }
    ?>


</div>