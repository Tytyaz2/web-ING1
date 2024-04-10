<script src="../JS/validation_contact.js"></script>
<h2>Contact</h2>
<form id="contactForm" action="php/verif_contact.php" method="post">
    <label for="nom">Nom :</label>
    <input type="text" id="nomcontact" name="nom" >
    <label for="email">Email :</label>
    <input type="email" id="emailcontact" name="email" >
    <label for="message">Message :</label>
    <textarea id="messagecontact" name="message" ></textarea>
    <button type="submit">Envoyer</button>
</form>

