Sure! Here’s the complete code with the specified email address included. Save this as `index.php` on your server.

```php
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite Modz - Modded Accounts & Services</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #121212; /* Black background */
            color: #e0e0e0; /* Light gray text */
        }

        /* Header and Navigation Bar */
        header {
            background-color: #1e1e1e;
            padding: 20px;
            text-align: center;
            border-bottom: 3px solid red;
        }

        header .logo img {
            width: 150px;
        }

        header .logo-text {
            font-size: 2.5em;
            font-weight: bold;
            color: #ff2d2d; /* Red logo text */
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
            background-color: #1e1e1e;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            text-decoration: none;
            font-size: 1.2em;
            color: white;
            padding: 10px 15px;
        }

        nav ul li a:hover {
            color: #ff2d2d; /* Neon red hover effect */
        }

        /* Hero Section */
        .hero {
            background-image: url('images/banner.jpg');
            background-size: cover;
            background-position: center;
            height: 500px;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .hero h1 {
            font-size: 4em;
            color: #ff2d2d;
            text-shadow: 0 0 15px #ff0000;
        }

        /* Product Section */
        .product-section {
            padding: 40px;
            text-align: center;
        }

        .product-section h2 {
            color: #ff2d2d;
            margin-bottom: 30px;
            font-size: 2.5em;
        }

        .product {
            display: inline-block;
            background-color: #1e1e1e;
            margin: 20px;
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .product h3 {
            color: #ff2d2d;
        }

        .product p {
            color: #e0e0e0;
        }

        .product button {
            background-color: #ff2d2d;
            border: none;
            padding: 10px 20px;
            color: #121212;
            font-weight: bold;
            cursor: pointer;
            border-radius: 5px;
        }

        .product button:hover {
            background-color: #ff1a1a;
        }

        /* Contact Form Section */
        .contact-section {
            padding: 40px;
            text-align: center;
            background-color: #1e1e1e;
            border-radius: 10px;
            margin: 20px;
        }

        .contact-section h2 {
            color: #ff2d2d;
            margin-bottom: 20px;
        }

        input, textarea {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ff2d2d;
            border-radius: 4px;
            background-color: #2a2a2a;
            color: #ffffff;
        }

        button.submit {
            background-color: #ff2d2d;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button.submit:hover {
            background-color: #e63939;
        }

        /* Footer */
        footer {
            background-color: #1e1e1e;
            padding: 20px;
            text-align: center;
            color: #e0e0e0;
            margin-top: 40px;
            border-top: 2px solid red;
        }

        footer a {
            color: #ff2d2d;
            text-decoration: none;
        }

        footer a:hover {
            color: #ff1a1a;
        }
    </style>
</head>

<body>

    <header>
        <div class="logo">
            <img src="C:\Users\sbmur\OneDrive\Desktop\logo" alt="Elite Modz Logo">
        </div>
        <div class="logo-text">Elite Modz</div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="index.php#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <h1>Modded Accounts & Services</h1>
    </section>

    <!-- New Products Section -->
    <section class="product-section">
        <h2>New Modded Accounts</h2>
        <div class="product">
            <h3>Basic: Level 300 and 150 Million</h3>
            <p>Price: $20</p>
            <button onclick="location.href='shop.html#basic'">Buy Now</button>
        </div>
        <div class="product">
            <h3>Regular: Level 450 and 250 Million</h3>
            <p>Price: $35</p>
            <button onclick="location.href='shop.html#regular'">Buy Now</button>
        </div>
        <div class="product">
            <h3>Elite: Level 750 and 600 Million</h3>
            <p>Price: $75</p>
            <button onclick="location.href='shop.html#elite'">Buy Now</button>
        </div>
        <div class="product">
            <h3>Ultimate: Level 1000 and 1 Billion</h3>
            <p>Price: $100</p>
            <button onclick="location.href='shop.html#ultimate'">Buy Now</button>
        </div>
        <div class="product">
            <h3>God: Level 5000 and 100 Billion</h3>
            <p>Price: $150</p>
            <button onclick="location.href='shop.html#god'">Buy Now</button>
        </div>
        <div class="product">
            <h3>Infinity: Level 8000 and 1 Trillion</h3>
            <p>Price: $250</p>
            <button onclick="location.href='shop.html#infinity'">Buy Now</button>
        </div>
        <div class="product">
            <h3>Custom</h3>
            <p>Custom pricing available</p>
            <p>Price: $20 - $250</p>
            <button onclick="location.href='customize.html'">Customize</button>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-section" id="contact">
        <h2>Contact Us</h2>
        <form action="index.php#contact" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" rows="4" required></textarea>
            <button type="submit" class="submit">Send Message</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Collect and sanitize input data
            $name = htmlspecialchars(trim($_POST['name']));
            $email = htmlspecialchars(trim($_POST['email']));
            $message = htmlspecialchars(trim($_POST['message']));

            // Recipient email
            $to = "elitemodz1321@gmail.com"; // Your email address
            $subject = "New Contact Form Submission";

            // Email content
            $body = "Name: $name\n";
            $body .= "Email: $email\n";
            $body .= "Message:\n$message\n";

            // Email headers
            $headers = "From: $name <$email>\r\n";
            $headers .= "Reply-To: $email\r\n";

            // Send email
            if (mail($to, $subject, $body, $headers)) {
                echo "<p style='color: green;'>Message sent successfully!</p>";
            } else {
                echo "<p style='color: red;'>Failed to send message.</p>";
            }
        }
        ?>
    </section>

    <footer>
        <p>&copy; 2024 Elite Modz. All rights reserved. | <a href="#">Privacy Policy</a
