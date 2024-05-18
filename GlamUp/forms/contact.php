<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Set the recipient email address
    $to = "aneridesai1904@gmail.com"; 

    // Create email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Construct the email message
    $email_message = "
    <html>
    <head>
    <title>$subject</title>
    </head>
    <body>
    <p>Name: $name</p>
    <p>Email: $email</p>
    <p>Subject: $subject</p>
    <p>Message:</p>
    <p>$message</p>
    </body>
    </html>
    ";

    // Send the email
    if (mail($to, $subject, $email_message, $headers)) {
        // Email sent successfully
        echo "success"; 
    } else {
        // Email sending failed
        echo "error";
    }
} else {
    // If the request method is not POST, show an error message
    echo "error"; 
}
?>
