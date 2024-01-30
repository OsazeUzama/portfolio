<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Replace 'your-email@example.com' with your actual email address
    $to = "onyekachi_val@yahoo.com";
    $subject = "New Contact Form Submission from Portfolio Site";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    $mailBody = "Name: $name\n";
    $mailBody .= "Email: $email\n";
    $mailBody .= "Message:\n$message";

    // Use the mail() function to send the email
    mail($to, $subject, $mailBody, $headers);
    
    // Redirect to a thank you page or back to the contact page
    header("Location: index.html");
    exit();
}
?>
