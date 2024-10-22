<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #121212; /* Dark background */
            color: #ffffff; /* Light text */
        }

        h2 {
            color: #ff4444; /* Red heading */
        }

        form {
            background-color: #1e1e1e; /* Darker form background */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            max-width: 400px;
            margin: auto;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ff4444; /* Red border */
            border-radius: 4px;
            background-color: #2a2a2a; /* Darker input background */
            color: #ffffff; /* Light text for inputs */
        }

        button {
            background-color: #ff4444; /* Red button */
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #e63939; /* Darker red on hover */
        }

        .message {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>

<body>

<h2>Contact Us</h2>
<form action="contact.php" method="POST">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <textarea name="message" placeholder="Your Message" rows="4" required></textarea>
    <button type="submit">Send Message</button>
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
        echo "<div class='message' style='color: green;'>Message sent successfully!</div>";
    } else {
        echo "<div class='message' style='color: red;'>Failed to send message.</div>";
    }
}
?>

</body>
</html>
