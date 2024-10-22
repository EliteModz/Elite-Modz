let cart = [];

function addToCart(productName, productPrice) {
    cart.push({ name: productName, price: productPrice });
    updateCartCount();
    localStorage.setItem('cart', JSON.stringify(cart));
}

function updateCartCount() {
    document.getElementById('cart-count').innerText = cart.length;
}

function displayCartItems() {
    const cartItems = JSON.parse(localStorage.getItem('cart')) || [];
    let cartTotal = 0;
    const cartElement = document.getElementById('cart-items');

    cartItems.forEach(item => {
        cartElement.innerHTML += `<p>${item.name} - $${item.price}</p>`;
        cartTotal += item.price;
    });

    document.getElementById('cart-total').innerText = cartTotal;
}

// Call on cart.html
if (document.getElementById('cart-items')) {
    displayCartItems();
}
