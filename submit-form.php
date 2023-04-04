<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Heather Kincer - Personal Profile</title>
	<link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <header>
    <h1>Heather Kincer</h1>
    <nav>
      <ul>
        <li><a href="index.html">About</a></li>
        <li><a href="index.html#skills">Skills</a></li>
        <li><a href="experience.html">Experience</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </nav>
  </header>
<main>
    <section id="thankyou">
<?php
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Set email recipient
//$to = "hnkincer@waketech.edu";

// Set email subject
$subject = "New message from your website";

// Set email message
$body = "Name: " . $name . "\n"
      . "Email: " . $email . "\n\n"
      . "Message:\n" . $message;

// Set email headers
$headers = "From: " . $name . " <" . $email . ">\r\n";
$headers .= "Reply-To: " . $email . "\r\n";

echo "<p>Thank you for contacting me. I will get back to you soon.</p>";
// Send email
/*if (mail($to, $subject, $body, $headers)) {
  echo "<p>Thank you for contacting me. I will get back to you soon.</p>";
} else {
  echo "<p color='red'>Error sending email. Please try again later.</p>";
}*/
?>
 </section>
  </main>
  
  <footer>
    <p>&copy; 2023 Heather Kincer. All rights reserved.</p>
  </footer>
</body>
</html>
