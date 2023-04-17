<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $msg = $_POST["msg"];

  $to = "sergiop@toledo.com.br";
  $headers = "From: $email";

  $message = "Name: $name\n\nEmail: $email\n\nSubject: $subject\n\nMessage:\n$msg";

  mail($to, $subject, $message, $headers);
}
?>
