<script>
  // Retrieve cart items from local storage or an API (replace with actual logic)
  const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

  // Function to populate the order summary
  function populateOrderSummary() {
    const itemsList = document.getElementById('items-list');
    const totalPriceElement = document.getElementById('total-price');
    let total = 0;

    // Clear previous items (if any)
    itemsList.innerHTML = '';

    if (cartItems.length === 0) {
      // Display message if the cart is empty
      itemsList.innerHTML = '<p>Your cart is empty.</p>';
      totalPriceElement.textContent = '$0.00';
    } else {
      // Populate items in the cart
      cartItems.forEach(item => {
        const itemDiv = document.createElement('div');
        itemDiv.classList.add('item');
        itemDiv.innerHTML = `<span>${item.name}</span><span class="price">$${item.price}</span>`;
        itemsList.appendChild(itemDiv);
        total += item.price;
      });

      // Update the total price
      totalPriceElement.textContent = `$${total.toFixed(2)}`;
    }
  }

  // Call the function to populate the order summary on page load
  window.onload = populateOrderSummary;
</script>
