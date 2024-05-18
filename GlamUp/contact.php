<?php
$toEmail = "aneridesai1904@gmail.com";
$mailHeaders = "From: " . $_POST["your_name"] . "<". $_POST["your_email"] .">\r\n";
if(mail($toEmail, $_POST["message"], $_POST["your_phone"], $_POST["your_appdate"], $_POST["your_services"], $mailHeaders)) {
echo"<p class='success'>Contact Mail Sent.</p>";
} else {
echo"<p class='Error'>Problem in Sending Mail.</p>";
}
?>
