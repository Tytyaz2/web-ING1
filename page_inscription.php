<?php
//la session est initialisé dedans
include "PHP/haut.inc.php";
//corps de la page
if (!isset($_SESSION['username'])) {
    if (isset($_GET['error']) && $_GET['error'] == 'mailexistepas') {
        echo "<p>Vous n'avez pas de compte, veuillez en créer un.</p>";
        include "PHP/form_inscription.inc.php";
    }else if (isset($_GET['error']) && $_GET['error'] == 'utilisateurdejapris') {
        echo "<p>L'utilisateur est déjà pris.</p>";
        include "PHP/form_inscription.inc.php";
    } else if (isset($_GET['error']) && $_GET['error'] == 'password') {
        echo "<p>les mots de passe ne sont pas identiques.</p>";
        include "PHP/form_inscription.inc.php";
    }
}
else {
    echo "<p>Vous etes deja connecté</p>";
}