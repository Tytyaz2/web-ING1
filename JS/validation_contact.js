document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("contactForm").addEventListener("submit", function(event) {
        var nom = document.getElementById("nomcontact").value.trim();
        var email = document.getElementById("emailcontact").value.trim();
        var message = document.getElementById("messagecontact").value.trim();

        if (!nom ) {
            alert("Veuillez remplir tous les champs.");
            event.preventDefault();
        } else if ( !email ) {
            alert("Veuillez remplir tous les champs.");
            event.preventDefault();
        } if (!message) {
            alert("Veuillez remplir tous les champs.");
            event.preventDefault();
        } else if (!validateEmail(email)) {
            alert("Veuillez saisir une adresse e-mail valide.");
            event.preventDefault();
        }
    });

    function validateEmail(email) {
        var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }
});
