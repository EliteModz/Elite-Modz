// Simple script to log form data
document.querySelector('form').addEventListener('submit', function (event) {
    event.preventDefault(); // Prevents the form from submitting
    alert('Form submitted!'); // Basic alert for now
});
