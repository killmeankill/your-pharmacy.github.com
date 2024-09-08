<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST['name'];
    $message = $_POST['message'];

    // Your email address
    $to = "mohammed2561991@gmail.com";
    $subject = "New Message from Your Pharmacy Website";

    // Email content
    $email_content = "Name: $name\n";
    $email_content .= "Message:\n$message\n";

    // Email headers
    $headers = "From: noreply@yourpharmacy.com";

    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message failed to send.";
    }
}  // Notice that the closing PHP tag is not here.
