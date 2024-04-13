<link rel="stylesheet" href="../CSS/form_connexion.css">
<div id="connexion">
    <?php
    //si la session existe on n'affiche pas la connexion puis affichage de chaque message selon le message d'erreur
    if (!isset($_SESSION['username'])) {
        if (isset($_GET['error']) && $_GET['error'] == 'mailexiste') {
            echo "<p>Le mail existe deja veuillez vous connecter.</p>";
            include "form_connexion.inc.php";
        } else if (isset($_GET['error']) && $_GET['error'] == 'motdepasseincorrect') {
            echo "<p>Mot de passe incorrect.</p>";
            include "form_connexion.inc.php";
        } else {
            include "form_connexion.inc.php";
        }
    } else {
        echo $_SESSION["username"];
        echo '<form method="post" action="PHP/deconnection.php">
            <input type="submit" name="logout" value="Déconnexion">
        </form>';
    }
    ?>

</div>