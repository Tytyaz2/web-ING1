
<div id="connexion">
    <?php
    if (!isset($_SESSION['username'])) {
        if (isset($_GET['error']) && $_GET['error'] == 'mailexistepas') {
            echo "<p>Vous n'avez pas de compte, veuillez en créer un.</p>";
            include "form_inscription.inc.php";
        } else if (isset($_GET['error']) && $_GET['error'] == 'mailexiste') {
            echo "<p>Le mail existe deja veuillez vous connecter.</p>";
            include "form_connexion.inc.php";
        } else if (isset($_GET['error']) && $_GET['error'] == 'utilisateurdejapris') {
            echo "<p>L'utilisateur est déjà pris.</p>";
            include "form_inscription.inc.php";
        } else if (isset($_GET['error']) && $_GET['error'] == 'password') {
                echo "<p>les mots de passe ne sont pas identiques.</p>";
                include "form_inscription.inc.php";
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