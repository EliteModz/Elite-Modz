// checkout.js
document.getElementById("checkout-form").addEventListener("submit", (event) => {
  const paymentMethod = document.getElementById("payment-method").value;

  if (!paymentMethod) {
    alert("Please select a payment method.");
    event.preventDefault(); // Stop form submission if no payment method is selected
  }
});
