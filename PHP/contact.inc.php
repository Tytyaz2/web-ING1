<link rel="stylesheet" href="../CSS/validation_contact.css">
<script src="../JS/validation_contact.js"></script>
<h2 id="CONTACT"> Nous contacter</h2>
<?php

if (isset($_GET['error']) && $_GET['error'] == 'formcontactinvalide'):
    echo "<p>Le serveur n'a pas pu gérer votre demande.</p>";
endif;
?>
<!--- formulaire de contact qui est envoyer à verif_contact.php --->
<form id="contactForm" method="post" action="../web-ing2/PHP/verif_contact.php">

    <div>
        <label id="date_contact">Date du contact :</label>
    </div>
    <div>
        <input type="date" id="datecontact" name="dateContact">
    </div>
    <br>
    <div>
        <label id="NOM">* Nom :</label>
    </div>
    <div>
        <input type="text" id="nomcontact" name="nom">
        <span id="nomError" class="error-message"></span>
    </div>
    <br>
    <div>
        <label id="PRENOM">* Prénom :</label>
    </div>
    <div>
        <input type="text" id="prenomcontact" name="prenom">
        <span id="prenomError" class="error-message"></span>
    </div>
    <br>
    <div>
        <label id="EMAIL">* Email :</label>
    </div>
    <div>
        <input type="text" id="emailcontact" name="email">
        <span id="emailError" class="error-message"></span>
    </div>
    <br>
    <div>
        <label id="Genre">Genre :</label>
    </div>
    <div>
        <input type="radio" id="masculin" name="genre" value="masculin">
        <label for="masculin">Masculin</label>
        <input type="radio" id="feminin" name="genre" value="feminin">
        <label for="feminin">Féminin</label>
        <input type="radio" id="autre" name="genre" value="autre">
        <label for="autre">Autre</label>
    </div>
    <br>
    <div>
        <label id="datedeNaissance">Date de Naissance :</label>
    </div>
    <div>
        <input type="date" id="dateDeNaissance" name="dateDeNaissance">
    </div>
    <br>
    <div>
    <label for="metier">Choisissez un métier :</label>
    </div>
    <div>
        <select id="metier" name="metier">
            <option value="brasseur">Brasseur</option>
            <option value="caviste">Caviste</option>
            <option value="sommelier">Sommelier de bière</option>
            <option value="distributeur">Distributeur</option>
            <option value="marketing">Marketing/Communication</option>
            <option value="gestionnaire-stocks">Gestionnaire de stocks</option>
            <option value="service-client">Service client</option>
            <option value="developpeur-web">Développeur web</option>
            <option value="logistique">Logistique</option>
            <option value="comptabilite">Comptabilité/Finance</option>
            <option value="autre">Autre</option>
        </select>
    </div>
    <br>
    <div>
        <label id="sujet">sujet :</label>
    </div>
    <div>
        <input type="text" id="sujet" name="sujet">
    </div>
    <br>
    <div>
        <label id="MESSAGE">* Message :</label>
    </div>
    <div>
        <textarea id="messagecontact" name="message"></textarea>
        <span id="messageError" class="error-message"></span>
    </div>
    <br>
    <div>
        <label id="ETOILE">* champs obligatoires</label>
    </div>
    <br>
    <button type="submit">Envoyer</button>
    <br>
</form>


