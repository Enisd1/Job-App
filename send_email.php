<?php
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Set recipient email address
$to = 'jonmiftari2018@gmail .com';

// Set email subject
$subject = 'Contact Us Form Submission';

// Set email message
$body = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";

// Set email headers
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Send email
if (mail($to, $subject, $body, $headers)) {
    echo "Thank you for contacting us. We will get back to you soon.";
} else {
    echo "Sorry, an error occurred. Please try again later.";
}
?>
