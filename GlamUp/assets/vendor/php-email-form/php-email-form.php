<?PHP
$to = 'recipient@example.com';
$subject = 'Your Subject';
$message = 'Your message goes here';
$headers = 'From: your_email@example.com' . "\r\n" .
    'Reply-To: your_email@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if (mail($to, $subject, $message, $headers)) {
    echo 'Email sent successfully.';
} else {
    echo 'Email could not be sent.';
}
?>
