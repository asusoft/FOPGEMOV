<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php
$to = "you@example.com";

// Email subject
$subject = "Test email";

// Email message
$message = "This is a test email.";

// Email headers
$headers = "From: sender@example.com\r\n";
$headers .= "Reply-To: sender@example.com\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Send the email
mail($to, $subject, $message, $headers);

if (mail($to, $subject, $message, $headers)) {
  echo "Message sent successfully.";
} else {
  echo "Sorry, there was an error sending your message. Please try again later.";
}
?>
