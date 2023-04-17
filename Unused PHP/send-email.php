<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = 'bus.griff@gmail.com';
  $subject = "New email from Griff Productions website";
  $body = "Name: $name\nEmail: $email\nMessage: $message";

  if (mail($to, $subject, $body)) {
    echo 'Your message has been sent.';
  } else {
    echo 'There was a problem sending your message. Please try again.';
  }
}
?>
