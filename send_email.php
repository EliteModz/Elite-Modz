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
        // Redirect back to index.html with a success message
        header("Location: index.html?success=1");
    } else {
        // Redirect back to index.html with an error message
        header("Location: index.html?error=1");
    }
} else {
    // Redirect to the index page if the request method is not POST
    header("Location: index.html");
    exit();
}
?>

