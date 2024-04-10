<link rel="stylesheet" href="../CSS/validation_contact.css">
<script src="../JS/validation_contact.js"></script>
<h2>Contact</h2>
<?php
//si le serveur reçoit des informations qui ne conviennent pas
if (isset($_GET['error']) && $_GET['error'] == 'formcontactinvalide'):
    echo "<p>Le serveur n'a pas pu gerer votre demande.</p>";
endif;
?>
<!--- formulaire de contact qui est envoyer à verif_contact.php --->
<form id="contactForm" method="post" action="../PHP/verif_contact.php">
    <div>
        <label for="nomcontact">Nom :</label>
        <input type="text" id="nomcontact" name="nom">
        <span id="nomError" class="error-message"></span>
    </div>
    <div>
        <label for="emailcontact">Email :</label>
        <input type="text" id="emailcontact" name="email">
        <span id="emailError" class="error-message"></span>
    </div>
    <div>
        <label for="messagecontact">Message :</label>
        <textarea id="messagecontact" name="message"></textarea>
        <span id="messageError" class="error-message"></span>
    </div>
    <button type="submit">Envoyer</button>
</form>


