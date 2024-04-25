    function increaseQuantity(productId) {
    var quantityInput = document.getElementById("quantity_" + productId);
    quantityInput.value = parseInt(quantityInput.value) + 1;
}
    function decreaseQuantity(productId) {
    var quantityInput = document.getElementById("quantity_" + productId);
    var currentValue = parseInt(quantityInput.value);
    if (currentValue > 1) {
    quantityInput.value = currentValue - 1;
}
}
    function addToCart(productId) {
    var quantity = document.getElementById("quantity_" + productId).value;
    alert("Vous avez ajouté " + quantity + " produit(s) au panier.");
}