// Function to add an item to the cart
function addToCart(item) {
  let cart = JSON.parse(localStorage.getItem('cartItems')) || [];
  cart.push(item);
  localStorage.setItem('cartItems', JSON.stringify(cart));
}
