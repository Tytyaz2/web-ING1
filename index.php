<?php
//la session est initialisé dedans
include "php/haut.inc.php";
//element de connexion
//la page connexion apparait pas quand on est sur la page inscription

if(!isset($_SESSION['status'])){
    $_SESSION['status'] = "nothing";
}

if(!isset($_SESSION['fichier_supprime'])){
    $_SESSION['fichier_supprime'] = true;
    $_SESSION["panier"] = 0;
    $fichier = fopen("data/Panier.csv", "w") or die ("Unable to open file");
    if (fwrite($fichier, "") === false) {
        die("Impossible de vider le contenu du fichier.");
    }
    fclose($fichier);
}

if (!isset($_GET["forminscription"])) {
    include "php/page_connexion.inc.php";
}
//corps de la page avec l'affichage des produits si on cllique dessus sur le menu
//si on est sur le formulaire d'inscritpion
else if (isset($_GET["forminscription"])){
    //menu pour changer la page
    include "php/menu.inc.php";
    include "php/page_inscription.inc.php";
}
//retour d'un mail de contact comme quoi le mail est bien envoyé
elseif (isset($_GET["mailenvoye"])){
    echo "<p>Votre demande a bien été envoyé</p>";
        echo "<form action='index.php'><input type='submit' value='accueil'></form>";

}
//page de contact
else if (isset($_GET["contact"])){
    //menu pour changer la page
    include "php/menu.inc.php";
    include "php/contact.inc.php";
}
else if (isset($_GET["panier"])){
    //menu pour changer la page
    include "php/menu.inc.php";
    include "php/panier.inc.php";
}


//page de bienvenue
else if (!isset($_GET["categorie"])){
    //menu pour changer la page
    echo '<script src="JS/index.js"></script>
          <link rel="stylesheet" href="../CSS/menu.css">
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
            <a href="index.php?categorie=verte">Verte</a>
            <a href="index.php?panier">Panier</a>
        </div>';
    include "php/page_bienvenue.inc.php";
}
//page produit
else {
    //menu pour changer la page
    include "php/menu.inc.php";
    include "php/produit.inc.php";
}
//copyright
include "php/copyright.inc.php";
?>