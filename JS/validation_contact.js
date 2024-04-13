document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("contactForm").addEventListener("submit", function(event) {
        var nom = document.getElementById("nomcontact").value.trim();
        var email = document.getElementById("emailcontact").value.trim();
        var message = document.getElementById("messagecontact").value.trim();
        var prenom = document.getElementById("prenomcontact").value.trim();
        var prenomError = document.getElementById("prenomError");
        var nomError = document.getElementById("nomError");
        var emailError = document.getElementById("emailError");
        var messageError = document.getElementById("messageError");

        nomError.textContent = "";
        prenomError.textContent = "";
        emailError.textContent = "";
        messageError.textContent = "";

        if (!nom) {
            nomError.textContent = "Veuillez saisir un nom.";
            document.getElementById("nomcontact").classList.add('invalid');
            event.preventDefault();
        } else {
            document.getElementById("nomcontact").classList.remove('invalid');
        }

        if (!email) {
            emailError.textContent = "Veuillez saisir un e-mail.";
            document.getElementById("emailcontact").classList.add('invalid');
            event.preventDefault();
        } else if (!validateEmail(email)) {
            emailError.textContent = "Veuillez saisir une adresse e-mail valide.";
            document.getElementById("emailcontact").classList.add('invalid');
            event.preventDefault();
        } else {
            document.getElementById("emailcontact").classList.remove('invalid');
        }

        if (!message) {
            messageError.textContent = "Veuillez saisir un message.";
            document.getElementById("messagecontact").classList.add('invalid');
            event.preventDefault();
        } else {
            document.getElementById("messagecontact").classList.remove('invalid');
        }
        if (!prenom){
            prenomError.textContent = "Veuillez saisir un prenom.";
            document.getElementById("prenomcontact").classList.add('invalid');
            event.preventDefault();
        } else {
            document.getElementById("prenomcontact").classList.remove('invalid');
        }
    });

    function validateEmail(email) {
        var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }
});
