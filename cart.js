let cartItems = []; // Array to hold items in the cart

// Function to add items to the cart
function addToCart(name, price) {
    cartItems.push({ name, price });
    updateCart();
}

// Function to update the cart display
function updateCart() {
    const cartItemsContainer = document.getElementById('cart-items');
    const totalCostElement = document.getElementById('total-cost');
    const cartCountElement = document.getElementById('cart-count');

    cartItemsContainer.innerHTML = ''; // Clear previous items
    let totalCost = 0;

    cartItems.forEach(item => {
        const itemElement = document.createElement('div');
        itemElement.innerHTML = `${item.name}: $${item.price.toFixed(2)}`;
        cartItemsContainer.appendChild(itemElement);
        totalCost += item.price; // Add item price to total
    });

    totalCostElement.textContent = totalCost.toFixed(2); // Update total cost
    cartCountElement.textContent = cartItems.length; // Update cart count
}

// Example function call to add items (you should replace this with actual calls from your shop page)
addToCart('Basic: Level 300 and 150 Million', 20);
addToCart('Regular: Level 450 and 250 Million', 35);
