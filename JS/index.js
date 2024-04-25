document.addEventListener("DOMContentLoaded", function() {
    var menu = document.getElementById("menu1");
    var boutonMenu = document.getElementById("bouton-menu");
    var timeout;

    // Affiche le menu lorsque la souris passe dessus
    boutonMenu.addEventListener("mouseenter", function () {
        clearTimeout(timeout); // Annule la fonction de masquage si elle est déjà en attente
        menu.style.display = "block"; // Affiche le menu
    });

    // Cache le menu lorsque la souris quitte le bouton ou le menu
    boutonMenu.addEventListener("mouseleave", function () {
        // Utilise setTimeout pour déclencher la fonction de masquage après un délai de 200ms
        timeout = setTimeout(function() {
            menu.style.display = "none"; // Cache le menu
        }, 200);
    });

    // Arrête la fonction de masquage si la souris revient sur le bouton
    menu.addEventListener("mouseenter", function () {
        clearTimeout(timeout); // Annule la fonction de masquage
    });

    // Cache le menu lorsque la souris quitte le menu
    menu.addEventListener("mouseleave", function () {
        menu.style.display = "none"; // Cache le menu
    });
});
