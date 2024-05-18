<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $date = $_POST["date"];
    $department = $_POST["department"];
    $message = $_POST["message"];

    // Set the recipient email address
    $to = "aneridesai1904@gmail.com"; // Replace with your actual email address

    // Create email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Construct the email message
    $email_message = "
    <html>
    <head>
    <title>Appointment Request</title>
    </head>
    <body>
    <p>Name: $name</p>
    <p>Email: $email</p>
    <p>Phone: $phone</p>
    <p>Appointment Date: $date</p>
    <p>Service: $department</p>
    <p>Message:</p>
    <p>$message</p>
    </body>
    </html>
    ";

    // Send the email
    if (mail($to, "Appointment Request", $email_message, $headers)) {
        // Email sent successfully
        echo "success"; // You can customize this response message
    } else {
        // Email sending failed
        echo "error"; // You can customize this response message
    }
} else {
    // If the request method is not POST, show an error message
    echo "error"; // You can customize this response message
}
?>
