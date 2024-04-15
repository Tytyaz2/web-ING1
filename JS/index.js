document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("bouton-menu").addEventListener("click", function () {
        var menu = document.getElementById("menu1");
        if (menu.style.display === "none") {
            menu.style.display = "block";
        } else {
            menu.style.display = "none";
        }
    });
});