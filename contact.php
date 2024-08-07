<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format");
    }

    // Email recipient
    $to = "your-email@example.com"; // Replace with your email address
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for your message. We will get back to you soon.";
    } else {
        echo "There was a problem sending your message. Please try again.";
    }
} else {
    echo "Invalid request.";
}
?>
