<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit;
}

// Fetch user data and cart from the database
// ...

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account</title>
</head>
<body>
    <h2>Your Account</h2>
    <p>Welcome, User!</p>
    <h3>Your Cart</h3>
    <!-- Display cart items here -->
    <h3>Leave a Review</h3>
    <form action="submit_review.php" method="POST">
        <textarea name="review" placeholder="Write your review..." required></textarea>
        <button type="submit">Submit Review</button>
    </form>
</body>
</html>
