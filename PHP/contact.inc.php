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


