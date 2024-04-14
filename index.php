

<?php
//la session est initialisé dedans
include "php/haut.inc.php";
//element de connexion
include "php/page_connexion.inc.php";

//corps de la page avec l'affichage des produits si on cllique dessus sur le menu
if (!isset($_GET["categorie"])){
    include "php/page_bienvenue.inc.php";
}
else {
    //menu pour changer la page
    include "php/menu.inc.php";
    include "php/produit.inc.php";
}
//formulaire de contact
include "php/contact.inc.php";
//copyright
include "php/copyright.inc.php";
?>
