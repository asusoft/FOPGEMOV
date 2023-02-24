<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "asusoft19a@gmail.com"; // Replace with your email address
  $subject = "New message from contact form";
  $name = $_POST['first-name'] . " " . $_POST['last-name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $headers = "From: " . $name . " <" . $email . ">\r\n";
  $headers .= "Reply-To: " . $email . "\r\n";
  $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

  if (mail($to, $subject, $message, $headers)) {
    echo "Message sent successfully.";
  } else {
    echo "Sorry, there was an error sending your message. Please try again later.";
  }
}
?>
