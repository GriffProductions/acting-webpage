<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields and sanitize the input
    $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);

    // Create the email message
    $to = "bus.griff@gmail.com";
    $subject = "New message from Griff Productions' landing page";
    $body = "Name: $name\nEmail: $email\n\n$message";

    // Send the email
    if (mail($to, $subject, $body)) {
        // If the email is sent successfully, redirect to a thank-you page
        header("Location: thank-you.html");
        exit;
    } else {
        // If there was an error sending the email, display an error message
        echo "There was an error sending your message. Please try again later.";
    }
}

?>
