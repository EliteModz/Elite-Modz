// Array to hold cart items
let cart = JSON.parse(localStorage.getItem('cart')) || [];

// Initialize the cart when the page loads
document.addEventListener('DOMContentLoaded', () => {
    renderCart();
    updateTotalCost();
});

// Function to add items to the cart
function addToCart(name, price) {
    const item = { name, price };
    cart.push(item);
    localStorage.setItem('cart', JSON.stringify(cart));
    renderCart();
    updateTotalCost();
    updateCartCount(); // Update the cart count in the navigation
}

// Function to render cart items
function renderCart() {
    const cartItems = document.getElementById('cart-items');
    cartItems.innerHTML = ''; // Clear existing items

    cart.forEach((item, index) => {
        const li = document.createElement('li');
        li.classList.add('cart-item');
        
        // Item name and price
        li.innerHTML = `${item.name} - $${item.price.toFixed(2)}`;

        // Remove button for each item
        const removeButton = document.createElement('button');
        removeButton.textContent = 'Remove';
        removeButton.classList.add('remove-item');
        removeButton.addEventListener('click', () => removeItem(index));
        
        li.appendChild(removeButton);
        cartItems.appendChild(li);
    });
}

// Function to remove an item by index
function removeItem(index) {
    cart.splice(index, 1);
    localStorage.setItem('cart', JSON.stringify(cart));
    renderCart();
    updateTotalCost();
}

// Function to calculate and update the total cost
function updateTotalCost() {
    const totalCost = cart.reduce((total, item) => total + item.price, 0);
    document.getElementById('total-cost').textContent = totalCost.toFixed(2);
}

// Function to update cart count in navigation
function updateCartCount() {
    document.getElementById('cart-count').textContent = cart.length;
}

// Example function to simulate adding items (optional, can be removed if not needed)
document.getElementById('add-to-cart').addEventListener('click', () => {
    // Replace with actual item details if needed
    addToCart('Modded Account', 20);
});
