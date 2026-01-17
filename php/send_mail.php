<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "virendrajagnade66@gmail.com"; // Replace with your email address
  $subject = "New Contact Form Submission";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $email_body = "You have received a new message.\n\nHere are the details:\nName: $name\nEmail: $email\nMessage:\n$message";
  $headers = "From: $email\n";
  $headers .= "Reply-To: $email";

  // Send the email
  if (mail($to, $subject, $email_body, $headers)) {
    // Redirect to a thank you page
    header("Location: thank_you.html");
  } else {
    echo "Oops! Something went wrong and we couldn't send your message.";
  }
}
?>
