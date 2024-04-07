<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $relationship = $_POST['relationship'];
    $message = $_POST['message'];

    // Set the recipient email address
    $to = "lisaj@questseniorsolutions.com";

    // Set the email subject
    $subject = "New Contact Form Submission";

    // Construct the email body
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Relationship: $relationship\n";
    $body .= "Message: $message\n";

    // Set the email headers
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Error sending email.";
    }
}
?>