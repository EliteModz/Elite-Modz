function addToCart(item) {
    let cart = JSON.parse(localStorage.getItem('cartItems')) || [];
    cart.push(item);
    localStorage.setItem('cartItems', JSON.stringify(cart));
}
